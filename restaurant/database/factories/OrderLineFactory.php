<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order_line;
use Faker\Generator as Faker;
use App\meal;
use App\order;

$factory->define(order_line::class, function (Faker $faker) {
    return [
        'meal_id' => meal::get('id')->random(),
        'order_id'=>order::get('id')->random(),
        'quantity_ordered'=>$faker->randomDigitNotNull,
        'price_each	'=>$faker->randomFloat(3,2,1000),
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
