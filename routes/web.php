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

Route::group(['middleware' => ['auth','ceklevel:superadmin']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/pesanan-barang', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananBarang']);

    Route::get('/pesanan-titipan', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananTitipan']);

    Route::get('/stok-barang', [App\Http\Controllers\DashboardStokBarangController::class, 'index']);
    Route::get('/create-stok', [App\Http\Controllers\DashboardStokBarangController::class, 'create']);
    Route::post('/simpan-create-stok', [App\Http\Controllers\DashboardStokBarangController::class, 'store']);
    Route::get('/edit-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'edit'])->name('edit-stok');
    Route::post('/update-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'update'])->name('update-stok');
    Route::get('/delete-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'destroy'])->name('delete-stok');

    Route::get('/user-admin', [App\Http\Controllers\DashboardUserController::class, 'indexAdmin'])->name('user-admin');
    Route::get('/create-admin', [App\Http\Controllers\DashboardUserController::class, 'createAdmin']);
    Route::post('/simpan-create-admin', [App\Http\Controllers\DashboardUserController::class, 'storeAdmin']);
    Route::get('/edit-admin/{id}', [App\Http\Controllers\DashboardUserController::class, 'editAdmin'])->name('edit-admin');
    Route::post('/update-admin/{id}', [App\Http\Controllers\DashboardUserController::class, 'updateAdmin'])->name('update-admin');
    Route::get('/delete-admin/{id}', [App\Http\Controllers\DashboardUserController::class, 'destroyAdmin'])->name('delete-admin');

    Route::get('/user-pengguna', [App\Http\Controllers\DashboardUserController::class, 'indexPengguna'])->name('user-pengguna');

    Route::get('/report', [App\Http\Controllers\DashboardReportController::class, 'index']);
});

Route::group(['middleware' => ['auth','ceklevel:superadmin,admin']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
});


//Pengguna
// Route::get('/login', function () {
//     return view('Pengguna.Auth.Login');
// })->name('login');

// Route::get('/daftar', function () {
//     return view('Pengguna.Auth.Register');
// })->name('daftar');

Route::get('/daftar', [App\Http\Controllers\UserProfileController::class, 'index']);
Route::post('/simpan-user', [App\Http\Controllers\UserProfileController::class, 'store']);
// `Route::get('/edit-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'edit'])->name('edit-stok');
// Route::post('/update-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'update'])->name('update-stok');
// Route::get('/delete-stok/{id}', [App\Http\Controllers\DashboardStokBarangController::class, 'destroy'])->name('delete-stok');`



Route::get('/beranda', function () {
    return view('Pengguna.Beranda');
})->name('beranda');

Route::get('/about', function () {
    return view('Pengguna.about');
})->name('about');