<?php

namespace App\Models;

use App\Models\Profesion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participante extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre", "seminarios_id", "profesion_id", "institucion_id", "nombre", "foto", "profesion", "biografia"
    ];

     /* relacion  mucho  a uno */
     public function Profesion()
     {
         return $this->belongsTo(Profesion::class, 'profesion_id');
     }
}
