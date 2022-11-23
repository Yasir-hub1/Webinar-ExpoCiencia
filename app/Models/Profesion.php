<?php

namespace App\Models;

use App\Models\Participante;
use App\Models\ParticipanteLocal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profesion extends Model
{
    use HasFactory;

     // relacion de 1 a muchos de Profesion a participantes locales
     public function partLocales()
     {
         return $this->hasMany(ParticipanteLocal::class, 'id');
     }

      // relacion de 1 a muchos de Profesion a invitados
      public function Invitados()
      {
          return $this->hasMany(Participante::class, 'id');
      }
}
