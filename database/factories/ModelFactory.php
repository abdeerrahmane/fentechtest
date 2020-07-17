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
        'prenom' => $faker->prenom,
        'numero_tel' => $faker->phoneNumber
        
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'titre_menu' => $faker->name,
    ];
});

$factory->define(App\Contenu::class, function (Faker\Generator $faker) {
    return [
        'titre' => $faker->chrome ,
        'prix' => $faker->numberBetween(1, 4000),
        'photo_id' => $faker->numberBetween(1, 40),
        'menu_id' => $faker->numberBetween(1, 40),
        'type_id' => $faker->numberBetween(1, 40)

    ];
});

$factory->define(App\Photo::class, function (Faker\Generator $faker) {
    return [
        'attribut_photo' => $faker->name,
        'url_photo' => $faker->imageUrl($width = 640, $height = 480) 
       
    ];
});

$factory->define(App\Type::class, function (Faker\Generator $faker) {
    return [
        'type_menu' => $faker->name
       
    ];
});
