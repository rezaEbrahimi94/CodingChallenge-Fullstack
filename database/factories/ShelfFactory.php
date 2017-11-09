<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shelf::class, function (Faker $faker) {

    $name = $faker->colorName;

    return [
        'name' => $name,
        'slug' => str_slug($name)
    ];
});
