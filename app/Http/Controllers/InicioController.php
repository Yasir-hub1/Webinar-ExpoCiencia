<?php

namespace App\Http\Controllers;

use App\Models\Seminario;
use App\Models\UserEstudiante;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //TODO: MOSTRAR INFORMACION EN LA VISTA PRINCIPAL DEL SOFTWARE

    public function paginaPrincipal(){
        $seminarios=Seminario::all();
        $estudiantes=UserEstudiante::count();
        $semCompletos=Seminario::all()->where('videoGrabado','!=',null)->count();
        $totalSemi=Seminario::all()->count();
    return view('welcome',compact('seminarios','estudiantes','semCompletos','totalSemi'));
    }
}
