<?php

use Illuminate\Database\Seeder;

class HotelClassificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'シティホテル'
        ];
        DB::table('hotel_classifications')->insert($data);

        $data = [
            'name' => 'リゾートホテル'
        ];
        DB::table('hotel_classifications')->insert($data);

        $data = [
            'name' => 'ビジネスホテル'
        ];
        DB::table('hotel_classifications')->insert($data);

        $data = [
            'name' => '旅館'
        ];
        DB::table('hotel_classifications')->insert($data);

        $data = [
            'name' => '民宿'
        ];
        DB::table('hotel_classifications')->insert($data);

        $data = [
            'name' => 'ペンション'
        ];
        DB::table('hotel_classifications')->insert($data);
    }
}
