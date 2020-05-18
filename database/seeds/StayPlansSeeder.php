<?php

use Illuminate\Database\Seeder;

class StayPlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ダミーデータ
        $param = [
            'hotel_id' => 1,
            'plan_name' => '全部付きプラン',
            'description' => '',
            'price' => 65000,
            'room_amount' => 2,
            'deleted' => true,
            'deleted_date' => '2019-03-31',
            'note' => '経営不振のため削除',
        ];
        DB::table('stay_plans')->insert($param);

        $param = [
            'hotel_id' => 2,
            'plan_name' => '素泊まり',
            'description' => '',
            'price' => 77000,
            'room_amount' => 1,
            'deleted' => false,
            'deleted_date' => '',
            'note' => '',
        ];
        DB::table('stay_plans')->insert($param);

        $param = [
            'hotel_id' => 2,
            'plan_name' => '夕食付き',
            'description' => '',
            'price' => 89000,
            'room_amount' => 2,
            'deleted' => false,
            'deleted_date' => '',
            'note' => '',
        ];
        DB::table('stay_plans')->insert($param);
    }
}
