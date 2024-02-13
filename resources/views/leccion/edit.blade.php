@extends('app.base')

@section('content')
  <main id="main" class="main">
    <form action="{{ url('leccion/' . $leccion->id) }}" method="post">

    @method('put')
    @csrf
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Editar leccion</h5>
        <form class="row g-3" action="{{ url('leccion') }}" method="post">
          <div class="col-12">
            <label for="grupo" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo" minlength="3" maxlength="30" required value="{{ old('grupo', $leccion->grupo) }}">
          </div>
          <div class="col-12">
            <label for="modulo" class="form-label">Modulo</label>
            <input type="text" class="form-control" id="modulo" name="modulo" minlength="3" maxlength="30" required value="{{ old('modulo', $leccion->modulo) }}">
          </div>
          <div class="col-12">
            <label for="profesor" class="form-label">Profesor</label>
            <input type="text" class="form-control" id="profesor" name="profesor" minlength="3" maxlength="30" required value="{{ old('profesor', $leccion->profesor) }}">
          </div>
          <div class="col-12">
            <label for="horas" class="form-label">Horas</label>
            <input type="text" class="form-control" id="horas" name="horas" minlength="3" maxlength="30" value="{{ old('horas', $leccion->horas) }}">
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