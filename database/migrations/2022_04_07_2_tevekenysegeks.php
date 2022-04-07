<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tevekenysegeks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */


    public function up()
    {
        Schema::create('tevekenysegeks', function (Blueprint $table) {

            $table->integer('tevekenyseg_id')->primary();
            $table->string('tevekenyseg_nev', 50);
            $table->integer('pontszam');

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
        Schema::dropIfExists('tevekenysegeks');
    }
}
