<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bejegyzeseks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */


    public function up()
    {
        Schema::create('bejegyzeseks', function (Blueprint $table) {

            $table->integer('id')->primary();
            $table->integer('tevekenyseg_id');
            $table->string('osztaly_id', 10);
            $table->string('allapot', 20);

            
            $table->foreign('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegeks');

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
        Schema::dropIfExists('bejegyzeseks');
    }
}
