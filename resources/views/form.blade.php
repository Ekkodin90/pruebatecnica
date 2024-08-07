<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crear Tarea </title>

    <link rel="stylesheet" href=" {{asset('css/formulario.css')}}">
</head>
<body>
    <div class="contenido">
        <h1> Crear tarea </h1>
        <hr>
        <form action="/form" method="POST">
            @csrf

            
            <label for="" class="etiqueta"> Título de la tarea </label>
            <br>
            <input type="text" name="titulo" id="intext" required>
            <br>
            <label for="" class="etiqueta"> Descripción de la tarea </label>
            <br>
            <textarea name="descripcion" id="textarea" required></textarea>
            <br>
            <button type="submit" id="crear-tarea"> Crear </button>
        </form>
    </div>
</body>
</html>