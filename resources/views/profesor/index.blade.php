@extends('app.base')

@section('title', 'Tabla formación')

@section('content')
    <main id="main" class="main">
        <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bi bi-house-door"></i></a></li>
                  <li class="breadcrumb-item active">Profesores</li>
                </ol>
              </nav>
        <div class="modal" tabindex="-1" role="dialog" id="eliminarProfesor">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Eliminar Profesor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Seguro que quieres eliminar a profesor</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
        <table class="table datatable">
            <thead>
                <tr>
                    <th>Usuario seneca</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Lecciones</th>
                    <td><strong>Acciones</strong></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->userseneca }}</td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->especialidad }}</td>
                        <td style="cursor:pointer">
                            <div class="nav-link collapsed" data-bs-target="#{{$profesor->userseneca}}" data-bs-toggle="collapse">
                                <i class="bi bi-journal-text"></i><span>Ver lecciones</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </div>
                            <div>
                                <ul id="{{$profesor->userseneca}}" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    @foreach ($profesor->lecciones as $leccion)
                                        <li><i class="bi bi-circle"></i><span>{{$leccion->grupo->denominacion}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                        <td>
                            <a href="{{ url('profesor/' . $profesor->id) }}"
                              class="btn"
                              ><i class="bi bi-eye-fill"></i></a>
                            <a class="btn"
                              href="{{ url('profesor/' . $profesor->id . '/edit') }}"><i
                                class="bi bi-pencil-fill"></i></a>
                            <button type="button" class="btn" data-toggle="modal" data-target="#eliminarProfesor">
                                 <i class="bi bi-trash-fill"></i>
                            </button>
                             
                          </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection
