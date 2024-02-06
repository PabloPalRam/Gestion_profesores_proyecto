<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <form action="{{url('profesor/'.$profesor->id)}}" method="post">
         @method('PUT') 
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{old('nombre',$profesor->nombre)}}">
        <label for="apellido1">Aapellido1</label>
        <input type="text" name="apellido1" id="apellido1" value="{{old('apellido1',$profesor->apellido1)}}" >
        <label for="apellido2">Apellido2</label>
        <input type="text" name="apellido2" id="apellido2" value="{{old('apellido2',$profesor->apellido2)}}">
        <label for="especialidad">especialidad</label>
        <input type="text" name="especialidad" id="especialidad" value="{{old('especialidad',$profesor->especialidad)}}">
        <label for="userseneca">Userseneca</label>
        <input type="text" name="userseneca" id="userseneca" value="{{old('userseneca',$profesor->userseneca)}}">
        <button type="submit"></button>
</form>
</body>
</html>