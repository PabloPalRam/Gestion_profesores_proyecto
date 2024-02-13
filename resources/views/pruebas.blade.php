
<h1>Pruebas de las relaciones de las tablas del proyecto</h1>

<h2>Tabla Profesor</h2>

<table border='1px'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario seneca</th>
            <th>nombre</th>
            <th>appellido1</th>
            <th>appellido2</th>
            <th>especialidad</th>
            <th>lecciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($profesores as $profesor)
        <tr>
            <td>{{$profesor->id}}</td>
            <td>{{$profesor->userseneca}}</td>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->apellido1}}</td>
            <td>{{$profesor->apellido2}}</td>
            <td>{{$profesor->especialidad}}</td>
            <td>{{$profesor->lecciones}}</td>
            
        @endforeach
    </tbody>
</table>

<h2>Tabla Formacion</h2>
<table border='1px'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Denominacion</th>
            <th>siglas</th>
            <th>modulos</th>
            <th>grupos</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formaciones as $formacion)
        <tr>
            <td>{{$formacion->id}}</td>
            <td>{{$formacion->denominacion}}</td>
            <td>{{$formacion->siglas}}</td>
            <td>{{$formacion->modulos}}</td>
            <td>{{$formacion->grupos}}</td>
          
            
        @endforeach
    </tbody>
</table>

<h2>Tabla Modulo</h2>
<table border='1px'>
    <thead>
        <tr>
            <th>ID</th>
            <th>idformacion</th>
            <th>denominacion</th>
            <th>siglas</th>
            <th>curso</th>
            <th>horas</th>
            <th>especialidad</th>
            <th>lecciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($modulos as $modulo)
        <tr>
            <td>{{$modulo->id}}</td>
            <td>{{$modulo->id}} <br> {{$modulo->formacion}}</td>
            <td>{{$modulo->denominacion}}</td>
            <td>{{$modulo->siglas}}</td>
            <td>{{$modulo->curso}}</td>
            <td>{{$modulo->horas}}</td>
            <td>{{$modulo->especialidades}}</td>
            <td>{{$modulo->lecciones}}</td>
            
        @endforeach
    </tbody>
</table >
<h2>Tabla Grupo</h2>
<table border='1px'>
   <thead>
        <tr>
            <th>ID</th>
            <th>cursoEscolar</th>
            <th>idformacion</th>
            <th>curso</th>
            <th>denominacion</th>
            <th>turno</th>
            <th>lecciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($grupos as $grupo)
        <tr>
            <td>{{$grupo->id}}</td>
            <td>{{$grupo->cursoescolar}}</td>
            <td>{{$grupo->id}} <br> {{$grupo->formacion}}</td>
            <td>{{$grupo->curso}}</td>
            <td>{{$grupo->denominacion}}</td>
        
            
            <td>{{$grupo->turno}}</td>
        
            <td>{{$modulo->lecciones}}</td>
            
        @endforeach
    </tbody>
</table>
<h2>Tabla Leccion</h2>
<table border='1px'>
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

