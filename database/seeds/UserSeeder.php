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
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(20),
            'password' => Str::random(20),
            'phone_number' => Str::random(10),
            'role_id' => 1,

            
        ]);
    }
}
