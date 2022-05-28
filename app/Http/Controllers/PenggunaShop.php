<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Satuan;
use DB;

class PenggunaShop extends Controller
{
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtPrdct        = Product::with('kategori', 'satuan')->get();
        $dtKtgr         = Kategori::all();
        $dtStn          = Satuan::all();
        $dtUser         = User::all();

        return view('Pengguna.Shop.Shop', compact('countCart','dtPrdct', 'dtUser'));
    }

    
    public function detail($id)
    {
        $countCart      = DB::table('carts')->count();
        $siPrdct        = Product::with('kategori', 'satuan')->findorfail($id);
        $dtPrdct        = Product::all();
        $dtStn          = Satuan::all();
        $dtUser         = User::all();
        
        return view('Pengguna.Shop.Detail_Shop', compact('siPrdct', 'countCart', 'dtUser', 'dtPrdct', 'dtStn'));
    }
    
}
