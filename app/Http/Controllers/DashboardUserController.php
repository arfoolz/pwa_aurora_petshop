<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gender;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardUserController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $dtUser    = User::where('nama_user', 'LIKE', '%' . $request->search . '%')->get();
            $dtGender  = Gender::all();
            $dtLevel   = Level::all();

        }else{
            $dtUser    = User::With('gender')->get();
            $dtGender  = Gender::all();
            $dtLevel   = Level::all();
        }

        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser', 'dtGender', 'dtLevel'));
    }


    public function create()
    {

        $dtGender  = Gender::all();
        $dtLevel   = Level::all();
        return view('Admin.User.Pengguna.Create_Pengguna', compact('dtGender', 'dtLevel'));

    }


    public function store(Request $request)
    {
        // dd($request->all());

        $config      = ['table'=>'users','field'=>'kode_user', 'length'=>7,'prefix'=>'usr-'];
        $kode_user   = IdGenerator::generate($config);

        User::Create([
            'kode_user'   => $kode_user,
            'nama_user'   => $request->nama_user,
            'gender_id'   => $request->gender_id,
            'level_id'    => $request->level_id,
            'email'       => $request->email,
            'alamat'      => $request->alamat,
            'no_tlpn'     => $request->no_tlpn,
            'password'    => Hash::make($request->password),
        ]);

        return redirect('/user-pengguna');

    }

   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $siUser    = User::findorfail($id);
        $dtGender  = Gender::all();
        $dtLevel   = Level::all();

        return view('Admin.User.Pengguna.Edit_Pengguna',compact('siUser', 'dtGender', 'dtLevel'));

    }


    public function update(Request $request, $id)
    {

        $siUser = User::findorfail($id);
        $siUser->update($request->all());

        return redirect('user-pengguna');

    }


    public function destroy($id)
    {

        $siUdmin = User::findorfail($id);
        $siUdmin->delete();

        return back();

    }
}
