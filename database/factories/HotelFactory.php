<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'hotel_name' => 'ホテル'.$faker->city,
        'hotel_code' => mt_rand(1, 6),
        'hotel_postal' => $faker->postcode,
        'hotel_prefecture' => $faker->prefecture,
        'hotel_city' => $faker->city,
        'hotel_block' => $faker->streetAddress,
        'hotel_tel' => $faker->phoneNumber,
        'checkin_time' =>$faker->time('H:00'),
        'checkout_time' =>$faker->time('H:00')
    ];
});