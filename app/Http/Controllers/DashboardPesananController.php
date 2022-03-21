<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPesananController extends Controller
{
    
    public function indexPesananBarang()
    {
        return view ('Admin.Pesanan.Barang.Pesanan_Barang');
    }

    public function indexPesananTitipan()
    {
        return view ('Admin.Pesanan.Titipan.Pesanan_Titipan');
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
