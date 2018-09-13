<?php

use Illuminate\Database\Seeder;

class BreweryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Brewery', 10)->create();
    }
}
