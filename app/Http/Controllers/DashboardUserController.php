<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

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
    public function create()
    {
        return view('Admin.User.Admin.Create_Admin');
    }

    // public function create()
    // {
    //     return view('Admin.User.Admin.Create_Admin');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        Admin::Create([
            'nama' => $request->nama,
            'level' => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_tlpn' => $request->no_tlpn,
            'password' => $request->password,
        ]);

        $request->session()->flash('success', 'Data Berhasil Dibuat! :)');
        return redirect('/user-admin');
    }

    // public function store(Request $request)
    // {
    //     // dd($request->all());

    //     User::Create([
    //         'nama' => $request->nama,
    //         'level' => $request->level,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'email' => $request->email,
    //         'alamat' => $request->alamat,
    //         'no_tlpn' => $request->no_tlpn,
    //         'password' => $request->password,
    //     ]);

    //     return redirect('/user-admin');
    // }

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
        $siadmin = Admin::findorfail($id);
        return view('Admin.User.Edit_Admin',compact('siadmin'));
    }

    // public function edit($id)
    // {
    //     $siadmin = User::findorfail($id);
    //     return view('Admin.User.Edit_Admin',compact('siadmin'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siadmin = User::findorfail($id);
        $siadmin->update($request->all());
        return redirect('user');
    }

    // public function update(Request $request, $id)
    // {
    //     $siadmin = User::findorfail($id);
    //     $siadmin->update($request->all());
    //     return redirect('user');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siadmin = User::findorfail($id);
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
