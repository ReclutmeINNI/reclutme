<?php
include ("conexion.php");


$Id = $_POST['U_id'];
$Email = $_POST['U_email'];
$Clave = $_POST['U_clave'];
$Rol = $_POST['U_rol'];

 



mysqli_query($link, "UPDATE usuarios SET id = '$Id', email = '$Email', clave = '$Clave', rol_id = '$Rol' 
WHERE id = '$Id'") or die("No se pudo actualizar");

 mysqli_close($link);    
header("location:ver-dato-usuarios.php
");
?>