<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\meal;
use Faker\Generator as Faker;

$factory->define(meal::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'photo' => $faker->imageUrl,
        'description' =>$faker->realText,
        'stock_quantity' =>$faker->randomDigitNot , 
        'buy_price' => $faker->randomFloat(3,2,150),
        'sell_price' =>$faker->randomFloat(3,2,200),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
