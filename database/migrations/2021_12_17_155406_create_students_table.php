<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("image");
            $table->string("cin");
            $table->string("phone");
            $table->date("berthday");
            $table->string("nvschole");
            $table->decimal("firstPayed")->nullable();
            $table->string("isimaoriphec")->nullable();
            $table->bigInteger("formation_id")->unsigned(); //create relation ship between  formation table and this one
            $table->bigInteger("user_id")->unsigned(); //create relation ship between user table and this one
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
        Schema::dropIfExists('students');
    }
}
