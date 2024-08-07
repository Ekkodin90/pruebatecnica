<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio </title>

    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
    <div class="contenedor">
        <h1> Creación de Tareas </h1>
        <hr>
        <button onclick="window.location.href='/form/crear'" id="crear-tarea"> Crear tarea </button>
        <table>
            <tr>
                <th> # Tarea </th>
                <th> Titulo </th>
                <th> Descripción </th>
                <th> Acciones </th>
            </tr>
            @foreach ($tareas as $items )
                <tr>
                    <td>
                        {{ $items -> idTarea}}
                    </td>
                    <td>
                        {{ $items -> titulo}}
                    </td>
                    <td>
                        {{ $items -> descripcion}}
                    </td>

                    <td>
                        <button onclick="window.location.href='/form/{{$items -> idTarea}}/editar'" id="editar"> Editar </button>
                        
                        <form action="/form/{{$items -> idTarea}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="borrar"> Borrar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>