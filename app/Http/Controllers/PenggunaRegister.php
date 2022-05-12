<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PenggunaRegister extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        $dtGender = Gender::all();
        return view('Pengguna.Auth.Register', compact('dtGender'));
    }

    
    public function store(Request $request)
    {
        // dd($request->all());

        $config = ['table'=>'users','field'=>'kode_user', 'length'=>7,'prefix'=>'usr-'];
        $kode_user = IdGenerator::generate($config);

        User::Create([
            'kode_user'     => $kode_user,
            'nama_user'     => $request->nama_user,
            'gender_id'     => $request->gender_id,
            'level_id'      => '4',
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'no_tlpn'       => $request->no_tlpn,
            'password'      => Hash::make($request->password),
        ]);

        return redirect('/beranda');
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
