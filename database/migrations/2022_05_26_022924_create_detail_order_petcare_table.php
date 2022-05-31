<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrderPetcareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_order_petcare', function (Blueprint $table) {
            $table->id();
            
            // Ambil dari Tabel Order PetCare
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order_petcare');

            // Informasi Kandang
            $table->unsignedBigInteger('cage_id');
            $table->foreign('cage_id')->references('id')->on('cages');
            $table->string('nama_kandang');

            // Informasi Hewan
            $table->string('jenis_hewan');
            
            $table->string('ukuran_kandang');
            $table->integer('harga_kandang');
            $table->integer('jumlah_kandang');
            $table->integer('jumlah_harga');
            $table->date('tanggal_checkin');
            $table->date('tanggal_checkout');

            // $table->string('nama_kontak');
            // $table->string('no_tlpn');
            // $table->string('alamat');
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
        Schema::dropIfExists('order_petcare_detail');
    }
}
