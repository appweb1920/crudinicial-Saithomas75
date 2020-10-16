<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlistar</title>
</head>
<body>
    @if(!is_null($detalle))
        @foreach($detalle as $d)
            <p>{{$d->tipo_basura}} | {{$p->apertura}} | {{$p->cierre}}</p>
        @endforeach
    @endif
</body>
</html>