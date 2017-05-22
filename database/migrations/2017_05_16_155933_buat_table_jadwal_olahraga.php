<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalOlahraga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_olahraga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('atlet_id',false,true);
            $table->foreign('atlet_id')->references('id')->on('atlet')->onDelete('cascade');
            $table->integer('tempat_id',false,true);
            $table->foreign('tempat_id')->references('id')->on('tempat')->onDelete('cascade');
            $table->integer('pelatih_olahraga_id',false,true);
            $table->foreign('pelatih_olahraga_id')->references('id')->on('pelatih_olahraga')->onDelete('cascade');
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
        Schema::drop('jadwal_olahraga');
    }
}
