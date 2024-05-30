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
        Schema::create('bare', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_bare');
            $table->bigInteger('id_barke')->unsigned();
            $table->timestamps();
        });

        Schema::table('bare', function (Blueprint $table) { 
         
            $table->foreign('id_barke')->references('id')->on('barke')
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
        Schema::dropIfExists('bare');
    }
};
