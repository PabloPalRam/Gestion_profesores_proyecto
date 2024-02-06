@extends('app.base')

@section('title', 'Tabla profesores')

@section('content')
<main id="main" class="main">
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
           
            
        @endforeach
    </tbody>
</table>
</main>

@endsection