<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use App\Models\Seminario;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use App\Models\UserEstudiante;
use App\Models\PerfilEstudiante;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserEstudianteController extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = "publico.auth.login";

    protected function guard()
    {
        return Auth::guard('publico');
    }

    function __construct()
    {
        //Permite ingresar a las vistas autorizadas
        $this->middleware('auth:publico', ['only' => [
            'secret',
            'mostrarSeminarios',
            'mostrarPerfil',
            'editarPerfil',
            'updatePerfil',
            'detalleSeminario',
            'solicitarInscripcion',
            'verTodosSemInscritos',



        ]]);
    }

    public function showLoginForm()
    {
        return view('publico.auth.login');
    }

    public function authenticated()
    {
        return redirect('publico/area');
    }

    public function secret()
    {
        // return "olah" . auth("org")->user()->name . 'Mi numero es ' . auth("org")->user()->name;
        return View("publico.inicio");
    }

    //Metodos para el registro de PUBLICO

    public function ShowRegisterForm()
    {
        return view("publico.auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user_estudiantes,email',
        ]);

        $public = new UserEstudiante;
        $public->name = $request->name;
        $public->email = $request->email;
        $public->password = bcrypt($request->get('password'));
        $public->save();

        return redirect()->route('loginP');
    }

    //TODO: MOSTRANDO SEMINARIOS DISPONIBLES EN LAS VISTA DEL PUBLICO ESTUDIANTE
    public function mostrarSeminarios()
    {
        $seminario = Seminario::where("estado", 1)->get();

        return view("publico.inicio", compact("seminario"));
    }

    // PERFIL DE ESTUDIANTE
    public function mostrarPerfil($id)
    {
        $perfil = PerfilEstudiante::where("user_estudiante_id", $id)->first();
        return view("publico.perfil.index", compact("perfil", 'id'));
    }

    // Enviando datos a la vista edit
    public function editarPerfil($id)
    {
        $perfil = PerfilEstudiante::where("user_estudiante_id", $id)->first();
        return view("publico.perfil.edit", compact("perfil"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PerfilEstudiante  $perfil
     * @return \Illuminate\Http\Response
     */

    // Actualizar perfil estudiante
    public function updatePerfil(Request $request, PerfilEstudiante $perfil)
    {


        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'biografia' => 'required',
            'carrera' => 'required',



        ]);

        if ($request['image']) {

            $imagen = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('image/perfil/', $imagen);
            $destino = public_path('image/perfil/');
            $request->image->move($destino, $imagen);
            if ($perfil->foto != '') {
                unlink(public_path('image/perfil/' . $perfil->foto));
            }
            $perfil->update(['foto' => $imagen]);
        }

        // Asignar nombre y correo al usuario para actualizar
        auth()->user()->name = $data['name'];
        auth()->user()->email = $data['email'];
        auth()->user()->save();

        // Eliminando nombre y correo
        unset($data['name']);
        unset($data['email']);

        // guardando info y aignando biografias,habilidades,exprefiencia
        auth()->user()->perfil()->update(
            array_merge(
                $data,
                /* $array_imagen ?? [] */
            )
        );

        return redirect()->route('mostrarPerfil', Auth::user()->id);
    }



    // VER EL DETALLE DEL SEMINARIO
    public function detalleSeminario($id)
    {
        $seminario = Seminario::find($id);

        $fotos = Fotos::select('fotos')->where('id_seminario', $id)->first();

        $solicitud=Asistencia::where('seminario_id',$id)->where('estudiante_id',Auth::user()->id)->first();
        return view('publico.verSeminario', compact('seminario', 'fotos','solicitud'));
    }


    // SOLICITAR INSCRIPCION DE ESTUDIANTE
    public  function solicitarInscripcion(Request $request)
    {
       $id_seminario = $request->id_seminario;
       $id_estudiante=$request->id_estudiante;

       $asistencia= new Asistencia;
       $asistencia->estudiante_id = $id_estudiante;
       $asistencia->seminario_id=$id_seminario;
       $asistencia->save();

       return redirect()->back();
    }

    // ELIMINAR INSCRIPCION DE ESTUDIANTE

    public function eliminarInscripcion(Request $request){

        $eliminarAsistencia = Asistencia::find($request->id_asistencia);
        if($request->estado==1){
            $eliminarAsistencia->estado=0;
        }else{
            $eliminarAsistencia->estado=1;

        }

        $eliminarAsistencia->update();
        return redirect()->back();
    }


    // VER SEMINARIOS INSCRITOS => id = id del usuario
     public function verTodosSemInscritos(Request $request,$id){
        $simInscrito=DB::table('user_estudiantes')
                    ->select('seminarios.id','seminarios.titulo','seminarios.descripcion','seminarios.fecha','seminarios.duracion','seminarios.lugar','fotos.fotos')
                    ->join('asistencias','asistencias.estudiante_id','=','user_estudiantes.id')
                    ->join('seminarios','seminarios.id','=','asistencias.seminario_id')
                    ->join('fotos','fotos.id_seminario','=','seminarios.id')
                    ->where('asistencias.estado',0)
                    ->where('asistencias.estudiante_id',$id)
                    ->get();


        return view('publico.inscritos',compact('id','simInscrito'));

     }
}
