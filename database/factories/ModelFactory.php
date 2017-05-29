<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$ugFaker = Faker\Factory::create('en_UG'); // create a French faker

//flyer faker
$factory->define(App\Flyers::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $ugFaker->cityPrefix,
        'area' => $ugFaker->streetName,
        'address' => $ugFaker->streetAddress,
        'district' => $ugFaker->state,
        'price' => $ugFaker->numberBetween(100000, 50000000),
        'description' => $ugFaker->paragraphs(3),
    ];
});
