<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayedMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payed_months', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("student_id")->unsigned();
            $table->bigInteger("month_id")->unsigned();
            $table->decimal("prix");
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
        Schema::dropIfExists('payed_months');
    }
}
