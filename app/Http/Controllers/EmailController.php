<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use App\Models\User;

class EmailController extends Controller
{
    public function verifyEmail($user_id){
        $user = User::find($user_id);
        if($user){
            \Mail::to($user->email)->send(new MyTestMail($user));
        }else{
            return back()->with('Order Not Found');
        }
    }
}
