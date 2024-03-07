<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioReseña extends Model
{
    use HasFactory;

    protected $fillable = [
        'reseña_id',
        'cliente_id',
        'contenido',
    ];
}
