<?php use Faker\Generator as Faker;

$factory->define(App\Models\DetallePedido::class, function (Faker $faker) {
    return [
        'pedido_id' => factory(App\Models\Pedido::class),
        'manga_id' => factory(App\Models\Manga::class),
        'cantidad' => $faker->numberBetween(1, 10),
        'precio_unitario' => $faker->randomFloat(2, 5, 50),
    ];
});
?>