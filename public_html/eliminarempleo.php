<?php
include('conexion.php');

$Id = $_POST['eliminarID'];
mysqli_query($link,"DELETE FROM empleos WHERE empleo_id = '$Id'")or die("Error al elimiar");

mysqli_close($link);    
header("location:modificarempleo.php");


?>
