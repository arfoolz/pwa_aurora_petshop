<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Admin;
use App\Models\Gender;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DashboardUserController extends Controller
{
    public function indexPengguna(Request $request)
    {

        if($request->has('search')){
            $dtUser = User::where('nama_user', 'LIKE', '%' . $request->search . '%')->get();
            $dtGender = Gender::all();

        }else{
            $dtUser = User::with('gender')->get();
            $dtGender = Gender::all();
        }

        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser', 'dtGender'));
    }


    public function createPengguna()
    {
        return view('Admin.User.Admin.Create_Pengguna');
    }


    public function storePengguna(Request $request)
    {

        // $validateData = $request->validate([
        //     'nama' => 'required|max:20',
        //     'level' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'email' => 'required|unique:admins',
        //     'alamat' => 'required|max:225',
        //     'no_tlpn' => 'required|max:13',
        //     'password' => 'required',
        // ]);

        User::Create([
            'nama'          => $request->nama,
            'level'         => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,
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


    public function editPengguna($id)
    {
        $siadmin = User::findorfail($id);
        return view('Admin.User.Admin.Edit_Pengguna',compact('siPengguna'));
    }


    public function updatePengguna(Request $request, $id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->update($request->all());
        return redirect('user-pengguna');
    }
    
    
    public function destroyPengguna($id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->delete();
        return back();
    }
}
