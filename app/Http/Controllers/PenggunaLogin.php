<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaLogin extends Controller
{
    
    public function index()
    {
        return view ('Pengguna.Auth.Login');
    }
    
}
