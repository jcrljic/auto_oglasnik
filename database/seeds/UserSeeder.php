<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.hr',
            'password' => Hash::make('admin'),
            'phone_number' => '000000000',
            'role_id' => 1],
            ['first_name' => 'User',
            'last_name' => 'User',
            'email' => 'user@user.hr',
            'password' => Hash::make('user'),
            'phone_number' => '111111111',
            'role_id' => 2]

            
        ]);
    }
}
