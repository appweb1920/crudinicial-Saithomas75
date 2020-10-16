<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlistar</title>
</head>
<body>
    @if(!is_null($recolectores))
        @foreach($recolectores as $r)
            <p>{{$r->nombre}} | {{$r->dia}}</p>
        @endforeach
    @endif
</body>
</html>