<?php

namespace App\Http\Controllers;

use App\Http\Requests\GrupoCreateRequest;
use App\Http\Requests\GrupoUpdateRequest;
use App\Models\Grupo;
use Illuminate\Http\Request;    
use Illuminate\Support\Facades\DB;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('grupo.index',['grupos'=> $grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formaciones = DB::table('formacion')->select('id','denominacion')->get();
        return view('grupo.create',['formaciones'=> $formaciones]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new Grupo($request->all());
        try {
            $grupo->save();
             return redirect('grupo')->with(['result' => 1]);
        } catch(\Exception $e) {  
            dd($e);
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {

        return view('grupo.show',['grupo'=> $grupo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
         $formaciones = DB::table('formacion')->select('id','denominacion')->get();
        return view('grupo.edit',[
                'formaciones'=> $formaciones,
                'grupo'=> $grupo
                
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(GrupoUpdateRequest $request, Grupo $grupo)
    {
        try {
            $grupo->update($request->all());
            return redirect('grupo')->with(['result' => 1]);
        } catch(\Exception $e) {     
            return back()->withErrors(['result' => -2]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        try {
            $grupo->delete();
            return redirect('grupo')->with(['result' => 1]);
        } catch(\Exception $e) {
             return back()->withErrors(['result' => -2]);
        }
    }
}
