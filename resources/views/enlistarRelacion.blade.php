<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlistar</title>
</head>
<body>
    @if(!is_null($puntos_reciclaje))
        @foreach($puntos_reciclaje as $p)
            <p>{{$p->tipo_basura}}</p>
                @foreach($p->getRecolector() as $r)
                    <p> - {{$r->nombre}}</p>
                @endforeach
            <br>
        @endforeach
    @endif
</body>
</html>