<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListDattentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_dattents', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("lname");
            $table->string("image")->nullable();
            $table->string("cin_img");
            $table->string("cin");
            $table->string("phone");
            $table->date("berthday");
            $table->string("nvschole");
            $table->bigInteger("formation_id")->unsigned(); //create relation ship between  formation table and this one
            $table->strign("is_account_active")->nullable();
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
        Schema::dropIfExists('list_dattents');
    }
}
