<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Product::class, function (Faker\Generator $faker) {
   

    return [
        'name' => $faker->Word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2,30)
    ];
});
