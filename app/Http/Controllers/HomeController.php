<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

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

    public function indexRegister(){
        $pais=Pais::all();

        return view('auth.register',compact('pais'));

    }

    //TODO: FUNCIONES PARA LA INSTITUCION

    //MOSTRAR VISTA PRINCIPAL AL LOGUEARSE
    public function Inicio(){
        return view('Institucion.inicio');
    }




}
