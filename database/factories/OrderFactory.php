<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {

    $randomCartAmount = rand(1,6);

    return [
        'customer_name'=> $faker->name,
        'customer_address'=> $faker->address,
        'customer_email'=> $faker->email,
        'customer_phone_number'=> $faker->phoneNumber,
        'list_of_items'=> $faker->word,
        'shipping_cost'=> $faker->numberBetween($min = 3, $max = 100),
        'product_cost'=> $faker->numberBetween($min = 100, $max = 200),
        'total_cost'=> $faker->numberBetween($min = 200, $max = 300)
    ];
});
