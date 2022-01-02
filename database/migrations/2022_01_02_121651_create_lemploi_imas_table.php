<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLemploiImasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lemploi_imas', function (Blueprint $table) {
            $table->id();
            $table->string("room_1")->nullable();
            $table->string("room_2")->nullable();
            $table->string("room_3")->nullable();
            $table->string("room_4")->nullable();
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
        Schema::dropIfExists('lemploi_imas');
    }
}
