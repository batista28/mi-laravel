<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorMangas extends Model
{
    use HasFactory;
    protected $fillable = [
        'manga_id',
        'autor_id',
    ];
}
