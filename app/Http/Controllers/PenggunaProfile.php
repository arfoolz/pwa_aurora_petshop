<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Profile;
use App\Models\User;
use App\Models\Gender;
use App\Models\Level;
use Illuminate\Http\Request;
use Auth;
use DB;

class PenggunaProfile extends Controller
{
    
    public function index($id)
    {
        if(Auth::user())
        {
            $countCart         = DB::table('carts')->count();
            // $dtCart            = Cart::where('user_id', Auth::id())->get();
            // $dtCartItem     = Cart::With('product', 'user', 'bank')->get('id');
            // $dtPrdct        = Product::all();
            // $dtBank         = Bank::all();
            $siUser            = User::findorfail($id);
            $dtUser            = User::all();
            // $dtGender          = Gender::all();
            // $dtLevel           = Level::all();

            return view('Pengguna.Profile.Profile', compact('countCart', 'siUser', 'dtUser'));
        }
        else
        {
            return redirect('login');
        }
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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
