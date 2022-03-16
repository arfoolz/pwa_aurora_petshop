<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;
use App\Models\Kategori;
use App\Models\Satuan;
use Illuminate\Support\Str;
use App\Helpers\Helper;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardStokBarangController extends Controller
{
    
    public function index(Request $request)
    {
        // $dtStok = Stok::With('kategori','satuan')->get();
        // $dtktgr = Kategori::all();
        // $dtstn = Satuan::all();


        if($request->has('search')){
            $dtStok = Stok::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            $dtktgr = Kategori::all();
            $dtstn = Satuan::all();
            
        }else{
            $dtStok = Stok::With('kategori','satuan')->get();
            $dtktgr = Kategori::all();
            $dtstn = Satuan::all();
        }

        return view('Admin.StokBarang.Stok', compact('dtStok', 'dtktgr', 'dtstn'));
    }    

   
    public function create()
    {
        $dtktgr = Kategori::all();
        $dtstn = Satuan::all();
        return view('Admin.StokBarang.Create_Stok', compact('dtktgr', 'dtstn'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // -------------------------- BamaraID ( Masih Eror di Simpan Gambar menjadi Tmp ) ----------------------------
        
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();
        // $dtUpload = new Stok;
        // $dtUpload->nama = $request->nama;
        // $dtUpload->gambar = $namaFile;
        // $dtUpload->save();
        $nm->move(public_path().'/img-Stok', $namaFile);
        
    
        // -------------------------- Pixel Developer ( Error di Call Member Method ) ---------------------------------

        // $file_name = $request->gambar->getClientOriginalName();
        // $gambar = $request->image->storeAS('/img-Stok', $file_name);\
        
       

        $config = ['table'=>'stoks','field'=>'kode_barang', 'length'=>7,'prefix'=>'KB-'];
        $kode_barang = IdGenerator::generate($config);

        Stok::Create([
            'kode_barang' => $kode_barang,
            'nama'        => $request->nama,
            'kategori_id' => $request->kategori_id,
            'satuan_id'   => $request->satuan_id,
            'stok'        => $request->stok,
            'harga_jual'  => $request->harga_jual,
            'harga_beli'  => $request->harga_beli,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $namaFile,
            'expired'     => $request->expired,
        ]);

        return redirect('/stok-barang');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $stkbrg = Stok::findorfail($id);
        $dtktgr = Kategori::all();
        $dtstn = Satuan::all();
        return view('Admin.StokBarang.Edit_Stok', compact('dtktgr', 'dtstn'));
    }

    
    public function update(Request $request, $id)
    {
        $stkbrg = Stok::findorfail($id);
        $stkbrg->update($request->all());
        return redirect('stok-barang');
    }

    
    public function destroy($id)
    {
        $stkbrg = Stok::findorfail($id);
        $stkbrg->delete();
        return back();
    }
}
