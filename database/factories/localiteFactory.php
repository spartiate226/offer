<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\localite;
use Faker\Generator as Faker;

$factory->define(localite::class, function (Faker $faker) {
    return [
        "nom"=>"Ouagadougou"
    ];
});
