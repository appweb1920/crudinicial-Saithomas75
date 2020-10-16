<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editando el dato</h1>

    <form action="guardaEdicion" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$puntos_reciclaje->id_pr}}">
        <input type="text" name="tipo" value="{{$puntos_reciclaje->tipo_basura}}">
        Fecha apertura <input type="date" name="apertura" value="{{$puntos_reciclaje->apertura}}">
        Fecha cierre <input type="date" name="cierre" value="{{$puntos_reciclaje->cierre}}">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>