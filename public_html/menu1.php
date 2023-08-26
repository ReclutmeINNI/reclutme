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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclut.me</title>
    <link rel="stylesheet" href="css/estilos-menu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="gif/1.png" alt="" class="logo">
        </a>
        <ul>
            <li><a href="index_admin.php">Inicio</a></li>
            <li><a href="examenes.php">Examenes</a></li>
            <li><a href="resultadosexamenes.php">Resultados</a></li>
            <li><a href="ver-dato-usuarios.php">Usuarios</a></li>
            <li><a href="modificarempleo.php">Empleos</a></li>
            <li><a href="empleos.php">Postulaciones</a></li>
            <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <section></section>
</body>
</html>