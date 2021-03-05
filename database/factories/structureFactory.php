<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\structure;
use Faker\Generator as Faker;

$factory->define(structure::class, function (Faker $faker) {
    return [
        "nom"=>"UEMOA"
    ];
});
