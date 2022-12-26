<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserEstudianteController;


Auth::routes();
//USER ESTUDIANTE
Route::post('publico/login',[UserEstudianteController::class,'login'])->name('loginPublico');
Route::get('publico/login',[UserEstudianteController::class,'showLoginForm'])->name('loginP');
Route::get("publico/area", [UserEstudianteController::class, 'secret'])->name('area');
//REGISTRAR PUBLICO
Route::get('publico/register',[UserEstudianteController::class,'ShowRegisterForm'])->name('registerP');

Route::post('publico/register',[UserEstudianteController::class,'store'])->name('registerPublico');


// MOSTRAR PERFIL DEL ESTUDIANTE
Route::get('publico/{id}',[UserEstudianteController::class,'mostrarPerfil'])->name('mostrarPerfil');
Route::get('publico/edit/{id}',[UserEstudianteController::class,'editarPerfil'])->name('editarPerfil');
Route::put('publico/update/{perfil}',[UserEstudianteController::class,'updatePerfil'])->name('updatePerfil');


// VISTA DE SEMINARIOS
Route::get('publico/seminario/{id}',[UserEstudianteController::class,'detalleSeminario'])->name('detalleSeminario');

//SOLICITUDES DE INSCRIPCIONES
Route::post('publico/incripcion/{id}',[UserEstudianteController::class,'solicitarInscripcion'])->name('inscripcion');

// ELIMINAR INSCRIPCION
Route::post('publico/incripcionDelete/{id}',[UserEstudianteController::class,'eliminarInscripcion'])->name('inscripcionEliminar');
