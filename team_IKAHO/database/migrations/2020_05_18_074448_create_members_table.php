<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increment('id');
            $table->string('username');
            $table->string('family_name');
            $table->string('family_name_kana');
            $table->string('first_name');
            $table->string('first_name_kana');
            $table->boolean('sex');
            $table->char('postal');
            $table->string('address');
            $table->string('tel');
            $table->string('email');
            $table->date('birthday');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
