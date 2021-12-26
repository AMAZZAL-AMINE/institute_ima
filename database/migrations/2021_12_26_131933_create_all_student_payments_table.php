<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllStudentPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_student_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("student_id")->unsigned()->nullable();
            $table->string("cin")->nullable();
            $table->string("name")->nullable();
            $table->string("PrixDinscription")->nullable();
            $table->string("fisrtMois")->nullable();
            $table->string("twoemeMois")->nullable();
            $table->string("treeMois")->nullable();
            $table->string("phorMois")->nullable();
            $table->string("fiveMois")->nullable();
            $table->string("sixMois")->nullable();
            $table->string("sivenMois")->nullable();
            $table->string("eightMois")->nullable();
            $table->string("nineMois")->nullable();
            $table->string("teenMois")->nullable();
            $table->string("elevMois")->nullable();
            $table->string("twilvMois")->nullable();
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
        Schema::dropIfExists('all_student_payments');
    }
}
