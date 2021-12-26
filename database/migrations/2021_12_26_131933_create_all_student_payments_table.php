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
            $table->string("Prix Dinscription")->nullable();
            $table->string("Premier Mois")->nullable();
            $table->string("2eme Mois")->nullable();
            $table->string("3eme Mois")->nullable();
            $table->string("4eme Mois")->nullable();
            $table->string("5eme Mois")->nullable();
            $table->string("6eme Mois")->nullable();
            $table->string("7eme Mois")->nullable();
            $table->string("8eme Mois")->nullable();
            $table->string("9eme Mois")->nullable();
            $table->string("10eme Mois")->nullable();
            $table->string("11eme Mois")->nullable();
            $table->string("12eme Mois")->nullable();
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
