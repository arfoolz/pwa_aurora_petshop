<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;
use Illuminate\Support\Str;
// use App\Helpers\Helper;

class DashboardStokBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtStok = Stok::all();
        return view('Admin.StokBarang.Stok', compact('dtStok'));
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.StokBarang.Create_Stok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Stok::Create([
            'kode_barang' => $request->kode_barang,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'satuan' => $request->satuan,
            'stok' => $request->stok,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'deskripsi' => $request->deskripsi,
            'expired' => $request->expired,
        ]);

        return redirect('/stok-barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stkbrg = StokBarang::findorfail($id);
        return view('Admin.Stok_Edit_Admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stkbrg = StokBarang::findorfail($id);
        $stkbrg->update($request->all());
        return redirect('stok-barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stkbrg = StokBarang::findorfail($id);
        $stkbrg->delete();
        return back();
    }
}
