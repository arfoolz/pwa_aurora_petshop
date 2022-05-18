<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Kategori;
use App\Models\Satuan;
use Illuminate\Support\Str;
use App\Helpers\Helper;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardProductController extends Controller
{
    
    public function index(Request $request)
    {

        if($request->has('search')){
            $dtPrdct = Product::where('nama_barang', 'LIKE', '%' . $request->search . '%')->get();
            $dtKtgr  = Kategori::all();
            $dtStn   = Satuan::all();
            
        }else{
            $dtPrdct = Product::With('kategori','satuan')->get();
            $dtKtgr  = Kategori::all();
            $dtStn   = Satuan::all();
        }

        return view('Admin.Product.Product', compact('dtPrdct', 'dtKtgr', 'dtStn'));
        
    }    

   
    public function create()
    {

        $dtKtgr    = Kategori::all();
        $dtStn     = Satuan::all();

        return view('Admin.Product.Create_Product', compact('dtKtgr', 'dtStn'));

    }


    public function store(Request $request)
    {

        // dd($request->all());

        // -------------------------- BamaraID ( Masih Eror di Simpan Gambar menjadi Tmp ) ----------------------------
        
        // $nm = $request->gambar;
        // $namaFile = $nm->getClientOriginalName();
        // $dtUpload = new Stok;
        // $dtUpload->nama = $request->nama;
        // $dtUpload->gambar = $namaFile;
        // $dtUpload->save();
        // $nm->move(public_path().'/img-Stok', $namaFile);
        
    
        // -------------------------- Pixel Developer ( Error di Call Member Method ) ---------------------------------

        
        // $file_name = $request->gambar->getClientOriginalName();
        // $gambar = $request->image->storeAS('/img-Stok', $file_name);
        

        // -------------------------- Funda Of Web It ( FIXED ) --------------------------------------------------------

        if($request->hasfile('gambar'))
        {

            $file      = $request->file('gambar');
            $namaFile  = $file->getClientOriginalName();
            $file->move(public_path().'/img-Product', $namaFile);

        }
       

        $config        = ['table'=>'products','field'=>'kode_barang', 'length'=>6, 'prefix'=>'KB-'];
        $kode_barang   = IdGenerator::generate($config);

        Product::Create([
            'kode_barang' => $kode_barang,
            'nama_barang' => $request->nama_barang,
            'kategori_id' => $request->kategori_id,
            'satuan_id'   => $request->satuan_id,
            'stok'        => $request->stok,
            'harga_jual'  => $request->harga_jual,
            'harga_beli'  => $request->harga_beli,
            'deskripsi'   => $request->deskripsi,
            'gambar'      => $namaFile,
            'expired'     => $request->expired,
        ]);

        return redirect('/product');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {

        $siPrdct    = Product::findorfail($id);
        $dtKtgr    = Kategori::all();
        $dtStn     = Satuan::all();

        return view('Admin.Product.Edit_Product', compact('siPrdct', 'dtKtgr', 'dtStn'));

    }

    
    public function update(Request $request, $id)
    {

        $siPrdct = Product::findorfail($id);
        $siPrdct->update($request->all());
        return redirect('/product');

    }

    
    public function destroy($id)
    {

        $siPrdct = Product::findorfail($id);
        $siPrdct->delete();
        return back();

    }
}
