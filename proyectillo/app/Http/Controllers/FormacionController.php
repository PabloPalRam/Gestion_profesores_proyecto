<?php

namespace App\Http\Controllers;

use App\Models\Formacion;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = Formacion::all();
        return view('formacion.index',['formaciones'=>$formaciones]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formacion = new Formacion($request->all());
        
        try {
            $formacion->save();
             return redirect('formacion')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function show(Formacion $formacion)
    {
          return view('formacion.show',['formacion'=>$formacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Formacion $formacion)
    {
        return view('formacion.edit',['formacion'=>$formacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formacion $formacion)
    {
         try {
            $formacion->update($request->all());
            return redirect('formacion')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formacion  $formacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formacion $formacion)
    {
        try {
                    $formacion->delete();
                    return redirect('formacion')->with(['result' => 1]);
                } catch(\Exception $e) {
                     return back()->withErrors(['result' => -2]);
                }
    }
}
