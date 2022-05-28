<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_Shop;
use App\Models\Order_PetCare;
use App\Models\Detail_Order_Shop;
use App\Models\Detail_Order_PetCare;
use App\Models\User;
use App\Models\Paystat;

class DashboardPesananController extends Controller
{
    
    public function indexPesananBarang()
    {
        $dtPsnBrg = Order_Shop::with('user', 'paystat')->get();
        return view ('Admin.Pesanan.Barang.Pesanan_Barang', compact('dtPsnBrg'));
    }

    public function editPesananBarang($id)
    {
        $sidtPsnBrg = Order_Shop::with('paystat')->findorfail($id);
        $dtPaystat = Paystat::all();
        return view ('Admin.Pesanan.Barang.Edit_Pesanan_Barang', compact('sidtPsnBrg', 'dtPaystat'));
    }

    public function updatePesananBarang(Request $request, $id)
    {
        $sidtPsnBrg = Order_Shop::findorfail($id);
        $sidtPsnBrg->update($request->all());

        return redirect('/pesanan-barang');
    }
    
    //---------------------------------------------------------------------------------------------------------------------------
    
    public function indexPesananTitipan()
    {
        $dtPsnTtpn = Order_PetCare::with('user', 'paystat')->get();
        return view ('Admin.Pesanan.Titipan.Pesanan_Titipan', compact('dtPsnTtpn'));
    }

    public function editPesananTitipan($id)
    {
        $dtPsnTtpn = Order_PetCare::findorfail($id);
        $dtPaystat = Paystat::all();
        return view ('Admin.Pesanan.Titipan.Edit_Pesanan_Titipan', compact('dtPsnTtpn', 'dtPaystat'));
    }
  
    public function updatePesananTititpan(Request $request, $id)
    {
        $dtPsnTtpn = Order_PetCare::findorfail($id);
        $dtPsnTtpn->update($request->all());

        return redirect('/pesanan-titipan');
    }
   
    //-------------------------------------------------------------------------------------------------------------------------------


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

    public function destroy($id)
    {
        //
    }
}
