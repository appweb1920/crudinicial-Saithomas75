<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Relación</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }
        </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form action="/AlmacenarRelacion" method="POST">
            @csrf
            <select name="punto">
                @if(!is_null($puntos_reciclaje))
                    @foreach($puntos_reciclaje as $p)
                        <option value="{{$p->id_pr}}">{{$p->tipo_basura}}</option> 
                    @endforeach
                @endif
            </select>

            <select name="rec">
                @if(!is_null($recolectores))
                    @foreach($recolectores as $r)
                        <option value="{{$r->id_r}}">{{$r->nombre}}</option> 
                    @endforeach
                @endif
            </select>
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
</body>
</html>