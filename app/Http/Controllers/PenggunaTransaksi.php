<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Gender;
use App\Models\User;
use Auth;
use DB;

class PenggunaTransaksi extends Controller
{
    
    public function index()
    {

        if(Auth::user())
        {
            $countCart      = DB::table('carts')->count();
            $dtCart         = Cart::where('user_id', Auth::id())->get();
            $dtCartItem     = Cart::With('product', 'gender', 'user')->get();
            $dtPrdct        = Product::all();

            return view('Pengguna.Transaksi.Cart', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct'));
        }

        else

        {

            return redirect('login');

        }
        
    }

    
    public function indexShipment()
    {

        return view('Pengguna.Transaksi.Pembayaran');

    }



    public function checkout(Request $request)
    {
        // if ($request->session()->has('user'))
        // {

            // dd($request->all());

            Cart::Create([
                'user_id'       => Auth::user()->id,
                'produk_id'     => $request->produk_id,
                'jumlah_barang' => $request->jumlah_barang,
                // 'total_harga'   => $request->total_harga,
            ]);
        // }
        // else
        // {
            return redirect('/beranda');
        // }
    }
    

    public function AddToCart(Request $request)
    {

        // if ($request->session()->has('user'))
        // {

            // dd($request->all());

            Cart::Create([
                'user_id'       => Auth::user()->id,
                'produk_id'     => $request->produk_id,
                'jumlah_barang' => $request->jumlah_barang,
                // 'total_harga'   => $request->total_harga,
            ]);
        // }
        // else
        // {
            return redirect('/login');
        // }

    }

    
    // public function update(Request $request, $id)
    // {
    //     //
    // }


    public function destroy($id)
    {

        $CartItem = Cart::findorfail($id);
        $CartItem->delete();
        return back();

    }
}
