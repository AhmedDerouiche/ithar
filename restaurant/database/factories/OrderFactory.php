<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order;
use Faker\Generator as Faker;

$factory->define(order::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'total_amount' => $faker->randomDigitNot,
        'tax_amount' =>$faker->randomDigitNot,
        'complete_time'=>$faker->time,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
