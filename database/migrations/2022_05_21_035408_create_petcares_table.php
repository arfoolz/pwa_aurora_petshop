<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetcaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petcares', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');

            $table->string('nama_pemilik');
            $table->string('no_tlpn');
            $table->string('alamat');
            $table->string('jenis_hewan');
            $table->string('ukuran_hewan');
            $table->string('jumlah_hewan');
            $table->string('tanggal_checkin');
            $table->string('tanggal_checkout');
            $table->string('bank_id');
            $table->string('total_bayar');
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
        Schema::dropIfExists('petcares');
    }
}
