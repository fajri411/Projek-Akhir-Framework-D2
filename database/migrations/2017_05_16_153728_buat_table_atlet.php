<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableAtlet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('atlet', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nik',17);
            $table->String('nama_atlet',50);
            $table->String('jenis_kelamin');
            $table->text('alamat');
            $table->integer('pengguna_id',false, true);
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('atlet');
    }
}
