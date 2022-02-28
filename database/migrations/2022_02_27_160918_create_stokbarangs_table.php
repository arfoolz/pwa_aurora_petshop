<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 255)->unique();
            $table->string('nama', 50);
            $table->string('jenis', 50);
            $table->string('satuan', 50);
            $table->string('stok', 50);
            $table->string('harga_jual', 100);
            $table->string('harga_beli', 100);
            $table->string('gambar', 255)->nullable();
            $table->string('deskripsi', 255);
            $table->date('expired');
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
        Schema::dropIfExists('stoks');
    }
}
