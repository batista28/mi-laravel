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
        Schema::create('autor_mangas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('manga_id');
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('manga_id')->references('id')->on('mangas')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores_mangas');
    }
};
