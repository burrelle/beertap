<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class BeerTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->beer = factory('App\Beer')->create();
    }

    /** @test */
    public function can_see_all_beers()
    {
        $this->get('/beers')
            ->seeJson(['name' => $this->beer->name]);
    }

    /** @test */
    public function a_beer_has_a_brewery()
    {
        $this->assertInstanceOf('App\Brewery', $this->beer->brewery);
    }

    /** @test */
    public function can_create_a_beer()
    {
        $beer = factory('App\Beer')->make();
        $this->post('/beers', $beer->toArray());
        $this->get('/beers')
            ->seeJson(['name' => $this->beer->name]);
    }
}
