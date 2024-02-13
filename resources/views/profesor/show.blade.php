@extends('app.base')

@section('content')
<main id="main" class="main">
    <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/profesor')}}">Profesores</a></li>
                  <li class="breadcrumb-item active">{{$profesor->userseneca}}</li>
                </ol>
              </nav>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos de {{ $profesor->nombre}}</h5>
        <ul class="list-group">
          <li class="list-group-item">ID: {{$profesor->id}}</li>
          <li class="list-group-item">Usuario Seneca: {{$profesor->userseneca}}</li>
          <li class="list-group-item">Nombre: {{$profesor->nombre}}</li>
          <li class="list-group-item">Apellido1:{{$profesor->apellido1}}</li>
          <li class="list-group-item">Apellido2:{{$profesor->apellido2}}</li>
          <li class="list-group-item">Especialidad: {{$profesor->especialidad}}</li>
          <li class="list-group-item">Lecciones: <br>
            @foreach ($profesor->lecciones as $leccion)
            {{$leccion->grupo->denominacion}} {{$leccion->modulo->denominacion}} {{$leccion->horas}}h <br>
            @endforeach
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection