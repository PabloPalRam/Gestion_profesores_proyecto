@extends('app.base')

@section('title', 'Tabla modulos')

@section('content')
<main id="main" class="main">

<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>idformacion</th>
            <th>denominacion</th>
            <th>siglas</th>
            <th>curso</th>
            <th>horas</th>
            <th>especialidad</th>
            <th>lecciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($modulos as $modulo)
        <tr>
            <td>{{$modulo->id}}</td>
            <td>{{$modulo->id}} <br> {{$modulo->formacion}}</td>
            <td>{{$modulo->denominacion}}</td>
            <td>{{$modulo->siglas}}</td>
            <td>{{$modulo->curso}}</td>
            <td>{{$modulo->horas}}</td>
            <td>{{$modulo->especialidades}}</td>
            <td>{{$modulo->lecciones}}</td>
            <td>
                <a class="btn btn-dark" href="{{ url('modulo/' . $modulo->id . '/edit') }}"><i class="ri-edit-2-fill"></i></a>
                <a data-url="{{ url('modulo/' . $modulo->id) }}" class="btn btn-danger hrefDelete" href=""><i class="trash"></i></a>
            </td>
            
        @endforeach
    </tbody>
</table>
</main>

@endsection