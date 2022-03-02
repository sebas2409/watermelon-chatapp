<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        let pusher = new Pusher('b32674861d96dba51b59', {
            cluster: 'eu'
        });

        let channel = pusher.subscribe('chatApp');
        channel.bind('chatApp-event', function(data) {
            $('.card-body').append('<li>Juan</li>');
            $('.card-body').append('<small>'+data+'</small>');
        });
        function enviarDatos()
        {
            $.ajax({
                type:'POST',
                url:'post.php',
                data:$('#formulario').serialize(),
                success: function (s) {
                    console.log(s);
                }
            });
        }
    </script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">Conversacion</div>
        <div class="card-body">


        </div>
        <div class="card-footer">
            <form method="post" action="post.php" onsubmit="enviarDatos(); return false;" id="formulario">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Nombre de usuario" id="usuario" name="usuario">
                    <input class="form-control" type="text" placeholder="Escriba su mensaje" id="mensaje" name="mensaje">
                    <input type="submit" class="btn btn-primary" id="boton" name="boton" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
