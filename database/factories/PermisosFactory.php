<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Permiso;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->word,
        'slug' => $faker->unique()->word
    ];
});
