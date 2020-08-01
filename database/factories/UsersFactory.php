<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->sentence,
        'email' => $faker->url,
        'password' => $faker->paragraph,
        'id_number' => $faker->numbers,
    ];
});


