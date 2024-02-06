<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
   <table border='1px'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario seneca</th>
            <th>nombre</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($profesores as $profesor)
        <tr>
            <td>{{$profesor->id}}</td>
            <td>{{$profesor->userseneca}}</td>
            <td>{{$profesor->nombre}}</td>
            <td><a href="{{url('profesor/'.$profesor->id)}}">Ver</a></td>
            
        @endforeach
    </tbody>
</table>
   
</body>
</html>