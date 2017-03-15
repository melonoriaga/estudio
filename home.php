<?php

session_start();
session_destroy();

mysql_connect('localhost', 'root', '');
mysql_select_db('estudio');


if (empty($_SESSION['user_id'])) {
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
            <h2 class="iei">Yeii!!! Toma pa ti!</h2>
        </div>
        <div class="row">
            <div class="col-xs-2">
            </div>
            <div class="col-xs-8">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USER NAME</th>
                                <th>PASSWORD</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $result = mysql_query("SELECT user_id, user_name, user_password FROM usuario"); ?>
                            <?php while ($row = mysql_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['user_id']; ?></td>
                                    <td><?php echo $row['user_name']; ?></td>
                                    <td><?php echo $row['user_password']; ?></td>
                                    <td>
                                        <form method="post">    
                                            <input type="hidden" name="user_name" value=" <?php echo $user_name ?>">
                                            <input type="hidden" name="user_password" value=" <?php echo $user_password ?>">
                                            <input type="hidden" name="user_id" value=" <?php echo $_SESSION['user_id'] ?>">
                                            <button type="submit" name="user_id_editar" value="">Editar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="cerrar">
                <p>
                    <a href="index.php">Cerrar sec sion</a>
                </p>
            </div>
            </div>
            <div class="col-xs-2">
            </div>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/core.js"></script>
    </body>
</html>