<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'played'=> $faker->numberBetween(0,10),
        'won'=>$faker->numberBetween(0,10),
        'drawn'=>$faker->numberBetween(0,5),
        'lost'=>$faker->numberBetween(0,10),
        'points'=>$faker->numberBetween(0,60),
    ];
});
