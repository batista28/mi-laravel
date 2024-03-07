<?php use Faker\Generator as Faker;

$factory->define(App\Models\Pedido::class, function (Faker $faker) {
    return [
        'cliente_id' => factory(App\Models\Cliente::class),
        'fecha' => $faker->dateTime,
        'total' => $faker->randomFloat(2, 10, 500),
    ];
});
?>