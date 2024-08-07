<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Editar Tarea </title>
    <link rel="stylesheet" href="{{asset('css/formulario.css')}}">
</head>
<body>
    <div class="contenido">
        <h1> Editar tarea </h1>
        <hr>
        <form action="/form/{{$tareas -> idTarea}}" method="POST">
            @csrf
            @method('PUT')

            
            <label for="" class="etiqueta"> Título de la tarea </label>
            <br>
            <input type="text" name="titulo" id="intext"  required value={{$tareas -> titulo}}>
            <br>
            <label for="" class="etiqueta"> Descripción de la tarea </label>
            <br>
            <textarea name="descripcion" id="textarea" required >{{$tareas -> descripcion}}</textarea>
            <br>
            <button type="submit" id="actualizar"> Actualizar </button>
        </form>
    </div>
</body>
</html>