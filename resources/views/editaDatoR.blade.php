<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editando el dato</h1>

    <form action="guardaEdicionR" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$recolectores->id_r}}">
        <input type="text" name="nombre" value="{{$recolectores->nombre}}">
        Dia <input type="date" name="dia" value="{{$recolectores->dia}}">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>