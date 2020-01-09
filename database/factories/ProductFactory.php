<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

// Especificar como se debe fabricar cada producto
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'          => $faker->sentence(),
        'short'         => $faker->text(140),
        'description'   => $faker->text(900),
    ];
});
