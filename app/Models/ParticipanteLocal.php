<?php

namespace App\Models;

use App\Models\Profesion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParticipanteLocal extends Model
{
    use HasFactory;

    /* relacion  mucho  a uno */
    public function Profesion()
    {
        return $this->belongsTo(Profesion::class, 'profesions_id');
    }
}
