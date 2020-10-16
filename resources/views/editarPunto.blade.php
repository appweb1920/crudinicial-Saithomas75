<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    @if(!is_null($puntos_reciclaje))
        @foreach($puntos_reciclaje as $p)
            <p>{{$p->tipo_basura}} | {{$p->apertura}} | {{$p->cierre}}</p>
            <a href='/EditarPunto/{{$p->id_pr}}'>Editar</a>
            <a href='/EliminaPunto/{{$p->id_pr}}'>Borrar</a>
        @endforeach
    @endif
</body>
</html>