<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {

    $name = $faker->company.' '.$faker->city;
    $isbn = $faker->isbn10;

    return [
        'name' => $name,
        'isbn' => $isbn,
        'shelf_id' => function () {
            return factory(\App\Models\Shelf::class)->create()->getKey();
        }
    ];
});
