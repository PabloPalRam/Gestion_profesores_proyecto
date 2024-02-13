@extends('app.base')

@section('content')
  <main id="main" class="main">
     <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Grupos</a></li>
                  <li class="breadcrumb-item active"><a href="{{url('')}}">Añadir grupo</a></li>
                </ol>
    </nav>
    <form action="{{ url('grupo/') }}" method="post">

    @csrf
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Añadir grupo</h5>
        <form class="row g-3" action="{{ url('grupo') }}" method="post">
          <div class="col-12">
            <label for="cursoescolar" class="form-label">Curso escolar</label>
            <input type="text" class="form-control" id="cursoescolar" name="cursoescolar" minlength="3" maxlength="30" required> 
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
            <input type="text" class="form-control" id="curso" name="curso" minlength="3" maxlength="30" required>
          </div>
          <div class="col-12">
            <label for="denominacion" class="form-label">Denominacion</label>
            <input type="text" class="form-control" id="denominacion" name="denominacion" maxlength="30">
          </div>
          <div class="col-12">
            <label for="turno" class="form-label">Turno</label>
            <select class="form-select" aria-label="Default select example" required name="turno">
                      <option selected disabled hidden>Selecciona el turno</option>
                      <option value="mañana">Mañana</option>
                      <option value="tarde">Tarde</option>
            </select>
          </div>
          <div class="text-right">
            <a href="{{ url('grupo') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
            <button type="submit" class="btn btn-primary">Añadir</button>
            
          </div>
        </form>
      </div>
    </div>
    </form>
  </main>

@endsection