<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Empleado</h1>
    
        <form action="{{ route('empleado.update', $empleado->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nombre:</label>
            <input type="text" name="Nombre" value="{{ old('Nombre', $empleado->Nombre) }}">
             
            <label>Apellido:</label>
            <input type="text" name="Apellido" value="{{ old('Apellido', $empleado->Apellido) }}">

            <label>Correo:</label>
            <input type="email" name="Correo" value="{{ old('Correo', $empleado->Correo) }}">

            <button type="submit">Actualizar</button>
        </form>
</body>
</html>