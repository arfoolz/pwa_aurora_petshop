<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPetcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_petcare', function (Blueprint $table) {
            $table->id();
            $table->string('kode_resi')->Unique();
            $table->date('tanggal_transaksi');

            // Ambil dari Tabel User
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Ambil dari Tabel Pet = Jenis Hewan
            $table->unsignedBigInteger('pet_id');
            $table->foreign('pet_id')->references('id')->on('pets');

            // Ambil dari Tabel Cage
            $table->unsignedBigInteger('cage_id');
            $table->foreign('cage_id')->references('id')->on('cages');
            
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');

            $table->string('nama_kontak');
            $table->string('no_tlpn');
            $table->string('alamat');
            
            // $table->string('provinsi');
            // $table->string('kota');
            // $table->string('kabupaten');
            // $table->string('kecamatan');
            // $table->string('kode_pos');
            // $table->string('catatan');

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
        Schema::dropIfExists('order_petcare');
    }
}
