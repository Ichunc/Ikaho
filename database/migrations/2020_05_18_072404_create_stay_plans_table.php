<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStayPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stay_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->string('plan_name');
            $table->string('description');
            $table->integer('price');
            $table->integer('room_amount');
            $table->boolean('deleted');
            $table->date('deleted_date')->nullable();
            $table->string('note');
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stay_plans');
    }
}
