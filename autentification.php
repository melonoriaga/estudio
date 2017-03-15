<?php

session_start();

if (!empty($_POST["user_name"]) && !empty($_POST["user_password"])) {
    
    mysql_connect('localhost', 'root', '');
    mysql_select_db('estudio');

    $result = mysql_query("SELECT user_id, user_name FROM usuario WHERE user_name = '".$_POST["user_name"]."' AND user_password = '".$_POST["user_password"]."'");
    $usuario = mysql_fetch_array($result);
    if (!empty($usuario)) {
        $_SESSION['user_id'] = $usuario['user_id'];
        header('Location: home.php'); 
    } else {
        header('Location: index.php');
    } 
}else {
    header('Location: index.php');
}

?>