<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_resi');
            $table->date('tanggal_transaksi');

            // Ambil Tabel dari User
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Ambil Tabel dari Pesanan : 1. Barang || 2. Titipan Hewan
            $table->unsignedBigInteger('pesanan_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanans');

            // Ambil dari Tabel Cart
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('carts');
            $table->unsignedBigInteger('jumlah_barang_id');
            $table->foreign('jumlah_barang_id')->references('id')->on('carts');

            $table->string('total_item')->nullable();

            $table->string('nama_kontak');
            $table->string('no_tlpn');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('catatan');

            $table->string('jenis_hewan')->nullable();
            $table->string('ukuran_hewan')->nullable();
            $table->string('jumlah_hewan')->nullable();
            $table->string('tanggal_checkin')->nullable();
            $table->string('tanggal_checkout')->nullable();

            $table->string('total_bayar');

            // Ambil dari Tabel Paystat : 1. Unpaid || 2. Paid
            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');

            //Ambil dari Tabel Bank
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

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
        Schema::dropIfExists('transaksis');
    }
}
