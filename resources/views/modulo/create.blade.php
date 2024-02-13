@extends('app.base')

@section('content')
  <main id="main" class="main">
    <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Modulos</a></li>
                  <li class="breadcrumb-item active"><a href="{{url('')}}">Añadir modulos</a></li>
                </ol>
    </nav>
    <form action="{{ url('modulo') }}" method="post">

    @csrf
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Añadir modulo</h5>
        <form class="row g-3" action="{{ url('modulo') }}" method="post">
          <div class="col-12">
            <label for="denominacion" class="form-label">Denominacion</label>
            <input type="text" class="form-control" id="denominacion" name="denominacion" minlength="3" maxlength="30" required>
          </div>
          <div class="col-12">
            <label for="siglas" class="form-label">Siglas</label>
            <input type="text" class="form-control" id="siglas" name="siglas" minlength="3" maxlength="30" required>
          </div>
          <div class="col-12">
           <div class="col-12">
                        <label for="especialidad" class="form-label">Formacion</label>
                        <select class="form-select" aria-label="Default select example" required name="idformacion">
                            <option selected disabled hidden>Selecciona la formacion</option>
                            @foreach($formaciones as $formacion)
                              <option value="{{$formacion->id}}">{{$formacion->denominacion}}</option>
                            @endforeach
                        </select>
                    </div>
          </div>
          <div class="col-12">
            <label for="curso" class="form-label">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" minlength="3" maxlength="30">
          </div>
          <div class="col-12">
            <label for="horas" class="form-label">Horas</label>
            <input type="number" class="form-control" id="horas" name="horas" step="0.1">
          </div>
          <div class="col-12">
                        <label for="especialidad" class="form-label">Especialidad</label>
                        <select class="form-select" aria-label="Default select example" required name="especialidad">
                            <option selected disabled hidden>Selecciona tu especialidad</option>
                            <option value="informatico">Informatico</option>
                            <option value="sistemas">Sistemas</option>
                        </select>
                    </div>
          <div class="text-right"> 
            <a href="{{ url('modulo') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
            <button type="submit" class="btn btn-primary">Añadir</button>
           
          </div>
        </form>
      </div>
    </div>
    </form>
  </main>

@endsection