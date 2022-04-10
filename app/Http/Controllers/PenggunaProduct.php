<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class PenggunaProduct extends Controller
{
    public function index()
    {
        $dtStok = Stok::all();
        return view('Pengguna.Product.Product', compact('dtStok'));
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

    
    public function detail($id)
    {
        $prdct = Stok::findorfail($id);
        return view('Pengguna.Product.Detail_Product', compact('prdct'));
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
