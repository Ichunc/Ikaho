<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class, 30)->create();
    }
}
