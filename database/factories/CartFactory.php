<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cart;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName,
        'product_id' => $faker->unique()->numberBetween($min = 3, $max = 100),
        'price' => $faker->numberBetween($min = 35, $max = 200)
    ];
});
