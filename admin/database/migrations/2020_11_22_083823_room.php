<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Room extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Room', function (Blueprint $table) {
            $table->id();
            $table->integer('price')->nullable();
            $table->integer('lrngth')->nullable();
            $table->string('view')->nullable();
            $table->string('adult')->nullable();
            $table->string('children')->nullable();
            $table->string('bed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Room', function (Blueprint $table) {
            //
        });
    }
}
