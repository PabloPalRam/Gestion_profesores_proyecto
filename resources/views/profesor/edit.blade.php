@extends('app.base')

@section('content')
  <main id="main" class="main">
<nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/profesor')}}">Profesores</a></li>
                  <li class="breadcrumb-item active">Editar profesor</li>
                </ol>
              </nav>
              
              
    
    
    <form action="{{ url('profesor/' . $profesor->id) }}" method="post">
    @method('put')
    @csrf
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Editar profesor</h5>
        <form class="row g-3" action="{{ url('profesor') }}" method="post">
          <div class="col-12">
            <label for="userseneca" class="form-label">Usuario Seneca</label>
            <input type="text" class="form-control" id="userseneca" name="userseneca" minlength="3" maxlength="30" required value="{{ old('userseneca', $profesor->userseneca) }}">
          </div>
          <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" minlength="3" maxlength="30" required value="{{ old('nombre', $profesor->nombre) }}">
          </div>
          <div class="col-12">
            <label for="apellido1" class="form-label">Apellido1</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" minlength="3" maxlength="30" required value="{{ old('apellido1', $profesor->apellido1) }}">
          </div>
          <div class="col-12">
            <label for="apellido2" class="form-label">Apellido2</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" minlength="3" maxlength="30" value="{{ old('apellido2', $profesor->apellido2) }}">
          </div>
          <div class="col-12">
            <label for="especialidad" class="form-label">Especialidad</label>
            <select class="form-select" aria-label="Default select example" required name="especialidad">
                      <option selected hidden>Selecciona tu especialidad</option>
                      <option value="informatico" {{$profesor->especialidad == 'informatico' ? 'checked':'' }} >Informatico</option>
                      <option value="sistemas" {{$profesor->especialidad == 'sistemas' ? 'checked':'' }} >Sistemas</option>
            </select>
          </div>
          <div class="text-right">
            <a href="{{ url('profesor') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
            <button type="submit" class="btn btn-primary">Editar</button>
            
          </div>
        </form>
      </div>
    </div>
    </form>
  </main>

@endsection