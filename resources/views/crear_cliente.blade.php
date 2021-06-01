<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Crear clientes</title>
</head>
<body>
<h2 class="text-2xl">Crear cliente</h2>
<form action="{{url('/clientes')}}" method="post">
    {{csrf_field()}}
    <label for="dni">{{'Dni: '}}</label>
    <input type="text" name="dni" id="dni" value="" ><br>

    <label for="nombre">{{'Nombre: '}}</label>
    <input type="text" name="nombre" id="nombre" value=""><br>

    <label for="apellidos">{{'Apellidos: '}}</label>
    <input type="text" name="apellidos" id="apellidos" value=""><br>

    <label for="direccion">{{'Direccion: '}}</label>
    <input type="text" name="direccion" id="direccion" value=""><br>

    <label for="telefono">{{'Telefono: '}}</label>
    <input type="text" name="telefono" id="telefono" value=""><br>

    <input type="submit" value="Crear alumno">
</form>
</body>
</html>
