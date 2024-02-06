<?php

namespace App\Http\Controllers;

use App\Models\modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modulos = Modulo::all();
        return view('modulo.index',['modulos'=> $modulos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formaciones = Formaciones::pluk('id','siglas');
        return view('modulo.create',['formaciones'=> $formaciones]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modulo = new Modulo($request->all());
        try {
            $grupo->save();
             return redirect('modulo')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function show(modulo $modulo)
    {
        return view('modulo.show',['modulo'=> $modulo]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function edit(modulo $modulo)
    {
        $formaciones = Formaciones::pluk('id','siglas');
        return view('modulo.edit',['formaciones'=> $formaciones]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modulo $modulo)
    {
        try {
            $modulo->update($request->all());
            return redirect('modulo')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modulo  $modulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(modulo $modulo)
    {
        try {
            $modulo->delete();
            return redirect('modulo')->with(['result' => 1]);
        } catch(\Exception $e) {
             return back()->withErrors(['result' => -2]);
        }
    }
}
