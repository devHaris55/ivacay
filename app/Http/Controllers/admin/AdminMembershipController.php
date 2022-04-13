<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipModel;
use App\Models\PackageRequestsModel;

class AdminMembershipController extends Controller
{
    public function membership(){
        $memberships = MembershipModel::all();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.memberships.memberships-list',compact('memberships'));
    }








    public function package_requests(){
        $package_requests = PackageRequestsModel::all();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.package-requests.package-requests-list',compact('package_requests'));
    }
}
