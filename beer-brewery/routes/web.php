<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/beers', 'BeerController@index');
$router->post('/beers', 'BeerController@store');
$router->get('/beers/{beer}', 'BeerController@show');
$router->get('/breweries', 'BreweryController@index');
$router->post('/breweries', 'BreweryController@store');
$router->get('/styles', 'StyleController@index');
$router->get('/glasses', 'GlassController@index');
