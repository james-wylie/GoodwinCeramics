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
        'imageOne'=> $faker->imageUrl($width = 640, $height = 480),
        'imageTwo'=> $faker->imageUrl($width = 640, $height = 480),
        'price'=> $faker->numberBetween($min = 35, $max = 200),
        'color'=> $faker->safeColorName,
        'sold'=> false,

        'owner_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
