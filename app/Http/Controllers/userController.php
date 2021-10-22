<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;

class userController extends Controller
{
    //
    public function publichome()
    {
        return view('welcome');
    }
    public function userdash()
    {
        return view('user.dashboard');
    }
    function register()
    {
        return view('user.register');
    }
    public function registration(Request $req)
    {
        $user = new user;
        $user -> name = $req->name;
        $user -> email = $req->email;
        $user -> password = $req->password;
        $user->save();

        session()->put('user',$user->name);
        return redirect(route('welcome'));
    }
}
