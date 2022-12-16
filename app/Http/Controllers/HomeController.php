<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Idioma;
use App\Models\Asisten;
use App\Models\Profesion;
use App\Models\Seminario;
use App\Models\Participante;
use Illuminate\Http\Request;
use App\Models\ParticipanteLocal;
use Illuminate\Support\Facades\DB;
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

        $seminario=Seminario::where('id_institucion',Auth::user()->id)->get();
       /*  $seminarios=DB::table('seminarios')
                      ->select('seminarios.titulo','seminarios.descripcion','participantes.nombre','')
                      ->join('asistens','asistens.seminario_id','=','seminarios.id')
                      ->join('participantes','participantes.id','=','asistens.invitado_id')
                      ->where('seminarios.id_institucion',Auth::user()->id)->get(); */

        $invitados=Participante::where('institucion_id',Auth::user()->id)->get();
        $participantes=ParticipanteLocal::where('institucion_id',Auth::user()->id)->get();
        $idioma=Idioma::all();

      return view('Institucion.seminarios.index',compact('idioma','invitados','participantes','seminario'));
    }

    // GUARDANDO DATOS DEL SEMINARIO
    public function storeSeminario(Request  $request){

        // dd($request->input("id_institucion"));
        $seminario= new Seminario;
        $seminario->id_institucion= $request->id_institucion;
        $seminario->id_idioma= $request->id_idioma;
        $seminario->titulo= $request->titulo;
        $seminario->descripcion= $request->descripcion;
        $seminario->duracion= $request->duracion;
        $seminario->fecha= $request->fecha;

        $seminario->link= $request->link;

        $seminario->lugar= $request->lugar;
        $seminario->save();

        $seminario->Invitados()->attach($request->participante_id);
        $seminario->participantes()->attach($request->participanteLocal_id);




      return redirect()->back();
    }


    // EDITAR UN SEMINARIO
    public function editSeminario($id){
    $seminario=Seminario::find($id);
        return view('Institucion.seminarios.edit',compact('seminario'));
    }
}
