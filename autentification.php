<?php

$user_name = '';
if (!empty($_POST["user_name"])) {
    $user_name = $_POST["user_name"];
}

$user_password = '';
if (!empty($_POST["user_password"])) {
    $user_password = $_POST["user_password"];
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
            <?php echo $user_name; ?>
            <?php echo $user_password; ?>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/core.js"></script>
    </body>
</html>