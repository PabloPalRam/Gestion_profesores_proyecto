@extends('app.base')

@section('title', 'Tabla profesores')

@section('content')
<main id="main" class="main">
<a class="btn-info btn" href="{{ url('profesor/create') }}">Añadir profesor</a>
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
            <td>
                <a class="btn btn-dark" href="{{ url('profesor/' . $profesor->id . '/edit') }}"><i class="ri-edit-2-fill"></i></a>
                <a data-url="{{ url('profesor/' . $profesor->id) }}" class="btn btn-danger hrefDelete" href=""><i class="trash"></i></a>
            </td>
        </tr>
@endforeach
</tbody>
</table>
</main>

@endsection