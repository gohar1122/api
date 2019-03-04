<?php
use App\Model\Product;
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Model\Review::class, function (Faker\Generator $faker) {
   

    return [
        'product_id' => function(){
return Product::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5)
    ];
});
