<?php

namespace App\Models;

use App\Models\Profesion;
use App\Models\Seminario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParticipanteLocal extends Model
{
    use HasFactory;
    protected $table = 'participante_locals';

    /* relacion  mucho  a uno */
    public function Profesion()
    {
        return $this->belongsTo(Profesion::class, 'profesions_id');
    }

    public function Seminario(){
        return $this->belongsToMany(Seminario::class,'partipas');
       }
}
