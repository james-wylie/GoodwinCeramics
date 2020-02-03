<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [


        'order_verified_at'-> now()
        'customer_name'-> $faker->
        'customer_address'-> $faker->
        'customer_email'-> $faker->
        'customer_phone_number'-> $faker->
        'list_of_items'-> $faker->
        'shipping_cost'-> $faker->
        'product_cost'-> $faker->
        'total_cost'-> $faker->
    ];
});
