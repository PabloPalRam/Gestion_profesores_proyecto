@extends('app.base')

@section('content')
  <main id="main" class="main">
     <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('modulo')}}">Modulos</a></li>
                  <li class="breadcrumb-item active"><a href="{{url('')}}">Editar modulos</a></li>
                </ol>
    </nav>
    <form action="{{ url('grupo/' . $grupo->id) }}" method="post">

    @method('put')
    @csrf
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Editar grupo</h5>
                <form class="row g-3" action="{{ url('grupo') }}" method="post">
          
          <div class="col-12">
            <label for="denominacion" class="form-label">Denominacion</label>
            <input type="text" class="form-control" id="denominacion" name="denominacion" maxlength="30" value="{{ old('denominacion', $grupo->denominacion) }}">
          </div>
          <div class="col-12">
            <label for="cursoescolar" class="form-label">Curso escolar</label>
            <input type="text" class="form-control" id="cursoescolar" name="cursoescolar" minlength="3" maxlength="30" required value="{{ old('cursoescolar', $grupo->cursoescolar) }}"> 
          </div>
          <div class="col-12">
           <div class="col-12">
                        <label for="especialidad" class="form-label">Formacion</label>
                        <select class="form-select" aria-label="Default select example" required name="formacion">
                            <option selected disabled hidden>Selecciona la formacion</option>
                            @foreach($formaciones as $formacion)
                              <option value="{{$formacion->id}}" {{$grupo->formacion->id == $formacion->id ? 'selected':''}} >{{$formacion->denominacion}}</option>
                            @endforeach
                        </select>
                    </div>
          </div>
          <div class="col-12">
            <label for="curso" class="form-label">Curso</label>
            <input type="text" class="form-control" id="curso" name="curso" minlength="3" maxlength="30" required value="{{ old('curso', $grupo->curso) }}">
          </div>
          
          <div class="col-12">
            <label for="turno" class="form-label">Turno</label>
            <select class="form-select" aria-label="Default select example" required>
                      <option selected disabled hidden>Selecciona el turno</option>
                      <option value="informatico" {{$grupo->turno == 'mañana' ? 'selected':''}}>Mañana</option>
                      <option value="sistema"{{$grupo->turno == 'tarde' ? 'selected':''}}>Tarde</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Editar</button>
            <a href="{{ url('grupo') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
          </div>
        </form>
      </div>
    </div>
    </form>
  </main>

@endsection