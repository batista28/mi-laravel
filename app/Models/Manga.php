<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
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
}
