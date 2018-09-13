<?php

use Illuminate\Database\Seeder;

class GlassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Glass', 10)->create();
    }
}
