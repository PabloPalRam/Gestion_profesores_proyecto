@extends('app.base')

@section('content')
<main id="main" class="main">
  <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Grupos</a></li>
                  <li class="breadcrumb-item active"><a href="{{url('')}}">{{$grupo->denominacion}}</a></li>
                </ol>
    </nav>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos del curso {{ $grupo->denominacion}}</h5>
        <ul class="list-group">
          <li class="list-group-item">Denominacion: {{$grupo->denominacion}}</li>
          <li class="list-group-item">Curso escolar: {{$grupo->cursoescolar}}</li>
          <li class="list-group-item">Formacion: {{$grupo->formacion->denominacion}}</li>
          <li class="list-group-item">Curso: {{$grupo->curso}}</li>
          <li class="list-group-item">Turno: {{$grupo->turno}}</li>
          <li class="list-group-item">Lecciones: <br>
            @foreach ($grupo->lecciones as $leccion)
            {{$leccion->grupo->denominacion}} {{$leccion->modulo->denominacion}} {{$leccion->horas}}h <br>
            @endforeach
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection