<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Engine_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('engine_types')->insert([
        
            ['name' => 'Diesel'],
            ['name' => 'Benzin'],
            ['name' => 'Hibrid'],
            ['name' => 'Electric']
            
        
        ]);
    }
}
