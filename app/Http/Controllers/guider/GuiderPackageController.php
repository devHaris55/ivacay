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


class GuiderPackageController extends Controller
{
    
    public function guider_packages()
    {
        $packages = PackageModel::where('status', '!=', 2)->get();
        return view('guider.guider_package', compact('packages'));
    }
    public function add_package()
    {
        $countries = CountryModel::all();
        return view('guider.add_package', compact('countries'));
    }
    public function edit_package($id)
    {
        $countries = CountryModel::all();
        $package = PackageModel::find($id);
        return view('guider.edit_package', compact('countries', 'package'));
    }
    public function delete_package(PackageModel $package)
    {
        $package->status = 2;
        $package->save();
        return redirect()->route('Guider_packages');
    }
    public function add_edit_package(Request $req, PackageModel $package)
    {
        (isset($package->id) and $package->id>0) ? $create=0 : $create=1;
        // CHECKING NO OF PACKAGES
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
        if($member->no_of_packages >> count($user_packages))
        {
            $package->status = 0;
            if($create == 0)
            {
                $session_msg = 'Package created successfully';
            } else {
                $session_msg = 'Package edited successfully';
            }
        } else {
            $package->status = 1;
            $session_msg = 'Your package is Inactive because you cover the limit of package';
        }
        // CHECKING NO OF PACKAGES

        (isset($package->id) and $package->id>0) ? $create=0 : $create=1;

        $image_obj = new ImageModel();
        if($req->hasFile('image'))
        {
            $imageName = time().'.'.$req->image->getClientOriginalExtension();
            $req->image->move(public_path('/packages'), $imageName);
            $image_obj->title = $imageName;
        }
        $image_obj->save();
        
        $package->user_id = auth()->user()->id;
        $package->image_id = $image_obj->id;
        $package->title = $req->title;
        $package->description = $req->description;
        $package->country = $req->country;
        $package->country_id = $req->country_id;
        $package->from_date = $req->from_date;
        $package->end_date = $req->end_date;
        // $package->is_taken = $req->is_taken;
        $package->save();

        return back()->with('success', $session_msg);
    }
}


