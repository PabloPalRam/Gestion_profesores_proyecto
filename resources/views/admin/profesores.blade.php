@extends('app.base')

@section('title', 'Tabla profesores')

@section('content')
<main id="main" class="main">
<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario seneca</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Especialidad</th>
            <th>Lecciones</th>
         </tr>
    </thead>
    <tbody>
@foreach($profesores as $profesor)
        <tr>
            <td>{{$profesor->id}}</td>
            <td>{{$profesor->userseneca}}</td>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->apellido1}}</td>
            <td>{{$profesor->apellido2}}</td>
            <td>{{$profesor->especialidad}}</td>
            <td>{{$profesor->lecciones}}</td>
        </tr>
@endforeach
</tbody>
</table>
</main>

@endsection