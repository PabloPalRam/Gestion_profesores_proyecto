<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <form action="{{url('formacion')}}" method="post">
        @csrf

        <label for="denominacion">denominacion</label>
        <input type="text" name="denominacion" id="denominacion">
        <label for="siglas">siglas</label>
        <input type="text" name="siglas" id="siglas">
        
        <button type="submit"></button>
</form>
</body>
</html>