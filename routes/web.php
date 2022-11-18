<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserEstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//TODO:INSTITUCION
//mandando paises a esta vista
Route::get('register',[RegisterController::class,'indexRegister'])->name('register');

//RUTA PARA MOSTRAR EL INICIO DESPUES DEL LOGUEO
Route::get('/Institucion/Inicio',[HomeController::class,'Inicio'])->name('inicio');


//TODO:PARTICIPANTES LOCALES
Route::get('/Institucion/participantes',[HomeController::class,'indexParticipanteLocal'])->name('indexParticipanteLocal');
Route::post('/Institucion/store',[HomeController::class,'storeParticipanteLocal'])->name('store.Participante.Local');
Route::get('/Institucion/edit/{participante}',[HomeController::class,'editParticipanteLocal'])->name('edit.Participante.Local');
Route::put('/Institucion/update/{id}',[HomeController::class,'updateParticipanteLocal'])->name('update.Participante.Local');
Route::delete('/Institucion/delete/{id}',[HomeController::class,'deleteParticipanteLocal'])->name('delete.Participante.Local');
