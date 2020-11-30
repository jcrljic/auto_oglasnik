<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'price' => 10000.50,
            'buyer_id' => 1,
            'seller_id' => 1,
            
        ]);
    }
}
