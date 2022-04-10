<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardUserController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('search')){
            $dtUser = User::where('nama_user', 'LIKE', '%' . $request->search . '%')->get();
            $dtGender = Gender::all();

        }else{
            $dtUser = User::With('gender')->get();
            $dtGender = Gender::all();
        }

        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser', 'dtGender'));
    }


    public function create()
    {
        $dtGender = Gender::all();
        return view('Admin.User.Pengguna.Create_Pengguna', compact('dtGender'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $config = ['table'=>'users','field'=>'kode_user', 'length'=>7,'prefix'=>'usr-'];
        $kode_admin = IdGenerator::generate($config);

        Admin::Create([
            'kode_user'     => $kode_user,
            'nama_user'     => $request->nama_user,
            'gender_id'     => $request->gender_id,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'no_tlpn'       => $request->no_tlpn,
            'password'      => Hash::make($request->password),
        ]);

        return redirect('/user-pengguna');
    }

   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $siuser = Admin::findorfail($id);
        return view('Admin.User.Admin.Edit_Pengguna',compact('siuser'));
    }


    public function update(Request $request, $id)
    {
        $siuser = User::findorfail($id);
        $siuser->update($request->all());
        return redirect('user-pengguna');
    }


    public function destroy($id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->delete();
        return back();
    }
}
