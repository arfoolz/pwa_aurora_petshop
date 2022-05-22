<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use App\Models\PetCare;
use App\Models\Size;
use App\Models\Bank;
use DB;

class PenggunaPetCare extends Controller
{
    
    public function index()
    {
        $countCart      = DB::table('carts')->count();
        $dtUser         = User::all();
        $dtPet          = Pet::all();
        $dtSize         = Size::all();
        $dtBank         = Bank::all();

       return view('Pengguna.PetCare', compact('countCart', 'dtUser', 'dtPet', 'dtSize', 'dtBank'));
    }

    
    public function create()
    {
        //
    }

    
    public function addToOrder(Request $request)
    {
        // if ($request->session()->has('user'))
        // {

            dd($request->all());

            // $total_harga = $jumlah_barang * $harga_jual;

            PetCare::Create([
                'user_id'          => $request->Auth::user()->id,
                'nama_pemilik'     => $request->nama_pemilik,
                'jenis_hewan'      => $request->jenis_hewan,
                'ukuran_hewan'     => $request->ukuran_hewan,
                'jumlah_hewan'     => $request->jumlah_hewan,
                'tanggal_checkin'  => $request->tanggal_checkin,
                'tanggal_checkout' => $request->tanggal_checkout,
                'tanggal_checkout' => $request->tanggal_checkout,
                'no_tlpn'          => $request->no_tlpn,
                'alamat'           => $request->alamat,
                'bank_id'          => $request->bank_id,
                'jumlah_bayar'     => $jumlah_bayar

            ]);

        // }
        // else
        // {
            return back();;
        // }
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
