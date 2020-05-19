<?php

use Illuminate\Database\Seeder;

class konishiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'admin_name' => 'admin1',
          'password' => 'password1',
        ];
        DB::table('admins')->insert($param);

        $param = [
          'admin_name' => 'admin2',
          'password' => 'password2',
        ];
        DB::table('admins')->insert($param);

        $param = [
          'admin_name' => 'admin3',
          'password' => 'password3',
        ];
        DB::table('admins')->insert($param);

        $param = [
          'admin_name' => 'admin4',
          'password' => 'password4',
        ];
        DB::table('admins')->insert($param);

    }
}
