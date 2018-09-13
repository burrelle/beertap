<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class BreweryTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->brewery = factory('App\Brewery')->create();
    }

    /** @test */
    public function can_see_all_breweries()
    {
        $this->get('/breweries')
            ->seeJson(['name' => $this->brewery->name]);
    }

    /** @test */
    public function a_brewery_has_many_beers()
    {
        $brewery = factory('App\Brewery')->create();
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $brewery->beers);
    }

    /** @test */
    public function can_create_a_brewery()
    {
        $brewery = factory('App\Brewery')->make();
        $this->post('/breweries', $brewery->toArray());
        $this->get('/breweries')
            ->seeJson(['name' => $brewery->name]);
    }
}
