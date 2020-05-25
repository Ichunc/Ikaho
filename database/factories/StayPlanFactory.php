<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StayPlan;
use Faker\Generator as Faker;

$factory->define(StayPlan::class, function (Faker $faker) {
    return [
        'hotel_id' => mt_rand(1, 30),
        'plan_name' => 'プラン'.chr(mt_rand(65,90)),
        'description' => '説明文',
        'price' => mt_rand(8, 20) * 1000,
        'room_amount' => mt_rand(1, 5),
        'deleted' => 0,
        'note' => '備考',
    ];
});