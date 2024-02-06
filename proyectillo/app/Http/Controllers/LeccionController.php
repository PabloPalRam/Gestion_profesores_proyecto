<?php

namespace App\Http\Controllers;

use App\Models\Leccion;
use Illuminate\Http\Request;

class LeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecciones = Leccion::all();
        return view('leccion.index',['lecciones'=> $lecciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo::pluk('id','denominacion');
        $modulos = Modulo::pluk('id','siglas');
        //$profesores = Profesor::pluk('id','siglas');
        return view('leccion.create',[
            'grupos'=> $grupos,
            'modulos'=> $modulos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leccion = new Leccion($request->all());
        try {
            $leccion->idprofesor= null;
            $leccion->save();
             return redirect('leccion')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function show(Leccion $leccion)
    {
        return view('leccion.show',['leccion'=> $leccion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Leccion $leccion)
    {
        $grupos = Grupo::pluk('id','denominacion');
        $modulos = Modulo::pluk('id','siglas');
        $profesores = Profesor::where('especialidad', '=', $leccion->grupo->especialidad)
        ->pluk('id','nombre','apellidos')
        ->get();;
       
        
        return view('leccion.create',[
            'grupos'=> $grupos,
            'modulos'=> $modulos,
            'profesores'=> $profesores
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leccion $leccion)
    {
        try {
            $modulo->update($request->all());
            return redirect('leccion')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leccion  $leccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leccion $leccion)
    {
        try {
            $modulo->delete();
            return redirect('leccion')->with(['result' => 1]);
        } catch(\Exception $e) {
             return back()->withErrors(['result' => -2]);
        }
    }
}
