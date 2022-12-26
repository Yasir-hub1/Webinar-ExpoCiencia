<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'pais';

    protected $fillable = [
        'id',
        'nombrePais',

    ];

     // relacion de 1 a muchos de Profesion a participantes locales
     public function userInstitucion()
     {
         return $this->hasMany(User::class, 'id');
     }
}
