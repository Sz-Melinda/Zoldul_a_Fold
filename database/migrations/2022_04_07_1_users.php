<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */


    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name', 50);
            $table->string('password', 50);
            $table->string('email', 30);
            $table->string('osztaly_id', 10);

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
        Schema::dropIfExists('users');
    }
}
