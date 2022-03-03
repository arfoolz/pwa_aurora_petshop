<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $dtAdmin = Admin::all();
        return view('Admin.User.Admin.User_Admin',compact('dtAdmin'));
    }

    public function indexPengguna()
    {
        $dtUser = User::all();
        return view('Admin.User.Pengguna.User_Pengguna',compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAdmin()
    {
        return view('Admin.User.Admin.Create_Admin');
    }

    public function createPengguna()
    {
        return view('Admin.User.Admin.Create_Pengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function editAdmin($id)
    {
        $siadmin = Admin::findorfail($id);
        return view('Admin.User.Edit_Admin',compact('siadmin'));
    }

    public function editPengguna($id)
    {
        $siadmin = User::findorfail($id);
        return view('Admin.User.Edit_Pengguna',compact('siPengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAdmin($id)
    {
        $siadmin = Admin::findorfail($id);
        $siadmin->delete();
        return back();
    }

    // public function destroy($id)
    // {
    //     $siadmin = User::findorfail($id);
    //     $siadmin->delete();
    //     return back();
    // }
}
