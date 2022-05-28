<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrderShopTable extends Migration
{
    
    public function up()
    {
        Schema::create('detail_order_shop', function (Blueprint $table) {
            $table->id();

            // Ambil dari Tabel Order_shop
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order_shop');

            // Ambil dari Tabel Product
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('nama_barang');

            $table->string('harga_barang');
            $table->string('jumlah_barang');
            $table->string('jumlah_harga');

            $table->string('nama_kontak');
            $table->string('alamat');
            $table->string('no_tlpn');
            
            // $table->string('provinsi');
            // $table->string('kota');
            // $table->string('kabupaten');
            // $table->string('kecamatan');
            // $table->string('kode_pos');
            // $table->string('catatan');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('order_shop_detail');
    }
}
