<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderShopTable extends Migration
{
    public function up()
    {
        Schema::create('order_shop', function (Blueprint $table) {
            $table->id();
            // $table->string('kode_resi')->unique();
            $table->date('tanggal_transaksi');
    
            // Ambil dari Tabel Product
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            // Ambil dari Tabel User
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->string('harga_barang');
            $table->string('jumlah_barang');
            $table->string('jumlah_harga');

            $table->string('nama_kontak');
            $table->string('no_tlpn');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('catatan');

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('order_shop');
    }
}
