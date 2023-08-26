<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'u510854823_jesus');
    define('DB_PASSWORD', 'Mataka12');
    define('DB_NAME', 'u510854823_login_tuto');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
?>