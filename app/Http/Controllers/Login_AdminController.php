<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class Login_AdminController extends Controller
{
    public function postlogin_admin (Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect('login-admin');
    }

    public function postlogout_admin (Request $request)
    {
        Auth::logout();
        return redirect('login-admin');
    }
}