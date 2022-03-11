<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    
    public function indexAdmin(Request $request)
    {

        if($request->has('search')){
            $dtAdmin = Admin::where('nama', 'LIKE', '%' . $request->search . '%')->get();
            
        }else{
            $dtAdmin = Admin::all();
        }

        return view('Admin.User.Admin.User_Admin',compact('dtAdmin'));
    }

    public function indexPengguna()
    {
        $dtUser = User::all();
        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser'));
    }

    
    public function createAdmin()
    {
        return view('Admin.User.Admin.Create_Admin');
    }

    public function createPengguna()
    {
        return view('Admin.User.Admin.Create_Pengguna');
    }

    
    public function storeAdmin(Request $request)
    {
        // dd($request->all());

        Admin::Create([
            'nama' => $request->nama,
            'level' => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user-admin');
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
            'nama' => $request->nama,
            'level' => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user-pengguna');
    }
   
    public function show($id)
    {
        //
    }

    public function editAdmin($id)
    {
        $siadmin = Admin::findorfail($id);
        return view('Admin.User.Admin.Edit_Admin',compact('siadmin'));
    }

    public function editPengguna($id)
    {
        $siadmin = User::findorfail($id);
        return view('Admin.User.Admin.Edit_Pengguna',compact('siPengguna'));
    }

    public function updateAdmin(Request $request, $id)
    {
        $siadmin = Admin::findorfail($id);
        $siadmin->update($request->all());
        return redirect('user-admin');
    }

    public function updatePengguna(Request $request, $id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->update($request->all());
        return redirect('user-pengguna');
    }
    
    public function destroyAdmin($id)
    {
        $siadmin = Admin::findorfail($id);
        $siadmin->delete();
        return back();
    }

    public function destroyPengguna($id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->delete();
        return back();
    }
}
