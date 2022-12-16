<?php

namespace App\Models;

use App\Models\Participante;
use App\Models\ParticipanteLocal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seminario extends Model
{
    use HasFactory;
    protected $table = 'seminarios';
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

    /*relacion muchos a muchos  */
    public function participantes()
    {
        return $this->belongsToMany(ParticipanteLocal::class, 'partipas');
    }

    /*relacion muchos a muchos  */
    public function Invitados()
    {
        return $this->belongsToMany(Participante::class, 'asistens');
    }
}
