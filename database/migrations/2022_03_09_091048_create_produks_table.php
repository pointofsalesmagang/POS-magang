<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            // $table->id();
            $table->increments('id_produk');
            $table->string('kode_produk')->unique();
            $table->string('nama_produk')->unique();
            $table->integer('id_kategori');
            $table->string('merk')->nullable();
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->tinyInteger('diskon');
            $table->integer('stok');
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
        Schema::dropIfExists('produks');
    }
}
