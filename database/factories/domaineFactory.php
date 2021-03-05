<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\domaine;
use Faker\Generator as Faker;

$factory->define(domaine::class, function (Faker $faker) {
    return [
        "nom"=>"Reseau"
    ];
});
