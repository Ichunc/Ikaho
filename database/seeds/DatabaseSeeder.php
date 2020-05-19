<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
//        $this->call(StayPlansSeeder::class);
//        $this->call(HotelClassificationsSeeder::class);
//        $this->call(HotelsSeeder::class);
//        $this->call(konishiTableSeeder::class);
          $this->call(MembersTableSeeder::class);
    }
}
