<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            Transmssion_typeSeeder::class,
            engine_typeSeeder::class,
            vehicle_typeSeeder::class,
            UserSeeder::class,
            CarSeeder::class,
            MessageSeeder::class,
            SaleSeeder::class,

        ]);
    }
}
