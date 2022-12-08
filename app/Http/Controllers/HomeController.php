<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use App\Models\Pais;
use App\Models\Participante;
use App\Models\ParticipanteLocal;
use App\Models\Profesion;
use App\Models\Seminario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $profesion = Profesion::all();

        return view('Institucion.participanteLocal.edit', compact('participante', 'profesion'));
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
    public function deleteParticipanteLocal($id)
    {

        $elim = ParticipanteLocal::find($id);
        $elim->delete();
        return redirect()->back();
    }

    //TODO: FUNCIONES PARA LOS INVITADOS

    //VIsta pricipal de participantes invitados
    public function indexInvitado()
    {
        $profesion = Profesion::all();
        $invitado = Participante::where('institucion_id', Auth::user()->id)->get();
        return view('Institucion.Invitados.index', compact('profesion', 'invitado'));
    }

    // Guardando datos de participantes invitados
    public function storeInvitado(Request $request)
    {


        $invitado = new Participante;
        $invitado->profesion_id = $request->profesion_id;
        $invitado->institucion_id = $request->institucion_id;
        $invitado->nombre = $request->nombre;
        $invitado->correo = $request->correo;
        $invitado->telefono = $request->telefono;

        if ($request->hasFile('foto')) {

            $imagen = time() . '.' . $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('image/participantes/invitados', $imagen);
            $destino = public_path('image/participantes/invitados');
            $request->foto->move($destino, $imagen);

            $invitado->update(['foto' => $imagen]);
        } else {
            $imagen = 'rpredeterminada.jpg';
        }
        $invitado->foto = $imagen;

        $invitado->biografia = $request->biografia;

        $invitado->save();

        return redirect()->back();
    }

    // visto de edit datos del invitado
    public function editInvitado(Participante $invitado)
    {
        $profesion = Profesion::all();
        return view('Institucion.Invitados.edit', compact('invitado', 'profesion'));
    }


    //actualizando datos del invitado
    public function updateInvitado(Request $request, $id)
    {
        $invitado = Participante::find($id);
        $invitado->profesion_id = $request->profesion_id;
        // $invitado->institucion_id = Auth::user()->id;
        $invitado->nombre = $request->nombre;
        $invitado->correo = $request->correo;
        $invitado->telefono = $request->telefono;

        if ($request->hasFile('foto')) {

            $imagen = time() . '.' . $request->file('foto')->getClientOriginalExtension();
            // $request->file('foto')->storeAs('image/participantes/invitados', $imagen);
            $destino = public_path('image/participantes/invitados');
            if ($invitado->foto != '') {

                unlink(public_path('image/participantes/invitados/' . $invitado->foto));
            }
            $request->foto->move($destino, $imagen);

            $invitado->update(['foto' => $imagen]);
        } else {
            $imagen =$invitado->foto;
        }
        $invitado->foto = $imagen;

        $invitado->biografia = $request->biografia;

        $invitado->update();

        return redirect()->route('indexInvitado');
    }

    //ELIMINANDO UN INVITADO
    public function deleteInvitado($id)
    {
        $invitado = Participante::find($id);
        if ($invitado->foto != '') {

            unlink(public_path('image/participantes/invitados/' . $invitado->foto));
        }
        $invitado->delete();
        return redirect()->route('indexInvitado');
    }




    //TODO: FUNCIONES PARA EL SEMINIARIO
    public function indexSeminario(){
        $idioma=Idioma::all();
      return view('Institucion.seminarios.index',compact('idioma'));
    }

    // GUARDANDO DATOS DEL SEMINARIO
    public function storeSeminario(Request  $request){
        $seminario= new Seminario($request->input());
        $seminario->save();
      return redirect()->back();
    }
}
