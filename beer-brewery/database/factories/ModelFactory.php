<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\Beer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween(5, 10),
        'abv' => $faker->numberBetween(1, 10),
        'ibu' => $faker->numberBetween(1, 100),
        'volume' => $faker->numberBetween(1, 100),
        'brewery_id' => function () {
            return factory('App\Brewery')->create()->id;
        },
        'style_id' => function () {
            return factory('App\Style')->create()->id;
        }
    ];
});

$factory->define(App\Brewery::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'city' => $faker->city,
        'state' => $faker->state,
    ];
});

$factory->define(App\Style::class, function (Faker\Generator $faker) {
    return [
        'style' => $faker->word,
        'glass_id' => function () {
            return factory('App\Glass')->create()->id;
        }
    ];
});

$factory->define(App\Glass::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->word
    ];
});

