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

$factory->define(CodeCommerce\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'cep' => $faker->randomNumber(8),
        'address' => $faker->address(),
        'number' => $faker->randomDigitNotNull(),
        'district' => $faker->streetName(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'complement' => $faker->secondaryAddress(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(CodeCommerce\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});

$factory->define(CodeCommerce\Product::class, function (Faker\Generator $faker) {
    return array(
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->randomNumber(3),
        'featured' => $faker->boolean(50),
        'recommend' => $faker->boolean(50),
        'category_id' => $faker->numberBetween(1,15)
    );
});
