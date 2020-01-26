<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'height' => $faker->numberBetween($min = 3, $max = 100),
        'width' => $faker->numberBetween($min = 3, $max = 100),
        'description' => $faker->paragraph,
        'image-one'=> $faker->imageUrl($width = 640, $height = 480),
        'image-two'=> $faker->imageUrl($width = 640, $height = 480),
        'price'=> $faker->numberBetween($min = 35, $max = 200),
        'color'=> $faker->safeColorName,
        'sold'=> false,
    ];
});
