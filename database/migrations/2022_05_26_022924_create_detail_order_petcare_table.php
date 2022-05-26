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

            // Ambil dari Tabel Users
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order_petcare');

            // Ambil dari Tabel Product
            $table->unsignedBigInteger('cage_id');
            $table->foreign('cage_id')->references('id')->on('cages');

            // Ambil dari Tabel Product
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            // Ambil dari Tabel PayStat = Payment Status
            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');
            
            $table->date('total_bayar');

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
