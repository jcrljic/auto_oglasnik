<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'message_body' => 'Str::random(20)',
            'from_id' => 1,
            'to_id' => 1,
            
        ]);
    }
}
