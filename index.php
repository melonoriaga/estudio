<!DOCTYPE html>
<html>
    <head>
        <title>estudio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link href="css/stylo.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli|Roboto" rel="stylesheet"> 
        <link rel="shortcut icon" type="image/x-icon" href="">
    </head>
    <body>
        <div class="container-fluid">
            <div class="formulario">
                <p class="title1">Tarea 1</p>
                <form role="form" method="post" action="autentification.php">
                    <div class="form-group">
                        <input id="user_name" class="form-control" type="text"  name="user_name" placeholder="Nombre" required="">
                    </div>
                    <div class="form-group">
                        <input id="user_password" class="form-control" type="password"  name="user_password" required="">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                </form>
            </div>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/core.js"></script>
    </body>
</html>
