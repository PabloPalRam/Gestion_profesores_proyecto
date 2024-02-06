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

Route::get('/', function () {
    $lecciones = Leccion::all();
    $profesores = Profesor::all();
    $formaciones = Formacion::all();
    $modulos = Modulo::all();
    $grupos = Grupo::all();
    
    
    return view('pruebas',
                ['profesores'=>$profesores,
                'lecciones'=>$lecciones,
                'formaciones'=>$formaciones,
                'modulos'=>$modulos,
                'grupos'=>$grupos,
                
                
                
                ]);
    
    
});



Route::resource('profesor',ProfesoresController::Class);
