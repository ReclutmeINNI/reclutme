<?php
include('conexion.php');

$Id = $_POST['eliminarID'];
mysqli_query($link,"DELETE FROM usuarios WHERE id = '$Id'")or die("Error al elimiar");

mysqli_close($link);    
header("location:ver-dato-usuarios.php");


?>
