<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorials extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fundacion',
        'sede',
    ];
    public function mangas()
    {
        return $this->hasMany(Mangas::class); // Una editorial tiene muchos mangas
    }
}
