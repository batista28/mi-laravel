<?php
use Faker\Generator as Faker;

$factory->define(App\Models\AutorManga::class, function (Faker $faker) {
    return [
        'autor_id' => factory(App\Models\Autor::class),
        'manga_id' => factory(App\Models\Manga::class),
    ];
});
?>