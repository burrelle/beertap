<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StyleTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->style = factory('App\Style')->create();
    }

    /** @test */
    public function can_see_all_styles()
    {
        $this->get('/styles')
            ->seeJson(['style' => $this->style->style]);
    }

    /** @test */
    public function a_beer_has_a_style()
    {
        $beer = factory('App\Beer')->create();
        $this->assertInstanceOf('App\Style', $beer->style);
    }
}