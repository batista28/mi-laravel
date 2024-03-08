<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    public function mangas()
    {
        return $this->hasMany(Mangas::class); // Un género tiene muchos mangas
    }
}
