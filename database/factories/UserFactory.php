<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Upload::class, function (Faker $faker) {
    return [
        'nim' => $faker->numberBetween(1236,1256),
        'nama' => $faker->name,
        'email' => $faker->unique()->email,
        'image' => 'images/contoh.jpg',
    ];
});
