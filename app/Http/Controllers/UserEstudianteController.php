<?php

namespace App\Http\Controllers;

use App\Models\UserEstudiante;
use Illuminate\Http\Request;
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
}
