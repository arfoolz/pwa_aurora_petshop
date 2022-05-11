<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PenggunaCart extends Controller
{
    
    public function index()
    {
        $countCart      = DB::table('carts')->count();

        return view('Pengguna.Transaksi.Cart', compact('countCart'));
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
