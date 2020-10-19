<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlistar</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

            .title {
                font-size: 72px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
    </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/Detalle">Detalle</a></li>
      <li><a href="/Detalle/CrearRelacion">Crear</a></li>
      <li><a href="/Detalle/Enlistar">Enlistar</a></li>
    </ul>
  </div>
</nav>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Tipo de basura</th>
      </tr>
    </thead>
</table>
    @if(!is_null($puntos_reciclaje))
        @foreach($puntos_reciclaje as $p)
            <h3>{{$p->tipo_basura}}</h3>
            @foreach($p->getRecolector() as $r)
                <ul class="list-group">
                    <li class="list-group-item">{{$r->nombre}}</li>
                </ul>
            @endforeach
        @endforeach
    @endif
</body>
</html>