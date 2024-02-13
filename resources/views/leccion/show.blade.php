@extends('app.base')

@section('content')
<main id="main" class="main">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">leccion . {{ $leccion->nombre}}</h5>
        <ul class="list-group">
          <li class="list-group-item">ID: . {{$leccion->id}}</li>
          <li class="list-group-item">Grupo: . {{$leccion->grupo}}</li>
          <li class="list-group-item">Modulo: . {{$leccion->modulo}}</li>
          <li class="list-group-item">Profesor: . {{$leccion->profesor}}</li>
          <li class="list-group-item">Horas: . {{$leccion->horas}}</li>
          <li class="list-group-item">Horas: . {{$leccion->horas}}</li>
          <li class="list-group-item">Especialidades: . {{$leccion->especialidades}}</li>
          <li class="list-group-item">Lecciones: . {{$leccion->lecciones}}</li>
        </ul>
        <a class="btn btn-dark" href="{{ url('leccion/' . $leccion->id . '/edit') }}"><i class="ri-edit-2-fill"></i></a>
        <a data-url="{{ url('leccion/' . $leccion->id) }}" class="btn btn-danger hrefDelete" href="{{ url('leccion') }}"><i class="bi bi-trash"></i></a>
        <a href="{{ url('leccion') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
      </div>
    </div>
  </main>
@endsection
