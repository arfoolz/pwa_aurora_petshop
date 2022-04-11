<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class Login_UserController extends Controller
{
    public function postlogin_user (Request $request)
    {
        // dd($request->all());

        if (Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('beranda');
    }

    public function logout (Request $request)
    {
        Auth::logout();
        return redirect('beranda');
    }
}
