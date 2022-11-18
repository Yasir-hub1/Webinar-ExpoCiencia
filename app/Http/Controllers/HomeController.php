<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\ParticipanteLocal;
use App\Models\Profesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function indexRegister()
    {
        $pais = Pais::all();

        return view('auth.register', compact('pais'));
    }

    //TODO: FUNCIONES PARA LA INSTITUCION

    //MOSTRAR VISTA PRINCIPAL AL LOGUEARSE
    public function Inicio()
    {
        return view('Institucion.inicio');
    }




    //TODO: FUNCIONES PARA LOS PARTICIPANTES LOCALES
    //MOSTRANDO DATOS EN LA VISTA PRICIPAL DE PARTICIPANTES
    public function indexParticipanteLocal()
    {
        $profesion = Profesion::all();
        $partLocales = ParticipanteLocal::where('institucion_id', Auth::user()->id)->get();
        return view(
            'Institucion.participanteLocal.miParticipanteLocal',
            compact(
                'profesion',
                'partLocales'
            )
        );
    }

    //GUARDANDO PARTICIPANTES A LA BD
    public function storeParticipanteLocal(Request $request)
    {

        $prtLocal = new ParticipanteLocal();
        $prtLocal->nombre = $request->nombre;
        $prtLocal->institucion_id = $request->institucion_id;
        $prtLocal->carrera = $request->carrera;
        $prtLocal->biografia = $request->biografia;
        $prtLocal->facultad = $request->facultad;
        $prtLocal->profesions_id = $request->profesions_id;
        $prtLocal->save();

        return redirect()->back();
    }

    // VISTA DE EDICION DE DATOS DEL PARTICIPANTE
    public function editParticipanteLocal(ParticipanteLocal $participante)
    {
        $profesion=Profesion::all();

        return view('Institucion.participanteLocal.edit', compact('participante','profesion'));
    }

    // ACTUALIZANDO DATOS DE LA BD DEL PARTICIPANTE
    public function updateParticipanteLocal(Request $request, $id)
    {

        $updatePrtLocal = ParticipanteLocal::find($id);
        $updatePrtLocal->nombre = $request->nombre;
        $updatePrtLocal->carrera = $request->carrera;
        $updatePrtLocal->biografia = $request->biografia;
        $updatePrtLocal->facultad =  $request->facultad;
        $updatePrtLocal->profesions_id =  $request->profesions_id;
        $updatePrtLocal->update();
        return redirect()->route('indexParticipanteLocal');
    }

    // ELIMINA UN PARTICIPANTE DE LA LISTA
    public function deleteParticipanteLocal($id){

        $elim=ParticipanteLocal::find($id);
        $elim->delete();
        return redirect()->back();
    }
}
