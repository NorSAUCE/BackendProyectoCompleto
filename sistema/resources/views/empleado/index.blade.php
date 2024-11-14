<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de empleados</h1>
    <a href="{{route('empleado.create')}}">Crear un nuevo empleado</a>
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
           
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr >
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->Apellido }}</td>
                    <td>{{ $empleado->Correo }}</td>
                    <td>
                    <a href="{{route('empleado.show', $empleado->id)}}">Ver mas</a>
                    <a href="{{route('empleado.edit', $empleado->id)}}">Editar</a>
                    <form action="{{route('empleado.destroy',$empleado->id)}}" method="POST">
                      
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
