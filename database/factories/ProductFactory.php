<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,2000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30),
    ];
});
