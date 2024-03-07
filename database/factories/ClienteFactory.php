<?php
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'direccion' => $faker->address,
    ];
});
?>