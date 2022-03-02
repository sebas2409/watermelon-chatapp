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
    <script src="js/scripts.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
$nombre=$_POST['usuario'];

?>
<h1 class="display-5">Bienvenido a Watermelon ChatApp</h1>
<h6>Desarrollado por Juan Sebastián González López</h6>
<div class="container mt-5 col-sm-5">
    <div class="card">
        <div class="card-header">Conversacion</div>
        <div class="card-body scroll">
        </div>
        <div class="card-footer">
            <form method="post" action="post.php" onsubmit="enviarDatos(); return false;" id="formulario">
                <div class="input-group">
                    <input class="form-control" type="text" value="<?php echo $nombre?>" id="usuario" name="usuario" readonly>
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
