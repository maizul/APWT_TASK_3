<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;

class loginController extends Controller
{
    //
    function login()
    {
        return view('login');
    }
    public function loginConfirm(Request $req){
        $check = user::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();
        $admin = admin::where('email',$req->email)
                  ->where('password',$req->password)
                  ->first();            
        if($check){
            session()->put('user',$check->name);
            session()->put('userId',$check->id);
            return redirect()->route('userdash');
        }
        elseif($admin)
        {
            session()->put('user',$admin->name);
            session()->put('adminId',$admin->id);
            return redirect()->route('admindash');
        }
        return redirect()->route('login')->with('err', 'These credentials do not match our records');

    }
    public function registration(Request $req)
    {
        $user = new user;
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> password = $req->password;
        $user->save();

        session()->put('user',$user->userId);
        return redirect(route('welcome'));
    }

    public function logout(){
        session()->flush();
        return redirect()->route('welcome');
    }
    function register()
    {
        return view('user.register');
    }
}
