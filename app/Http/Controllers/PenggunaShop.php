<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class PenggunaShop extends Controller
{
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtPrdct        = Product::all();

        return view('Pengguna.Shop.Shop', compact('countCart','dtPrdct'));
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
        $countCart      = DB::table('carts')->count();
        $siPrdct        = Product::findorfail($id);
        
        return view('Pengguna.Shop.Detail_Shop', compact('siPrdct', 'countCart'));
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
