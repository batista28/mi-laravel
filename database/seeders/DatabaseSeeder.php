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
        \App\Models\User::factory(10)->create();
        \App\Models\Autor::factory(10)->create();
        \App\Models\AutorManga::factory(10)->create();
        \App\Models\Cliente::factory(10)->create();
        \App\Models\ComentarioReseña::factory(10)->create();
        \App\Models\DetallePedido::factory(10)->create();
        \App\Models\Editorial::factory(10)->create();
        \App\Models\Genero::factory(10)->create();
        \App\Models\Manga::factory(10)->create();
        \App\Models\Pedido::factory(10)->create();
        \App\Models\Reseña::factory(10)->create();
                

    }
}
