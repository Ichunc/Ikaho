<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('plan_id');
            $table->date('reserve_date');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->integer('room');
            $table->string('note')->nullable();

            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('stay_plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}