<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order_Shop;
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
            $dtUser         = User::all();

            return view('Pengguna.Transaksi.Cart', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct', 'dtBank', 'dtUser'));
        }
        else
        {
            return redirect('login');
        }
        
    }
    


    public function AddToCart(Request $request)
    {
        if (Auth::user())
        {

            // dd($request);
            // dd($request->all());

            $jumlah_harga = $request->jumlah_barang*$request->harga_barang;

            Cart::Create([
                'user_id'       => Auth::user()->id,
                'product_id'    => $request->produk_id,
                'jumlah_barang' => $request->jumlah_barang,
                'harga_barang'  => $request->harga_barang,
                'jumlah_harga'  => $jumlah_harga,
            ]);

            return back();
        }
        else 
        {
            return redirect('login');
        }
    }


    public function destroy($id)
    {
        $CartItem = Cart::findorfail($id);
        $CartItem->delete();
        return back();
    }

    // ----------------------------------------------------------------------------------------------------------------------

    public function indexShipment()
    {
        if(Auth::user())
        {
            $countCart      = DB::table('carts')->count();
            $dtCart         = Cart::where('user_id', Auth::id())->get();
            $dtCartItem     = Cart::With('product', 'user', 'bank')->get();
            $dtPrdct        = Product::all();
            $dtBank         = Bank::all();
            $data           = DB::table('carts')->sum('jumlah_harga');
            
            return view('Pengguna.Transaksi.Pembayaran', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct', 'dtBank'));
        }
        else
        {
            return redirect('login');
        }
    }


    public function AddToOrderShop(Request $request)
    {
        if(Auth::user())
        {
            // dd($request->all());

            $dt = Carbon::now();
            $dateNow = $dt->toDateTimeString();

            // Untuk Membuat Kode Transaksi
            $config      = ['table'=>'order_shop','field'=>'tanggal_transaksi', 'length'=>7,'prefix'=>'trs-'];
            $kode_resi   = IdGenerator::generate($config);

            // $jumlah_harga = $request->jumlah_barang*$request->harga_barang;

            // Order_Shop::Create([
            //     'user_id'               => Auth::user()->id,                
            //     'kode_resi'             => $kode_resi,
            //     'tanggal_transaksi'     => $dateNow,
            //     'product_id'            => $request->product_id,
            //     'harga_barang'          => $request->harga_barang,
            //     'jumlah_barang'         => $request->jumlah_barang,
            //     'jumlah_harga'          => $request->jumlah_harga,

            //     'nama_kontak'           => $request->nama_kontak,
            //     'no_tlpn'               => $request->no_tlpn,
            //     'alamat'                => $request->alamat,
            //     'kota'                  => $request->kota,
            //     'kabupaten'             => $request->kabupaten,
            //     'kecamatan'             => $request->kecamatan,
            //     'kode_pos'              => $request->kode_pos,
            //     'catatan'               => $request->catatan,
            // ]);

            // ------------------------------ CARA DEVELOPER AWAM ERROR -------------------------

            $data = $request->all();
            dd($data);
            $order_shop = new Order_Shop;
            
            $order_shop->user_id           = Auth::user()->id;   
            $order_shop->tanggal_transaksi = $dateNow;
            $order_shop->nama_kontak       = $data['nama_kontak'];
            $order_shop->no_tlpn           = $data['no_tlpn'];
            $order_shop->alamat            = $data['alamat'];
            $order_shop->kota              = $data['kota'];
            $order_shop->kabupaten         = $data['kabupaten'];
            $order_shop->kecamatan         = $data['kecamatan'];
            $order_shop->kode_pos          = $data['kode_pos'];
            $order_shop->catatan           = $data['catatan'];
            $order_shop->save();
            
            if(count($data['product_id'] > 0 )) {
                foreach ($data['product_id'] as $item=>$value){
                    $data2=array(
                        'user_id'       =>$customer->id,
                        'product_id'    =>$data['product_id'][$item],
                        'harga_barang'  =>$data['harga_barang'][$item],
                        'jumlah_barang' =>$data['jumlah_barang'][$item],
                        'jumlah_harga'  =>$data['jumlah_harga'][$item],
                    );
                }
            }   Order_Shop::create($data2);

            return redirect('/beranda')->with('status','Berhasil"');

            // $total_barang = DB::table('order_shop')->sum('jumlah_barang');
            // $total_harga  = DB::table('order_shop')->sum('jumlah_harga');
            
            // Detail_Order_Shop::Create([
            //     'user_id'               => Auth::user()->id,                
            //     'no_resi'               => $no_resi,
            //     'tanggal_transaksi'     => $dateNow,
            //     'produk_id'             => $request->produk_id,
            //     'total_barang'          => $request->jumlah_barang,
            //     'total_harga'           => $total_harga,

            //     'paystat_id'            => 1,
            //     'bank_id'               => $request->dtBank,
            // ]);  
        }
        else
        {
            return redirect('/login');
        }
    }
    
}
