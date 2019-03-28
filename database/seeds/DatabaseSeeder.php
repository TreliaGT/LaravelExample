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
        $this->call(manufacturersSeeder::class);
        $this->call(gameTypeSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
