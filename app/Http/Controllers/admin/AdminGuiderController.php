<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGuiderController extends Controller
{
    public function guider(){
        $guiders = User::where('user_role',1)->get();
        return view('admin.guiders.guider-list',compact('guiders'));
    }
}
