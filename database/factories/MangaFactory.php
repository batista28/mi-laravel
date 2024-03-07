<?php use Faker\Generator as Faker;

$factory->define(App\Models\Manga::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'autor_id' => factory(App\Models\Autor::class),
        'genero_id' => factory(App\Models\Genero::class),
        'editorial_id' => factory(App\Models\Editorial::class),
        'precio' => $faker->randomFloat(2, 5, 100),
        'stock' => $faker->numberBetween(0, 100),
        'imagen' => $faker->imageUrl,
    ];
});
?>