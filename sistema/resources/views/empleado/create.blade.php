<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1>Formulario de creacion de empleado</h1>
    <form action="{{route('empleado.store')}}" method="POST" enctype="multipart/form-data">
    @csrf    
    <label for="Nombre">Nombre: </label>
        <input type="text" name="Nombre" id="Nombre">
        <br>
        <label for="Apellido">Apellido: </label>
        <input type="text" name="Apellido" id="Apellido">
        <br>
        <label for="Correo">Correo: </label>
        <input type="email" name="Correo" id="Correo">
        <br>
        <label for="Foto">Foto</label>
        <input type="file" name="Foto" id="Foto" accept="image/*" required>

        <button type="submit" class="btn btn-outline-success">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>