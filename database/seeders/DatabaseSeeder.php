<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Users::factory(10)->create();
        \App\Models\Autors::factory(10)->create();
        \App\Models\Generos::factory(10)->create();
        \App\Models\Editorials::factory(10)->create();
        \App\Models\Mangas::factory(10)->create();
        \App\Models\AutorMangas::factory(10)->create();
        \App\Models\Clientes::factory(10)->create();
        \App\Models\Pedidos::factory(10)->create();
        \App\Models\DetallePedidos::factory(10)->create();
        \App\Models\Reseñas::factory(10)->create();
        \App\Models\ComentarioReseñas::factory(10)->create();


    }
}
