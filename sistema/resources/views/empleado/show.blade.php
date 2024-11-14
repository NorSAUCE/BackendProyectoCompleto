<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Detalles del Empleado</h1>

    <p><strong>Nombre:</strong> {{ $empleado->Nombre }}</p>
    <p><strong>Apellido:</strong> {{ $empleado->Apellido }}</p>
    <p><strong>Correo:</strong> {{ $empleado->Correo }}</p>

<!--Mostrar la imagen del empleado si existe-->
    @if($empleado->Foto)
        <p><strong>Foto:</strong></p>
        <img src="{{ asset('storage/'. $empleado->Foto)}}" alt="Foto de {{ $empleado->Nombre }}" width="150">
    @else
    <p>No se ha cargado la imagen</p>
        @endif


    <a href="{{ route('empleado.index') }}">Volver a la lista</a>
</body>
</html>