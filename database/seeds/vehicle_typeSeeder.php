<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vehicle_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
        
            ['name' => 'Estate_car'],
            ['name' => 'Saloon'],
            ['name' => 'Small_car'],
            ['name' => 'Cabrio'],
            ['name' => 'Coupe'],
            ['name' => 'Suv']
       
            ]);
        }
    }
    