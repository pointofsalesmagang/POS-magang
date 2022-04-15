<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            // $table->id();
            $table->increments('id_penjualan');
            $table->integer('id_member');
            $table->date('tanggal');
            // $table->text('kode_member');
            $table->text('total_item');
            $table->text('total_harga');
            $table->text('diskon')->default(0);
            $table->text('bayar')->default(0);
            $table->text('diterima')->default(0);
            $table->text('kasir');
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
        Schema::dropIfExists('penjualan');
    }
}
