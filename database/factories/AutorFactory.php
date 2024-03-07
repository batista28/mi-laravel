<?php use Faker\Generator as Faker;

$factory->define(App\Models\Autor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'nacionalidad' => $faker->country,
        'fecha_nacimiento' => $faker->date,
    ];
});
?>