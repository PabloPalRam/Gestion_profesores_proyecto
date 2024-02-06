<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::all();
         return view('profesor.index',['profesores'=>  $profesores]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $profesores = new Profesor($request->all());
            $profesores->save();
            return redirect('profesor')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
               
    }
            
            
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
         return view('profesor.show',['profesor'=>  $profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        return view('profesor.edit',['profesor'=>  $profesor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
         try {
            $profesor->update($request->all());
            return redirect('profesor')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesores  $profesores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesores $profesores)
    {
         try {
                    $profesores->delete();
                    return redirect('profesor')->with(['result' => 1]);
                } catch(\Exception $e) {
                     return back()->withErrors(['result' => -2]);
                }
                
            
    }
}
