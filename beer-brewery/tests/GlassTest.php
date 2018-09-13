<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class GlassTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->glass = factory('App\Glass')->create();
    }

    /** @test */
    public function can_see_all_breweries()
    {
        $this->get('/glasses')
            ->seeJson(['type' => $this->glass->type]);
    }

    /** @test */
    public function a_style_has_a_glass()
    {
        $style = factory('App\Style')->create();
        $this->assertInstanceOf('App\Glass', $style->glass);
    }
}
