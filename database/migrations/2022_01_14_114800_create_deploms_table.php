<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeplomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deploms', function (Blueprint $table) {
            $table->id();
            $table->string("name_fr");
            $table->string("namr_ar");
            $table->date("berth");
            $table->string("cin");
            $table->string("formation_fr");
            $table->string("formation_ar");
            $table->string("promotion");
            $table->string("moi_fr");
            $table->string("moi_ar");
            $table->string("etabl_fr");
            $table->string("etabl_ar");
            $table->string("fit_a");
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
        Schema::dropIfExists('deploms');
    }
}
