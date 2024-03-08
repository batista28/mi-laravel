<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mangas extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'precio',
        'stock',
        'imagen',
        'genero_id',
        'editorial_id',
    ];
    public function editorials()
    {
        return $this->belongsTo(Editorials::class); // Asumiendo que un manga pertenece a una editorial
    }

    public function genero()
    {
        return $this->belongsTo(Generos::class); // Asumiendo que un manga pertenece a un género
    }
}
