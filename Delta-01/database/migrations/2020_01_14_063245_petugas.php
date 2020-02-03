<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Petugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugast',function (Blueprint $table){
            $table->increments('id');
            $table->String('nama_petugas');
            $table->String('alamat');
            $table->String('telp');
            $table->String('username');
            $table->String('password');
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
        Schema::dropIfExists('petugast');
    }
}
