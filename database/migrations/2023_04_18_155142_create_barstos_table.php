<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barsto', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_barang');
            $table->string('nama_barang');
            $table->tinyInteger('stok_barang');
            $table->string('harga_jual');
            $table->string('harga_beli');
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
        Schema::dropIfExists('barsto');
    }
};
