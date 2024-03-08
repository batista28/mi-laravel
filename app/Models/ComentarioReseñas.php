<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioReseñas extends Model
{
    use HasFactory;

    protected $fillable = [
        'reseña_id',
        'cliente_id',
        'contenido',
    ];
}
