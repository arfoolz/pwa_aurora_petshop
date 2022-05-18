<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('products');
                      
            $table->string('jumlah_barang');
            
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}