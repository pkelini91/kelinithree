<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->name,
        'model' => $faker->name,
        'year' => $faker->name,
        'body' => $faker->paragraph($nbSentences=3, $variableNbSentences=true),
        'type' => $faker->randomElement($array = array('ford','honda','toyota')),
    ];
});
