<?php

namespace App\Http\Controllers\vacationer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use App\Models\JourniesModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class VacationerPackageController extends Controller
{
    
    public function search_packages(Request $req)
    {
        $packages = PackageModel::where('country_id', $req->country_id)
            // ->whereBetween('',[$req->date_from, $req->date_to])
            ->where('from_date', $req->from_date)
            ->where('end_date', $req->end_date)
            // ->where('status', 0)
            ->get();
            // dd($packages);

            return view('vacation_packages', compact('packages'));
    }

    public function package_detail($id)
    {
        $package_detail = PackageModel::find($id);
        $guider_packages = PackageModel::where('user_id', $package_detail->user_id)->where('status', 0)->get();
        return view('package_detail', compact('package_detail', 'guider_packages'));
    }

    public function search_vacation_country(Request $request)
    {
        if($request->ajax()){
            
         if($request->search != null)  {
            $part = CountryModel::where('name','LIKE','%'.$request->search.'%')
            // ->orWhere('title','LIKE','%'.$request->search.'%')
            ->get();
                $output = '';
                if (count($part) > 0) {
                    $output .= '<table class="table table-striped">
                                    <tbody>
                                        ';
                                        foreach($part as $value){
                                        $output .= 
                                            '<tr>
                                                ' . $value->name . '

                                            </tr>'
                                            ;
                                            }
                                    $output .=  '
                                    </tbody>
                                </table>' ;
                                // dd($output);
                    return $output;
                    // return response()->json(['data', $output]);
                    // return redirect()->route('UI_single_product', [$part->id]);
                } else {
                    return $output = 'No Result Found';   
                    // return redirect()->route('UI_part_not_found');
                }
            }else{
                return $output = '';   
            }
        } 
    }
    

    public function stripe_form(PackageModel $package)
    {
        if(Auth::check())
        {
            $package_id = $package->id;
            return view('stripe_payment', compact('package_id'));
        } else {
            return view('login');
        }
    }

    //Package Stripe
    public function event_stripe(Request $req)
    {
        $package = PackageModel::find($req->package_id);
 
        $invoice = rand(1999999999999999, 9999999999999999);
        $user = Auth::user();
        $desc = $package->title;
        $price = $package->price;
        $response = $this->stripe_payment($user->email, $req->stripeToken, $price, $desc);

        if ($response['status'] == 'succeeded') 
        {
            //condition store database Order 
            $journey = new JourniesModel();
            $journey->user_id = auth()->user()->id;
            $journey->package_id = $package->id;
            $journey->payment_id = $response['id'];
            $journey->payment_url = $response['receipt_url'];
            $journey->total_price = $price;
            $journey->save();
        } else {
            return back()->with('error', 'Check your inputs and try again');
        }
        return redirect(route('UI_index'))->with('success', 'Your vacation booked');
    }
}
