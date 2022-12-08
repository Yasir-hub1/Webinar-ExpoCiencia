<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_institucion',
        'id_idioma',
        'titulo',
        'descripcion',
        'duracion',
        'link',
        'videoGrabado',
        'estado',
        'lugar',
    ];
}
