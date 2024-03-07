<?PHP
use Faker\Generator as Faker;

$factory->define(App\Models\Editorial::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'fundacion' => $faker->date,
        'sede' => $faker->city,
    ];
});
?>