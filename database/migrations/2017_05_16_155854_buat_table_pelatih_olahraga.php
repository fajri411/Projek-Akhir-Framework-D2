<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePelatihOlahraga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatih_olahraga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelatih_id',false,true);
            $table->foreign('pelatih_id')->references('id')->on('pelatih')->onDelete('cascade');
            $table->integer('olahraga_id',false,true);
            $table->foreign('olahraga_id')->references('id')->on('olahraga')->onDelete('cascade');
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
        Schema::drop('pelatih_olahraga');
    }
}
