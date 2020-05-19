<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $data = [
        'id' => '0123',
        'username' => 'ikaho',
        'family_name' => '山田',
        'family_name_kana' => 'やまだ',
        'first_name' => '太郎',
        'first_name_kana' => 'たろう',
        'postal' => '123-1234',
        'address' => '東京都渋谷区○○　○○',
        'tel' => '09012345678',
        'email' =>　'ikaho@gmail.com',
        'birthday' => '1990年1月1日',
        'password' => 'ikaho',
      ];

      DB::table('members')->insert($data);
        //
    }
}
