<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <form action="{{url('profesor')}}" method="post">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido1">Aapellido1</label>
        <input type="text" name="apellido1" id="apellido1">
        <label for="apellido2">Apellido2</label>
        <input type="text" name="apellido2" id="apellido2">
        <label for="especialidad">especialidad</label>
        <input type="text" name="especialidad" id="especialidad">
        <label for="userseneca">Userseneca</label>
        <input type="text" name="userseneca" id="userseneca">
        <button type="submit"></button>
</form>
</body>
</html>