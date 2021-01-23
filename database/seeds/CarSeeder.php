<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'price' => '10000',
            'first_registration' => Carbon::parse('2010-01-01'),
            'kilometer' => 80000.00,
            'power' => 100.00,
            'cubic_capacity'=> '2000',
            'colour' => 'blue',
            'interior_features' => 'navigacija',
            'make'=> 'BMW',
            'model' => 'serija1',
            'vin_number' => str::random(10),
            'location' => 'croatia',
            'lat' => 11.20,
            'lng' => 25.70,
            'vehicle_type_id' => 1,
            'engine_type_id' => 1,
            'transmission_type_id' => 1,
            'owner_id' => 1,            
        ]);
    }
}
