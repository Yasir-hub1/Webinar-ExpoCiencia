<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilEstudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'carrera',
        'biografia',
        'foto',
        'user_id',

    ];


       // relacion de uno a uno con Users
       public function userEstudiante()
       {
           return $this->belongsTo(User::class, 'user_estudiante_id');
       }
}
