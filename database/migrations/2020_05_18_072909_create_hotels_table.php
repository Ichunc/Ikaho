<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//use App\Models\Hotel;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
     　　　　$table->increments('id');
            $table->string('hotel_name');
            $table->integer('hotel_code');
            $table->string('hotel_postal');
            $table->string('hotel_address');
            $table->string('hotel_tel');
            $table->string('hotel_image')->nullable();
            $table->string('hotel_url')->nullable();
            $table->time('checkin_time')->nullable();
            $table->time('checkout_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
