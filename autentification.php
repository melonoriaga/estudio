<?php

// mysql_connect('localhost', 'root', '');
// mysql_select_db('estudio');

// $user_name = '';
// if (!empty($_POST["user_name"])) {
//     $user_name = $_POST["user_name"];
// }

// $user_password = '';
// if (!empty($_POST["user_password"])) {
//     $user_password = $_POST["user_password"];
// }

if (!empty($_POST["user_name"]) && !empty($_POST["user_password"])) {
    
    mysql_connect('localhost', 'root', '');
    mysql_select_db('estudio');

    $result = mysql_query("SELECT user_id, user_name FROM usuario WHERE user_name = '".$_POST["user_name"]."' AND user_password = '".$_POST["user_password"]."'");
    $usuario = mysql_fetch_array($result);
    if (!empty($usuario)) {
       header('Location: homa.php'); 
    } else {
        header('Location: index.php');
    } 
}else {
    header('Location: index.php');
}

?>
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
            <p class="p-1">
                Nombre insertado: <span><?php echo $user_name; ?></span>
                <br>
                Contraseña insertada: <span><?php echo $user_password; ?></span>
            </p>

            <?php $result = mysql_query("SELECT user_id, user_name, user_password FROM usuario"); ?>
            <?php while ($row = mysql_fetch_array($result)) { ?>
                <p class="p-2">
                    Y el user_id obtenido desde la base de datos es: 
                    <?php echo $row['user_id']; ?>
                </p>
            <?php } ?>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/core.js"></script>
    </body>
</html>