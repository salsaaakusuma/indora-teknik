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
        Schema::create('barmas', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_barmas');
            $table->string('resi_barmas');
            $table->tinyInteger('jmlh_barmas');
            $table->bigInteger('id_barsto')->unsigned();
            $table->timestamps();
        });

        Schema::table('barmas', function (Blueprint $table) { 
         
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
        Schema::dropIfExists('barmas');
    }
};
