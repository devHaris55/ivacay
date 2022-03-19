<?php

namespace App\Http\Controllers\guider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class GuiderController extends Controller
{
    public function index()
    {
        return view('guider.index');
    }
    
    public function job_portal()
    {
        return view('guider.job_portal');
    }

    // -------------------------------------------------------------------------------------- Membership Plans ----------------------------
    public function membership_plan()
    {
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        if($member)
        {
            $pkg_expiry = $member->created_at->addDay($member->duration);
            $now = Carbon::now();
            if($pkg_expiry > $now)
            {
                return redirect()->route('Guider_index');
            }
        }
        $plans = MembershipPlanModel::where('plan_type', null)->get();
        return view('guider.membership_plans', compact('plans'));
    }
    public function alternate_membership_plan()
    {
        $plans = MembershipPlanModel::where('plan_type', '!=', null)->get();
        return view('guider.alternate_membership_plans', compact('plans'));
    }
    public function membership_subscription(MembershipPlanModel $membership)
    {
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $free_plan = MembershipPlanModel::where('title', 'Free')->first();
        if($membership->id != $free_plan->id)
        {
            if($member)
            {
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                if($membership->no_of_packages >= count($user_packages))
                {
                    $membership_obj = new MembershipModel();
                    $membership_obj->user_id = auth()->user()->id;
                    $membership_obj->membership_id = $membership->id;
                    $membership_obj->payment_id = 1;
                    $membership_obj->no_of_packages = $membership->no_of_packages;
                    $membership_obj->duration = $membership->duration;
                    $membership_obj->save();
                    return redirect()->route('Guider_index');
                } else {
                    return back()->with('warning', 'We\'ll Inactive your exceeding packages after payment');
                }
            } else {

                $membership_obj = new MembershipModel();
                $membership_obj->user_id = auth()->user()->id;
                $membership_obj->membership_id = $membership->id;
                $membership_obj->payment_id = 1;
                $membership_obj->no_of_packages = $membership->no_of_packages;
                $membership_obj->duration = $membership->duration;
                $membership_obj->save();
                return redirect()->route('Guider_index');
            }
        }else {
            $member_free = MembershipModel::where('user_id', auth()->user()->id)->where('membership_id', $free_plan->id)->first();
            if($member_free)
            {
                return back()->with('error', 'Your free package expires. Please buy our plan to proceed');
            }

            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            $membership_obj->payment_id = 1;
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
            return redirect()->route('Guider_index');
        }

        
        return view('guider.alternate_membership_plans', compact('plans'));
    }
    // -------------------------------------------------------------------------------------- Membership Plans ----------------------------

    // public function guider_packages()
    // {
    //     $packages = PackageModel::all();
    //     return view('guider.guider_package', compact('packages'));
    // }
    // public function add_package()
    // {
    //     $countries = CountryModel::all();
    //     // dd($countries);
    //     return view('guider.add_package', compact('countries'));
    // }
    // public function edit_package($id)
    // {
    //     dd(MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first());
    //     $countries = CountryModel::all();
    //     $package = PackageModel::find($id);
    //     return view('guider.edit_package', compact('countries', 'package'));
    // }
    // public function delete_package(PackageModel $id)
    // {
    //     $id->status = 2;
    //     $packages = PackageModel::all();

    //     return redirect()->route('Guider_packages');
    //     return view('guider.guider_package', compact('packages'));
    // }
    
    
    
    // public function add_edit_package(Request $req, PackageModel $package)
    // {
    //     (isset($package->id) and $package->id>0) ? $create=0 : $create=1;
    //     // CHECKING NO OF PACKAGES
    //     $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
    //     $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
    //     if($member->no_of_packages > count($user_packages))
    //     {
    //         $package->status = 0;
    //         if($create == 0)
    //         {
    //             $session_msg = 'Package created successfully';
    //         } else {
    //             $session_msg = 'Package edited successfully';
    //         }
    //     } else {
    //         $package->status = 1;
    //         $session_msg = 'Your package is Inactive because you cover the limit of package';
    //     }
    //     // CHECKING NO OF PACKAGES

    //     (isset($package->id) and $package->id>0) ? $create=0 : $create=1;

    //     $image_obj = new ImageModel();
    //     if($req->hasFile('image'))
    //     {
    //         $imageName = time().'.'.$req->image->getClientOriginalExtension();
    //         $req->image->move(public_path('/packages'), $imageName);
    //         $image_obj->title = $imageName;
    //     }
    //     $image_obj->save();
        
    //     // $package->user_id = auth()->user()->id;
    //     $package->image_id = $image_obj->id;
    //     $package->title = $req->title;
    //     $package->description = $req->description;
    //     $package->country = $req->country;
    //     $package->country_id = $req->country_id;
    //     $package->from_date = $req->from_date;
    //     $package->end_date = $req->end_date;
    //     // $package->is_taken = $req->is_taken;
    //     $package->save();

    //     return back()->with('success', $session_msg);
    // }
    public function guider_profile()
    {
        $countries = CountryModel::all();
        $profile = ProfileModel::where('user_id', auth()->user()->id)->first();
        // $profile = ProfileModel::where('user_id', 2)->first();
        return view('guider.guider_profile', compact('countries', 'profile'));
    }
    public function update_guider_profile(Request $req)
    {
        // dd($req, $profile);
        $profile = ProfileModel::where('user_id', auth()->user()->id)->first();
        if(!$profile)
        {
            $profile = new ProfileModel();
        }
        $profile->user_id = auth()->user()->id;
        $profile->full_name = $req->full_name;
        $profile->phone = $req->phone;
        $profile->address = $req->address;
        $profile->zip_code = $req->zip_code;
        $profile->country_id = $req->country_id;
        $profile->country = $req->country;
        $profile->account_title = $req->account_title;
        $profile->account_number = $req->account_number;
        $profile->save();

        return back()->with('success', 'Profile updated');
    }


    
    public function stripe_form(MembershipPlanModel $membership)
    {
        $plan_id = $membership->id;
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $free_plan = MembershipPlanModel::where('title', 'Free')->first();
        if($membership->id != $free_plan->id)
        {
            if($member)
            {
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                if($membership->no_of_packages >= count($user_packages))
                {
                    return view('guider.stripe_payment', compact('plan_id'));
                } else {
                    return view('guider.stripe_payment', compact('plan_id'))->with('warning', 'We\'ll Inactive your exceeding packages after payment');
                }
            } else {
                return view('guider.stripe_payment', compact('plan_id'));
            }
        }else {
            $member_free = MembershipModel::where('user_id', auth()->user()->id)->where('membership_id', $free_plan->id)->first();
            if($member_free)
            {
                return back()->with('error', 'Your free package expires. Please buy our plan to proceed');
            }
            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            // $membership_obj->payment_id = 1;
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
            return redirect()->route('Guider_index');
        }
        return back()->with('warning', 'Something went wrong');
    }
    public function event_stripe(Request $req)
    {
        $plan = MembershipPlanModel::find($req->plan_id);

        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        if($member)
        {
            $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->orderBy('id', 'DESC')->get();
            if($plan->no_of_packages < count($user_packages))
            {
                for($a = $plan->no_of_packages; $a <= count($user_packages); $a++)
                {
                    $user_packages[a]->status = 1;
                    $user_packages[a]->save();
                }
                return view('guider.stripe_payment', compact('plan_id'));
            }
        }
        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION

        $invoice = rand(1999999999999999, 9999999999999999);
        $user = Auth::user();
        $desc = $plan->title;
        $price = $plan->price;
        $response = $this->stripe_payment($user->email, $req->stripeToken, $price, $desc);

        if ($response['status'] == 'succeeded') 
        {
            //condition store database Order 
            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            $membership_obj->payment_id = $response['id'];
            $membership_obj->receipt_url = $response['receipt_url'];
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
        } else {
            return back()->with('error', 'Check your inputs and try again');
        }
        return redirect(route('UI_index'))->with('success', 'Thank you for purchasing...');
    }
}


