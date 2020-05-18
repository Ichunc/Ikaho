<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'hotel_name' => '伊香保の宿',
            'hotel_code' => 3,
            'address' => '群馬県',
            'hotel_tel' => '03-0000-0000',
            'hotel_url' => 'http://ikahonoyado.com',
            'hotel_image' => 'ikahonoyado.jpg',
            'checkin_time' => '15:00',
            'checkout_time' => '11:00'
        ];

        DB::table('hotels')->insert($data);
    }
}