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
$factory->define(Eloquent\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Eloquent\Book::class, function(Faker\Generator $faker) {
   return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'authors' => $faker->name($gender = null|'male'|'female'),
        'status' => rand(0,1),
        'synopsis' => $faker->sentence($nbWords = 40, $variableNbWords = true),
        'editorial' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'year' => $faker->year($max = 'now') ,
        'pages' => $faker->numberBetween($min = 200, $max = 900),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
   ];
});