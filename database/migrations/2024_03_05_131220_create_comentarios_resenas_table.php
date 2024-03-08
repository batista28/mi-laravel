<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentario_reseñas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reseña_id');
            $table->unsignedBigInteger('cliente_id');
            $table->text('contenido');
            $table->timestamps();

            $table->foreign('reseña_id')->references('id')->on('reseñas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('cliente_id')->references('id')->on('clientes')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios_resenas');
    }
};
