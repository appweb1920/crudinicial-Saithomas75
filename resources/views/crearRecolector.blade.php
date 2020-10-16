<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Recolector</title>
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
        <form action="/AlmacenarRecolector" method="POST">
            @csrf
            <input type="text" name="nombre" placeholder="Nombre">
            Día <input type="date" name="dia">
            <button type="submit">Guardar</button>
        </form>
    </div>
</div>
</body>
</html>