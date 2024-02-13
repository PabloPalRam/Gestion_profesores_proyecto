 @extends('app.base')

@section('content')
<main id="main" class="main">
   <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Modulos</a></li>
                  <li class="breadcrumb-item active"><a href="{{url('')}}">{{$modulo->denominacion}}</a></li>
                </ol>
    </nav>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos del modulo {{ $modulo->denominacion}}</h5>
        <ul class="list-group">
          
          <li class="list-group-item">Denominacion:  {{$modulo->denominacion}}</li>
          <li class="list-group-item">Siglas:  {{$modulo->siglas}}</li>
          <li class="list-group-item">Formación:  {{$modulo->formacion->denominacion}}</li>
          <li class="list-group-item">Curso:  {{$modulo->curso}}</li>
          <li class="list-group-item">Horas:  {{$modulo->horas}}</li>
          <li class="list-group-item">Especialidad:  {{$modulo->especialidad}}</li>
          <li class="list-group-item">Lecciones: <br>
            @foreach ($modulo->lecciones as $leccion)
            {{$leccion->grupo->denominacion}} {{$leccion->modulo->denominacion}} {{$leccion->horas}}h <br>
            @endforeach
          </li>
        </ul>
      </div>
    </div>
  </main>
@endsection
