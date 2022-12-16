<?php

namespace App\Models;

use App\Models\Profesion;
use App\Models\Seminario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participante extends Model
{
    use HasFactory;
    protected $table = 'participantes';
    protected $fillable = [
        "nombre", "profesion_id", "institucion_id", "nombre", "foto", "profesion", "biografia"
    ];

     /* relacion  mucho  a uno */
     public function Profesion()
     {
         return $this->belongsTo(Profesion::class, 'profesion_id');
     }

     public function Seminarios(){
        return $this->belongsToMany(Seminario::class,'asistens');
       }
}
