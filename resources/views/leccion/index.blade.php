@extends('app.base')

@section('title', 'Tabla formación')

@section('content')
<main id="main" class="main">
<a class="btn-info btn" href="{{ url('leccion/create') }}">Añadir formación</a>
<table class="table datatable">
    <thead>
        <tr>
            <th>ID</th>
            <th>idgrupo</th>
            <th>idmodulo</th>
            <th>idprofesor</th>
            <th>horas</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lecciones as $leccion)
        <tr>
            <td>{{$leccion->id}}</td>
             <td>{{$leccion->idgrupo}} <br> {{$leccion->grupo}}</td>
              <td>{{$leccion->idmodulo}} <br> {{$leccion->modulo}}</td>
               <td>{{$leccion->idprofesor}} <br> {{$leccion->profesor}}</td>
            <td>{{$leccion->horas}}</td>
           <td>
                <a class="btn btn-dark" href="{{ url('leccion/' . $leccion->id . '/edit') }}"><i class="ri-edit-2-fill"></i></a>
                <a data-url="{{ url('leccion/' . $leccion->id) }}" class="btn btn-danger hrefDelete" href=""><i class="trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</main>

@endsection