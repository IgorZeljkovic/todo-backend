<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text(200),
        'priority' => $faker->randomElement([null, 1, 2, 3]),
        'is_completed' => $faker->boolean(10),
        'user_id' => $faker->randomElement([1, 2, 3]),
    ];
});
