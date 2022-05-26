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

            // Ambil dari Tabel Users
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            // Ambil dari Tabel Product
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            // Ambil dari Tabel Product
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            // Ambil dari Tabel PayStat = Payment Status
            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');
            
            $table->date('total_item');
            $table->date('total_bayar');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('order_shop_detail');
    }
}
