@extends('app.base')

@section('content')
    <main id="main" class="main">
<nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/profesor')}}">Profesores</a></li>
                  <li class="breadcrumb-item active">Añadir profesor</li>
                </ol>
              </nav>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Añadir profesor</h5>
                <form class="row g-3" action="{{ url('profesor') }}" method="post">
                    @csrf
                    <div class="col-12">
                        <label for="userseneca" class="form-label">Usuario Seneca</label>
                        <input type="text" class="form-control" id="userseneca" name="userseneca" minlength="3"
                            maxlength="30" required>
                    </div>
                    <div class="col-12">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" minlength="3"
                            maxlength="30" required>
                    </div>
                    <div class="col-12">
                        <label for="apellido1" class="form-label">Primer apellido</label>
                        <input type="text" class="form-control" id="apellido1" name="apellido1" minlength="3"
                            maxlength="30" required>
                    </div>
                    <div class="col-12">
                        <label for="apellido2" class="form-label">Segundo apellido</label>
                        <input type="text" class="form-control" id="apellido2" name="apellido2" minlength="3"
                            maxlength="30">
                    </div>
                    <div class="col-12">
                        <label for="especialidad" class="form-label">Especialidad</label>
                        <select class="form-select" aria-label="Default select example" required name="especialidad">
                            <option selected disabled hidden>Selecciona tu especialidad</option>
                            <option value="informatico">Informatico</option>
                            <option value="sistemas">Sistemas</option>
                        </select>
                    </div>
                    <div class="col-4">

                        <a href="{{ url('profesor') }}" class="btn btn-primary"><i class="bi bi-arrow-return-left"></i></a>
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
