<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'HandelsMarketing',
            'email' => 'info@handelsmarketing.se',
            'password' => bcrypt('hejsan123'),
        ]);
    }
}
