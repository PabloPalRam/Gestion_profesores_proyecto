@extends('app.base')

@section('title', 'Tabla Grupo')

@section('content')
<main id="main" class="main">
    <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Grupos</a></li>
                </ol>
    </nav>
<table class="table datatable">
        <thead>
        <tr>
            <th>Denominacion</th>
            <th>Curso Escolar</th>
            <th>Formacion</th>
            <th>Curso</th>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
           <td>{{$grupo->denominacion}}</td>
            <td>{{$grupo->cursoescolar}}</td>
            <td>{{$grupo->formacion->denominacion}}</td>
            <td>{{$grupo->curso}}</td>
            <td>
                            <a href="{{ url('grupo/' . $grupo->id) }}"
                              class="btn"
                              ><i class="bi bi-eye-fill"></i></a>
                            <a class="btn"
                              href="{{ url('grupo/' . $grupo->id . '/edit') }}"><i
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