<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text($maxNbChars = 200),
        'priority' => $faker->randomElement($array = array(null, 1, 2, 3)),
        'completed' => $faker->boolean($chanceOfGettingTrue = 10),
        'user_id' => $faker->randomElement($array = array(1, 2, 3)),
    ];
});
