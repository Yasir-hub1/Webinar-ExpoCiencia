<?php

namespace App\Models;

use App\Models\Seminario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fotos extends Model
{
    use HasFactory;


    /* relacion  mucho  a uno */
    public function seminarios()
    {
        return $this->belongsTo(Seminario::class, 'id_seminario');
    }
}
