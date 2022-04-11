<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PenggunaBeranda extends Controller
{
    
    public function index()
    {
       $dtUser = User::all();

       return view('Pengguna.Beranda',compact('dtUser'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
