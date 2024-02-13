@extends('app.base')

@section('title', 'Tabla formación')

@section('content')
<main id="main" class="main">

<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Denominacion</th>
            <th>Siglas</th>
            <th>Modulos</th>
            <th>Grupos</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formaciones as $formacion)
        <tr>
            <td>{{$formacion->id}}</td>
            <td>{{$formacion->denominacion}}</td>
            <td>{{$formacion->siglas}}</td>
            <td>{{$formacion->modulos}}</td>
            <td>{{$formacion->grupos}}</td>
            <td>
                <a class="btn btn-dark" href="{{ url('formacion/' . $formacion->id . '/edit') }}"><i class="ri-edit-2-fill"></i></a>
                <a data-url="{{ url('formacion/' . $formacion->id) }}" class="btn btn-danger hrefDelete" href=""><i class="trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>

@endsection