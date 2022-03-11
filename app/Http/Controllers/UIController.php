<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UIController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function for_guide()
    {
        return view('for_guide');
    }
    public function articles()
    {
        return view('articles');
    }
    public function faq()
    {
        return view('faq');
    }
    public function service_provider()
    {
        return view('service_provider');
    }
    public function vacationer()
    {
        return view('vacationer');
    }


    public function sign_up()
    {
        return view('sign_up');
    }
    public function create_account(Request $req)
    {
        $this->validate($req, [
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'user_role' => ['required'],
        ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        if($req->password){
            $user->password = Hash::make($req->password);
        }
        $user->user_role = $req->user_role;
        $user->save();

        //to shoot an email
        $this->verifyEmail($user->id);

        return back()->with('success','Added Successfully');
    }

    public function login()
    {
        return view('login');
    }
    public function loggedin(Request $req)
    {
        if(!empty($req->email) && !empty($req->password)){
            $userfind = User::where('email', $req->email)->first();
            if($userfind){
                /*means found user*/
                if(Hash::check($req->password,$userfind->password)){
                    /*matched password*/
                    Auth::login($userfind);
                    if(Auth::check()){
                        return redirect(route('UI_index'));
                    }else{
                        return redirect(route('UI_login'));
                    }
                    /*matched password end*/
                }else{
                    return redirect(route('UI_login'))->with('error','Password is incorrect')->with('email', $req->email);
                }
                /*means found user end*/
            }else{
                return redirect(route('UI_sign_up'))->with('error','Email not found');
            }
        }else{
            return redirect(route('UI_login'))->with('warning','Please fill required fields');
        }
    }

    public function user_verified($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        Auth::login($user);

        return redirect(route('UI_index'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('UI_index'));
    }




    public function personal_concierge_service()
    {
        return view('personal_concierge_service');
    }
    public function personal_concierge_service2()
    {
        return view('personal_concierge_service2');
    }
}
