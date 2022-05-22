<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('no_resi');
            $table->date('tanggal_transaksi');

            $table->unsignedBigInteger('pesanan_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanans');
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('carts');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('carts');
            $table->unsignedBigInteger('jumlah_barang_id');
            $table->foreign('jumlah_barang_id')->references('id')->on('carts');
            // $table->unsignedBigInteger('total_item_id');
            // $table->foreign('total_item_id')->references('id')->on('carts');
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            $table->string('total_bayar');

            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');
            
            $table->string('nama_penerima');
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
