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
        Schema::create('barke', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_barke');
            $table->string('resi');
            $table->string('seller');
            $table->tinyInteger('jmlh_barke');
            $table->string('harga_keluar');
            $table->string('omset');
            $table->string('base_prize');
            $table->string('marketplace_fee');
            $table->decimal('packing', 6, 3)->default('1.000');
            $table->string('profit');
            $table->tinyInteger('0');
            $table->bigInteger('id_barsto')->unsigned();
            $table->timestamps();
        });

        Schema::table('barke', function (Blueprint $table) { 
         
            $table->foreign('id_barsto')->references('id')->on('barsto')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barke');
    }
};
