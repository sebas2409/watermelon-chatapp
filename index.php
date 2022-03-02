<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1 class="display-5">Bienvenido a Watermelon ChatApp</h1>
<h6>Desarrollado por Juan Sebastián González López</h6>
<form class="mt-5" method="post" action="mensajes.php">
    <div class="container col-lg-6">
        <div class="input-group">
            <input class="form-control" placeholder="Escribe tu nombre de usuario" name="usuario" required>
            <input type="submit" value="Empezar a chatear" class="btn btn-primary" name="nombre">
        </div>
    </div>
</form>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
