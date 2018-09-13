<?php

use Illuminate\Database\Seeder;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Beer', 10)->create();
    }
}
