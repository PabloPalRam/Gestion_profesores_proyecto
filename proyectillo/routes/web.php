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





Route::resource('profesor',ProfesoresController::Class);
Route::resource('modulo',ProfesoresController::Class);
Route::resource('grupo',ProfesoresController::Class);
Route::resource('formacion',ProfesoresController::Class);
Route::resource('leccion',ProfesoresController::Class);
