<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Product;
use App\Models\Gender;
use App\Models\User;
use App\Models\Bank;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
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
            $dtCartItem     = Cart::With('product', 'user', 'bank')->get('id');
            $dtPrdct        = Product::all();
            $dtBank         = Bank::all();

            return view('Pengguna.Transaksi.Cart', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct', 'dtBank'));
        }
        else
        {
            return redirect('login');
        }
        
    }


    public function AddToCart(Request $request)
    {

        // if ($request->session()->has('user'))
        // {

            // dd($request);
            // dd($request->all());

            $total_harga = $request->jumlah_barang*$request->harga_barang;

            Cart::Create([
                'user_id'       => Auth::user()->id,
                'product_id'    => $request->produk_id,
                'jumlah_barang' => $request->jumlah_barang,
                'harga_barang'  => $request->harga_barang,
                'total_harga'   => $total_harga,
            ]);

        // }
        // else 
        // {
            return back();;
        // }

    }


    public function indexShipment()
    {

        if(Auth::user())
        {
            $countCart      = DB::table('carts')->count();
            $dtCart         = Cart::where('user_id', Auth::id())->get();
            $dtCartItem     = Cart::With('product', 'user', 'bank')->get();
            $dtPrdct        = Product::all();
            $dtBank         = Bank::all();
            // $siBank         = Bank::findorfail($id);

            return view('Pengguna.Transaksi.Pembayaran', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct', 'dtBank'));
        }
        else
        {
            return redirect('login');
        }

    }



    public function AddToCheckout(Request $request)
    {
        // if ($request->session()->has('user'))
        // {

            dd($request->all());

            $dt = Carbon::now();
            $dateNow = $dt->toDateTimeString();

            $config      = ['table'=>'checkouts','field'=>'tanggal_transaksi', 'length'=>7,'prefix'=>'usr-'];
            $no_resi   = IdGenerator::generate($config);

            Checkout::Create([
                'user_id'               => Auth::user()->id,                
                'no_resi'               => $no_resi,
                'tanggal_transaksi'     => $dateNow,
                'produk_id'             => $request->produk_id,
                'jumlah_barang_id'      => $request->jumlah_barang_id,
                'total_item'            => 12,
                'total_bayar'           => 13,
                'paystat_id'            => 1,
                'bank_id'               => $request->dtBank,

                'nama_penerima'         => $request->nama_penerima,
                'no_tlpn'               => $request->no_tlpn,
                'alamat'                => $request->alamat,
                'kota'                  => $request->kota,
                'kabupaten'             => $request->kabupaten,
                'kecamatan'             => $request->kecamatan,
                'kode_pos'              => $request->kode_pos,
                'catatan'               => $request->catatan,
            ]);
        // }
        // else
        // {
            return redirect('/beranda');
        // }
    }
    

    public function destroy($id)
    {

        $CartItem = Cart::findorfail($id);
        $CartItem->delete();
        return back();

    }
}
