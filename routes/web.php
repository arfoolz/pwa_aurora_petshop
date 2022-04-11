<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/', function () {
    return view('welcome');
});


// Admin
Route::post('/postlogin_admin', [App\Http\Controllers\Login_AdminController::class, 'postlogin_admin'])->name('postlogin_admin');
Route::get('/logout', [App\Http\Controllers\Login_AdminController::class, 'logout'])->name('logout');

Route::get('/login-admin', function () {
    return view('Admin.Login_Admin');
})->name('login-admin');

// Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
//     Route::get('/pesanan-barang', [App\Http\Controllers\DashboardController::class, 'pesanan_barang']);
//     Route::get('/pesanan-titipan', [App\Http\Controllers\DashboardController::class, 'pesanan_titipan']);
//     Route::get('/stok-barang', [App\Http\Controllers\DashboardController::class, 'stok_barang']);
// });

Route::group(['middleware' => ['auth','ceklevel:1']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/pesanan-barang', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananBarang']);

    Route::get('/pesanan-titipan', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananTitipan']);

    Route::get('/stok-barang', [App\Http\Controllers\DashboardStokBarangController::class, 'index']);
    Route::get('/create-stok', [App\Http\Controllers\DashboardStokBarangController::class, 'create']);
    Route::post('/simpan-create-stok', [App\Http\Controllers\DashboardStokBarangController::class, 'store']);
    Route::get('/edit-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'edit'])->name('edit-stok');
    Route::post('/update-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'update'])->name('update-stok');
    Route::get('/delete-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'destroy'])->name('delete-stok');

    Route::get('/user-admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('user-admin');
    Route::get('/create-admin', [App\Http\Controllers\DashboardAdminController::class, 'create']);
    Route::post('/simpan-create-admin', [App\Http\Controllers\DashboardAdminController::class, 'store']);
    Route::get('/edit-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'edit'])->name('edit-admin');
    Route::post('/update-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'update'])->name('update-admin');
    Route::get('/delete-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'destroy'])->name('delete-admin');

    Route::get('/user-pengguna', [App\Http\Controllers\DashboardUserController::class, 'index']);
    Route::get('/create-user', [App\Http\Controllers\DashboardUserController::class, 'create']);
    Route::post('/simpan-create-user', [App\Http\Controllers\DashboardUserController::class, 'store']);
    Route::get('/edit-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('edit-user');
    Route::post('/update-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('update-user');
    Route::get('/delete-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('delete-user');

    Route::get('/report', [App\Http\Controllers\DashboardReportController::class, 'index']);
});

Route::group(['middleware' => ['auth','ceklevel:1,2']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
});


//Pengguna

Route::post('/postlogin_user', [App\Http\Controllers\Login_UserController::class, 'postlogin_user'])->name('postlogin_user');
Route::get('/logout_user', [App\Http\Controllers\Login_UserController::class, 'logout'])->name('logout_user');

Route::get('/beranda', [App\Http\Controllers\PenggunaBeranda::class, 'index']);

Route::get('/register', [App\Http\Controllers\PenggunaRegister::class, 'create']);
Route::post('/simpan-create-user', [App\Http\Controllers\PenggunaRegister::class, 'store']);
// Route::get('/edit-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('edit-user');
// Route::post('/update-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('update-user');
// Route::get('/delete-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('delete-user');

Route::get('/product', [App\Http\Controllers\PenggunaProduct::class, 'index']);
Route::get('/detail-product/{id}', [App\Http\Controllers\PenggunaProduct::class, 'detail']);

// Route::get('/login', function () {
//     return view('Pengguna.Auth.Login');
// })->name('login');

// Route::get('/beranda', function () {
//     return view('Pengguna.Beranda');
// })->name('beranda');

Route::get('/about', function () {
    return view('Pengguna.about');
})->name('about');

Route::get('/petcare', function () {
    return view('Pengguna.PetCare');
})->name('petcare');