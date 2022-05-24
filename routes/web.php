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

// Route::get('/', function () {
//     return view('Pengguna.Beranda');
// });


// Admin
Route::post('/postlogin_admin', [App\Http\Controllers\Login_AdminController::class, 'postlogin_admin'])->name('postlogin_admin');
Route::get('/logout', [App\Http\Controllers\Login_AdminController::class, 'postlogout_admin'])->name('postlogout_admin');

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

    Route::get('/product', [App\Http\Controllers\DashboardProductController::class, 'index']);
    Route::get('/create-product', [App\Http\Controllers\DashboardProductController::class, 'create']);
    Route::post('/simpan-create-product', [App\Http\Controllers\DashboardProductController::class, 'store']);
    Route::get('/edit-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'update'])->name('update-product');
    Route::get('/delete-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'destroy'])->name('delete-product');

    Route::get('/user-admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('user-admin');
    Route::get('/create-admin', [App\Http\Controllers\DashboardAdminController::class, 'create']);
    Route::post('/simpan-create-admin', [App\Http\Controllers\DashboardAdminController::class, 'store']);
    Route::get('/edit-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'edit'])->name('edit-admin');
    Route::post('/update-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'update'])->name('update-admin');
    Route::get('/delete-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'destroy'])->name('delete-admin');

    Route::get('/user-pengguna', [App\Http\Controllers\DashboardUserController::class, 'index']);
    Route::get('/create-pengguna', [App\Http\Controllers\DashboardUserController::class, 'create']);
    Route::post('/simpan-create-pengguna', [App\Http\Controllers\DashboardUserController::class, 'store']);
    Route::get('/edit-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'edit'])->name('edit-pengguna');
    Route::post('/update-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'update'])->name('update-pengguna');
    Route::get('/delete-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'destroy'])->name('delete-pengguna');

    Route::get('/report', [App\Http\Controllers\DashboardReportController::class, 'index']);
    Route::get('/download-report', [App\Http\Controllers\DashboardReportController::class, 'reportExportExel'])->name('download-report');
});

Route::group(['middleware' => ['auth','ceklevel:1,2']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
});


//Pengguna

Route::get('/register', [App\Http\Controllers\PenggunaRegister::class, 'create']);
Route::post('/simpan-create-user', [App\Http\Controllers\PenggunaRegister::class, 'store']);
// Route::get('/edit-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('edit-user');
// Route::post('/update-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('update-user');
// Route::get('/delete-user/{id}', [App\Http\Controllers\DashboardUserController::class, 'index'])->name('delete-user');

Route::get('/login', [App\Http\Controllers\PenggunaLogin::class, 'index'])->name('login');
Route::post('/postlogin_user', [App\Http\Controllers\Login_UserController::class, 'postlogin_user'])->name('postlogin_user');
Route::get('/logout_user', [App\Http\Controllers\Login_UserController::class, 'postlogout_user'])->name('postlogout_user');

Route::get('/profile', [App\Http\Controllers\PenggunaProfile::class, 'index']);

Route::get('/beranda', [App\Http\Controllers\PenggunaBeranda::class, 'index']);
Route::get('/', [App\Http\Controllers\PenggunaBeranda::class, 'index']);

Route::get('/about', [App\Http\Controllers\PenggunaAbout::class, 'index']);

Route::get('/petcare', [App\Http\Controllers\PenggunaPetCare::class, 'index']);
Route::get('/petcare/order', [App\Http\Controllers\PenggunaPetCare::class, 'indexOrder']);
Route::post('/add-order', [App\Http\Controllers\PenggunaPetCare::class, 'addToOrder']);

Route::get('/shop', [App\Http\Controllers\PenggunaShop::class, 'index']);
Route::get('/detail-shop/{id}', [App\Http\Controllers\PenggunaShop::class, 'detail']);

Route::get('/cart', [App\Http\Controllers\PenggunaTransaksi::class, 'index']);
Route::post('/add-cart', [App\Http\Controllers\PenggunaTransaksi::class, 'addToCart']);
Route::get('/delete-cart/{id}', [App\Http\Controllers\PenggunaTransaksi::class, 'destroy']);

Route::get('/cart/shipment', [App\Http\Controllers\PenggunaTransaksi::class, 'indexShipment']);
Route::post('/add-checkout', [App\Http\Controllers\PenggunaTransaksi::class, 'addToCheckout']);