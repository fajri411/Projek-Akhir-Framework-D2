<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prestasi_atlet');
            $table->integer('atlet_id')->unsigned();
            $table->foreign('atlet_id')->references('id')->on('atlet')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('prestasi');
    }
}
