@extends('app.base')

@section('title', 'Tabla formación')

@section('content')
<main id="main" class="main">
     
    <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item active"><a href="{{url('modulos')}}">Modulos</a></li>
                </ol>
    </nav>
<table class="table datatable">
    <thead>
        <tr>
            
            <th>Denominacion</th>
            <th>Siglas</th>
            <th>Formacion</th>
            <th>Curso</th>
            <th>Horas</th>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($modulos as $modulo)
        <tr>
            <td>{{$modulo->denominacion}}</td>
            <td>{{$modulo->siglas}}</td>
            <td>{{$modulo->formacion->denominacion}}</td>
            <td>{{$modulo->curso}}</td>
            <td>{{$modulo->horas}}</td>
            <td>
                            <a href="{{ url('modulo/' . $modulo->id) }}"
                              class="btn"
                              ><i class="bi bi-eye-fill"></i></a>
                            <a class="btn"
                              href="{{ url('modulo/' . $modulo->id . '/edit') }}"><i
                                class="bi bi-pencil-fill"></i></a>
                            <button type="button" class="btn" data-toggle="modal" data-target="#eliminarProfesor">
                                 <i class="bi bi-trash-fill"></i>
                            </button>
                             
                          </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>

@endsection