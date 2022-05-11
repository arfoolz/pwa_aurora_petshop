<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class PenggunaAbout extends Controller
{
    
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtUser         = User::all();

       return view('Pengguna.About', compact('countCart','dtUser'));
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
