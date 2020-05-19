<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonishiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('reservations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('member_id');
          $table->integer('plan_id');
          $table->date('reserve_date');
          $table->date('checkin_date');
          $table->date('checkout_date');
          $table->string('note');
          $table->timestamps();
      });

      Schema::create('admins', function (Blueprint $table) {
          $table->increments('id');
          $table->string('admin_name');
          $table->string('password');
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
        Schema::dropIfExists('konishi');
    }
}
