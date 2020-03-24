<?php

use Illuminate\Database\Seeder;

class FirstAdminInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'user.png',
        ]);
    }
}
