<?php

namespace App\Models;
use Laravel\Cashier\Billable;
use App\Models\PerfilEstudiante;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserEstudiante extends Authenticatable
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

       // Evento que se ejecuta cuando un usuario(fotografo) es creado
       protected static function boot(){
        parent::boot();
        // Asignar perfil una vez se haya creado un usuario nuevo
        static::created(function($user){
            $user->perfil()->create();
        });
     }

         // relacion de uno a uno con Perfil
    public function perfil()
    {
        return $this->hasOne(PerfilEstudiante::class);
    }
}
