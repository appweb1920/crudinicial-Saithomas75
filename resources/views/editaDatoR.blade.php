<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
      <li class="active"><a href="/Recolector">Recolector</a></li>
      <li><a href="/Recolector/CrearRecolector">Crear</a></li>
      <li><a href="/Recolector/Enlistar">Enlistar</a></li>
      <li><a href="/Recolector/Editar">Editar</a></li>
    </ul>
  </div>
</nav>

    <h1>Editando el dato</h1>

    <form action="guardaEdicionR" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$recolectores->id_r}}">
        <input type="text" name="nombre" value="{{$recolectores->nombre}}">
        Dia <input type="text" name="dia" value="{{$recolectores->dia}}">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>