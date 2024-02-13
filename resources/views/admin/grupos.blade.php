@extends('app.base')

@section('title', 'Tabla profesores')

@section('content')
<main id="main" class="main">
<table class="table datatable">
<thead>
        <tr>
            <th>ID</th>
            <th>cursoEscolar</th>
            <th>idformacion</th>
            <th>curso</th>
            <th>denominacion</th>
            <th>turno</th>
            <th>lecciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
            <td>{{$grupo->id}}</td>
            <td>{{$grupo->cursoescolar}}</td>
            <td>{{$grupo->id}} <br> {{$grupo->formacion}}</td>
            <td>{{$grupo->curso}}</td>
            <td>{{$grupo->denominacion}}</td>
        
            
            <td>{{$grupo->turno}}</td>
        
            <td>{{$modulo->lecciones}}</td>
            
        @endforeach
    </tbody>
</table>
</main>

@endsection