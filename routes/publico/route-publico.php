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
