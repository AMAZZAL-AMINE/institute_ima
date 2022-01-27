<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLemploiIphecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemploi_iphecs', function (Blueprint $table) {
            $table->id();
            $table->string("room_1")->nullable();
            $table->string("room_2")->nullable();
            $table->string("room_3")->nullable();
            $table->string("room_4")->nullable();
            $table->string("room_5")->nullable();
            $table->string("room_6")->nullable();
            $table->string("room_7")->nullable();
            $table->string("room_8")->nullable();
            $table->string("room_9")->nullable();
            $table->string("day");
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
        Schema::dropIfExists('lemploi_iphecs');
    }
}
