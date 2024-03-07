<?php
use Faker\Generator as Faker;

$factory->define(App\Models\ComentarioReseña::class, function (Faker $faker) {
    return [
        'reseña_id' => factory(App\Models\Reseña::class),
        'cliente_id' => factory(App\Models\Cliente::class),
        'contenido' => $faker->paragraph,
    ];
});
?>