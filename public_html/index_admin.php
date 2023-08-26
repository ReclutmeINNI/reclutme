<?php

    session_start();



if(!isset($_SESSION['rol'])){
    header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }
    

?>

<?php
    include('menu1.php')
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido Administrador</title>
    <link rel="stylesheet" href="css/estilos.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
   <div class="ctn-welcome">
       
       <img src="gif/logo.jpg" alt="" class="logo-welcome">
       <h1 class="title-welcome">Bienvenido administrador has iniciado sesión</h1>
       <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
       
   </div>
   
    
</body>
</html>