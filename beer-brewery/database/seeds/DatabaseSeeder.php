<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('BeerTableSeeder');
        $this->call('BreweryTableSeeder');
        $this->call('StylesTableSeeder');
        $this->call('GlassesTableSeeder');
    }
}
