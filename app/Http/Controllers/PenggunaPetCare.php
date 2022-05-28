<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use App\Models\Size;
use App\Models\Bank;
use App\Models\Cage;
use App\Models\Status;
use DB;
use Auth;

class PenggunaPetCare extends Controller
{
    
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtUser         = User::all();
        $dtPet          = Pet::all();
        $dtSize         = Size::all();
        $dtStatus       = Status::all();
        $dtBank         = Bank::all();
        $dtCage         = Cage::with('size','status')->get();

       return view('Pengguna.PetCare.PetCare', compact('countCart', 'dtUser', 'dtPet', 'dtSize', 'dtBank', 'dtCage', 'dtStatus'));
    }

    
    public function detail($id)
    {

        $countCart   = DB::table('carts')->count();
        $dtUser      = User::all();
        $siCage      = Cage::with('size', 'pet')->findorfail($id);
        $dtPet       = Pet::all();
        $dtBank      = Bank::all();
        $dtSize      = Size::all();
        $dtPet       = Pet::all();
        
        return view('Pengguna.PetCare.Detail_PetCare', compact('dtUser', 'siCage', 'dtPet', 'dtBank', 'dtSize', 'dtPet'));
    }

    // public function addToOrderPetCare(Request $request)
    // {
    //     if(Auth::user())
    //     {
    //         dd($request->all());

    //         $dt = Carbon::now();
    //         $dateNow = $dt->toDateTimeString();

    //         // Untuk Membuat Kode Transaksi
    //         $config      = ['table'=>'order_shop','field'=>'tanggal_transaksi', 'length'=>7,'prefix'=>'trs-'];
    //         $no_resi   = IdGenerator::generate($config);

    //         Order_Shop::Create([
    //             'user_id'               => Auth::user()->id,                
    //             'no_resi'               => $no_resi,
    //             'tanggal_transaksi'     => $dateNow,
    //             'tangggal_checkin'      => $request->tanggal_checkin,
    //             'tangggal_checkout'     => $request->tanggal_checkout,
    //             'cage_id'               => $request->cage_id,  
    //             'pet_id'                => $request->pet_id,
    //             'harga'                 => $request->harga_cage,
    //             'jumlah_harga'          => $request->jumlah_harga,

    //             'nama_kontak'           => $request->nama_kontak,
    //             'no_tlpn'               => $request->no_tlpn,
    //             'alamat'                => $request->alamat,
    //         ]);


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


    // function durasi()
    // {
    //     $tanggal_checkin = $_POST['tanggal_checkin'];
    //     $tanggal_checkout = $_POST['tanggal_checkout'];
    //     $tgchkin = new DateTime($tanggal_checkin);
    //     $tgchkot = new DateTime($tanggal_checkout);
    //     $durasi = $tgchkot->diff($tgchkin);
        
    //     echo json_encode($durasi); // ini saya lupa lempar nya dari controller ke ajax, kalo ga salah sih gini
    // }

}
