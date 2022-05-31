<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Order_Shop;
use App\Models\Order_PetCare;
use App\Models\Detail_Order_PetCare;
use App\Models\Detail_Order_Shop;
use App\Models\Product;
use App\Models\Gender;
use App\Models\User;
use App\Models\Cage;
use App\Models\Bank;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Auth;
use DB;


class PenggunaTransaksi extends Controller
{
    
    public function index(Request $request)
    {

        if(Auth::user())
        {
            $countCart      = DB::table('carts')->count();
            $dtCart         = Cart::where('user_id', Auth::id())->get();
            $dtCartItem     = Cart::With('product', 'user', 'bank')->get('id');
            $dtPrdct        = Product::all();
            $dtKtgr         = Kategori::all();
            $dtBank         = Bank::all();
            $dtUser         = User::all();

            return view('Pengguna.Transaksi.Cart', compact('countCart', 'dtCart', 'dtKtgr', 'dtCartItem', 'dtPrdct', 'dtBank', 'dtUser'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    // public function AddToCart(Request $request)
    // {
    //     if (Auth::user())
    //     {

    //         // dd($request);
    //         // dd($request->all());

    //         $jumlah_harga = $request->jumlah_barang*$request->harga_barang;

    //         $cek_cart = Cart::where('user_id', Auth::user()->id)->where('product_id')->first();

    //         if(empty($cek_cart))
    //         {
    //             $cart = new Cart;
    //             $cart->user_id          = Auth::user()->id;
    //             $cart->product_id       = $request->product_id;
    //             $cart->nama_barang      = $request->nama_barang;
    //             $cart->kategori_barang  = $request->kategori_barang;
    //             $cart->satuan_barang    = $request->satuan_barang;
    //             $cart->jumlah_barang    = $request->jumlah_barang;
    //             $cart->harga_barang     = $request->harga_barang;
    //             $cart->jumlah_harga     = $jumlah_harga;
    //             $cart->save();
    //         }

    //         // Cart::Create([
    //         //     'user_id'         => Auth::user()->id,
    //         //     'product_id'      => $request->produk_id,

    //         //     'nama_barang'     => $request->nama_barang,
    //         //     'kategori_barang' => $request->kategori_barang,
    //         //     'satuan_barang'   => $request->satuan_barang,

    //         //     'jumlah_barang'   => $request->jumlah_barang,
    //         //     'harga_barang'    => $request->harga_barang,
    //         //     'jumlah_harga'    => $jumlah_harga,
    //         // ]);

    //         return redirect('/cart')->with('success', 'Barang berhasil ditambahkan!');
    //     }
    //     else 
    //     {
    //         return redirect('login');
    //     }
    // }

    // public function destroy($id)
    // {
    //     $CartItem = Cart::findorfail($id);
    //     $CartItem->delete();
    //     return back()->with('delete', 'Barang berhasil di hapus!');
    // }

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
            $data           = DB::table("carts")->where(Auth::user()->id)->sum('jumlah_harga');
            
            return view('Pengguna.Transaksi.Pembayaran', compact('countCart', 'dtCart', 'dtCartItem', 'dtPrdct', 'dtBank'));
        }
        else
        {
            return redirect('login');
        }
    }

    //-------------------------------------------------------------------------------------------------------------------------------


    // public function AddToOrderShop(Request $request)
    // {
    //     if (Auth::user())
    //     {
    //         dd($request->all());

    //         $total_barang = 1;
    //         $total_bayar  = 1;

    //         $dt = Carbon::now();
    //         $dateNow = $dt->toDateTimeString();

    //         // Untuk Membuat Kode Transaksi
    //         $config      = ['table'=>'order_shop','field'=>'kode_resi', 'length'=>7,'prefix'=>'trs-'];
    //         $kode_resi   = IdGenerator::generate($config);

    //         $order_shop = new Order_Shop;
    //         $order_shop->tanggal_transaksi = $dateNow;
    //         $order_shop->kode_resi         = $kode_resi;
    //         $order_shop->user_id           = Auth::user()->id;
    //         $order_shop->nama_kontak       = $request->nama_kontak;
    //         $order_shop->no_tlpn           = $request->no_tlpn;
    //         $order_shop->alamat            = $request->alamat;
    //         $order_shop->bank_id           = $request->bank_id;
    //         $order_shop->paystat_id        = 2;
    //         $order_shop->total_barang      = $total_barang;
    //         $order_shop->total_bayar       = $total_bayar+550;
    //         $order_shop->save();

    //         $detail_order_shop = new Detail_Order_Shop;
    //         $detail_order_shop->order_id = $order_shop->id;
    //         $detail_order_shop->product_id       = $request->product_id;
    //         $detail_order_shop->nama_barang      = $request->nama_barang;
    //         $detail_order_shop->harga_barang     = $request->harga_barang;
    //         $detail_order_shop->jumlah_barang    = $request->jumlah_barang;
    //         $detail_order_shop->jumlah_harga     = $request->jumlah_harga;
    //         $detail_order_shop->save();

    //         session()->forget('carts'); 

    //         return redirect('/beranda');
    //     }
    //     else 
    //     {
    //         return redirect('login');
    //     }
    // }

    //--------------------------------------------------------------------------------------------------------------------------------

    // public function AddToOrderShop(Request $request)
    // {
    //     if(Auth::user())
    //     {
    //         // 1. ambil data dari chart yg dikirim

    //         dd($request->all());
            
    //         $data = $request->all();

    //         $dt = Carbon::now();
    //         $dateNow = $dt->toDateTimeString();

    //         // 2. bongkar data 
    //         if(empty($data)) {
    //             $data = json_decode($request->getContent());
    //             $data = json_decode($data);
            
    //             if(is_null($data)) {
    //                 return response()->json("Not valid json", 400);
    //             }
    //         }

    //         /*
    //         Array ( [_token] => U9H0WgLeU9B6LRgxREwifoXXuRBdzooYdzHfhnfw 
    //         [nama_kontak] => [no_tlpn] => [alamat] => [provinsi] => [kota] => 
    //         [kabupaten] => [kecamatan] => [kode_pos] => [catatan] => [product_id] => Array ( [0] => 1 [1] => 2 ) 
    //         [nama_barang] => Array ( [0] => Sakura [1] => Proplan ) 
    //         [jumlah_barang] => Array ( [0] => 1 [1] => 1 ) [harga_barang] => Array ( [0] => 110000 [1] => 220000 ) )
    //         */

    //         // echo "<pre>";
    //         // print_r($data);

    //         // 3. simpan database
    //         $N=0;
    //         foreach ($data['product_id'] as $value) 
    //         {
    //             $orderShop = new Order_Shop;
    //             $orderShop->tanggal_transaksi  = $request->name[$N];
    //             $orderShop->product_id	       = $value;
    //             $orderShop->user_id 	       = Auth::user()->id;
    //             $orderShop->nama_barang 	   = $data['nama_barang'][$N];
    //             $orderShop->harga_barang	   = $data['harga_barang'][$N];
    //             $orderShop->jumlah_barang      = $data['jumlah_barang'][$N];
                
    //             $orderShop->nama_kontak 	   = $request->nama_kontak[$N];
    //             $orderShop->no_tlpn     	   = $request->no_tlpnn[$N];
    //             $orderShop->alamat      	   = $request->alamat[$N];
    //             $orderShop->provinsi	       = $request->provinsi[$N];
    //             $orderShop->kota	           = $request->kota[$N];
    //             $orderShop->kabupaten	       = $request->kabupaten[$N];
    //             $orderShop->kecamatan   	   = $request->kecamatan[$N];
    //             $orderShop->kode_pos	       = $request->kode_pos[$N];

    //             $$orderShop->save();
    //             $N++;
    //         }

            
    //         // 4. return 
            
    //         // $dt = Carbon::now();
    //         // $dateNow = $dt->toDateTimeString();

    //         // Untuk Membuat Kode Transaksi
    //         // $config      = ['table'=>'order_shop','field'=>'tanggal_transaksi', 'length'=>7,'prefix'=>'trs-'];
    //         // $kode_resi   = IdGenerator::generate($config);

    //         // $jumlah_harga = $request->jumlah_barang*$request->harga_barang;

    //         // Order_Shop::Create([
    //         //     'user_id'               => Auth::user()->id,                
    //         //     'kode_resi'             => $kode_resi,
    //         //     'tanggal_transaksi'     => $dateNow,
    //         //     'product_id'            => $request->product_id,
    //         //     'harga_barang'          => $request->harga_barang,
    //         //     'jumlah_barang'         => $request->jumlah_barang,
    //         //     'jumlah_harga'          => $request->jumlah_harga,

    //         //     'nama_kontak'           => $request->nama_kontak,
    //         //     'no_tlpn'               => $request->no_tlpn,
    //         //     'alamat'                => $request->alamat,
    //         //     'kota'                  => $request->kota,
    //         //     'kabupaten'             => $request->kabupaten,
    //         //     'kecamatan'             => $request->kecamatan,
    //         //     'kode_pos'              => $request->kode_pos,
    //         //     'catatan'               => $request->catatan,
    //         // ]);

    //         // ------------------------------ CARA DEVELOPER AWAM ERROR -------------------------

    //         // dd($data);
    //         // $data = $request->all();
    //         // $order_shop = new Order_Shop;
            
    //         // $order_shop->user_id           = Auth::user()->id;   
    //         // $order_shop->tanggal_transaksi = $dateNow;
    //         // $order_shop->nama_kontak       = $data['nama_kontak'];
    //         // $order_shop->no_tlpn           = $data['no_tlpn'];
    //         // $order_shop->alamat            = $data['alamat'];
    //         // $order_shop->kota              = $data['kota'];
    //         // $order_shop->kabupaten         = $data['kabupaten'];
    //         // $order_shop->kecamatan         = $data['kecamatan'];
    //         // $order_shop->kode_pos          = $data['kode_pos'];
    //         // $order_shop->catatan           = $data['catatan'];
    //         // $order_shop->save();
            
    //         // if(count($data['product_id'] > 0 )) {
    //         //     foreach ($data['product_id'] as $item=>$value){
    //         //         $data2=array(
    //         //             'user_id'       =>$customer->id,
    //         //             'product_id'    =>$data['product_id'][$item],
    //         //             'harga_barang'  =>$data['harga_barang'][$item],
    //         //             'jumlah_barang' =>$data['jumlah_barang'][$item],
    //         //             'jumlah_harga'  =>$data['jumlah_harga'][$item],
    //         //         );
    //         //     }
    //         // }   Order_Shop::create($data2);

    //         // return redirect('/beranda')->with('status','Berhasil"');

    //         // $total_barang = DB::table('order_shop')->sum('jumlah_barang');
    //         // $total_harga  = DB::table('order_shop')->sum('jumlah_harga');
            
    //         // Detail_Order_Shop::Create([
    //         //     'user_id'               => Auth::user()->id,                
    //         //     'no_resi'               => $no_resi,
    //         //     'tanggal_transaksi'     => $dateNow,
    //         //     'produk_id'             => $request->produk_id,
    //         //     'total_barang'          => $request->jumlah_barang,
    //         //     'total_harga'           => $total_harga,

    //         //     'paystat_id'            => 1,
    //         //     'bank_id'               => $request->dtBank,
    //         // ]);  
    //     }
    //     else
    //     {
    //         return redirect('/login');
    //     }
    // }

    // ----------------------------------------------------------------------------------------------------------------------------

    public function AddToOrderPetCare(Request $request)
    {
        if (Auth::user())
        {
            // dd($request->all());

            $total_bayar  = $request->harga_kandang * $request->jumlah_hari;

            $dt = Carbon::now();
            $dateNow = $dt->toDateTimeString();

            // Untuk Membuat Kode Transaksi
            $config      = ['table'=>'order_petcare','field'=>'kode_resi', 'length'=>7,'prefix'=>'trs-'];
            $kode_resi   = IdGenerator::generate($config);

            $order_petcare = new Order_PetCare;
            $order_petcare->tanggal_transaksi = $dateNow;
            $order_petcare->kode_resi         = $kode_resi;
            $order_petcare->user_id           = Auth::user()->id;
            $order_petcare->nama_kontak       = $request->nama_kontak;
            $order_petcare->no_tlpn           = $request->no_tlpn;
            $order_petcare->alamat            = $request->alamat;
            $order_petcare->bank_id           = $request->bank_id;
            $order_petcare->paystat_id        = 2;
            $order_petcare->total_kandang     = 1; // Karna Hanya Bisa Memesan 1 kandang untuk satu kali transaksi
            $order_petcare->total_bayar       = $total_bayar + 550; // Masih Belum di Hitung Jumlah
            $order_petcare->save();

            $detail_order_petcare = new Detail_Order_PetCare;
            $detail_order_petcare->order_id = $order_petcare->id;
            $detail_order_petcare->cage_id          = $request->cage_id;
            $detail_order_petcare->tanggal_checkin  = $request->tanggal_checkin;
            $detail_order_petcare->tanggal_checkout = $request->tanggal_checkout;
            $detail_order_petcare->jenis_hewan      = $request->jenis_hewan;
            $detail_order_petcare->nama_kandang     = $request->nama_kandang;
            $detail_order_petcare->ukuran_kandang   = $request->ukuran_kandang;
            $detail_order_petcare->harga_kandang    = $request->harga_kandang;
            $detail_order_petcare->jumlah_kandang   = 1;
            $detail_order_petcare->jumlah_harga     = $request->harga_kandang;
            $detail_order_petcare->save();

            return redirect('/beranda');
        }
        else 
        {
            return redirect('login');
        }
    }
}
