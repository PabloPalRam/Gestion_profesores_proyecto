<?php

use Illuminate\Support\Facades\Route;
use App\Models\Leccion;
use App\Models\Formacion;
use App\Models\Grupo;
use App\Models\Modulo;
use App\Models\Profesor;

use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuloController;

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




Route::get('/',[HomeController::Class,'index']);
Route::resource('profesor',ProfesoresController::Class);
Route::resource('modulo',ModuloController::Class);
Route::resource('grupo',GrupoController::Class);
Route::resource('formacion',FormacionController::Class);
Route::resource('leccion',LeccionController::Class);
