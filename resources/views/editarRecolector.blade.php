<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    @if(!is_null($recolectores))
        @foreach($recolectores as $r)
            <p>{{$r->nombre}} | {{$r->dia}}</p>
            <a href='/EditarRecolector/{{$r->id_r}}'>Editar</a>
            <a href='/EliminaRecolector/{{$r->id_r}}'>Borrar</a>
        @endforeach
    @endif
</body>
</html>