<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\admin;

class adminController extends Controller
{
    //
    public function admindash()
    {
        return view('admin.dashboard');
    }
    public function userlist()
    {
        $user = user::all();
        return view('admin.userlist')->with('user',$user);
    }

    public function deleteuser(Request $request)
    {
        $var = user::where('id',$request->id)->first();
        $var->delete();
        return redirect(route('admin.userlist'));
    }

}
