<?php
include ("conexion.php");


$Id = $_POST['Mempleo_id'];
$Estado = $_POST['Mestado_empleo'];
$Nombre = $_POST['Mnombre'];
$Empresa = $_POST['Mempresa'];
$Puesto = $_POST['Mpuesto'];
$Turno = $_POST['Mturno'];
$Salario = $_POST['Msalario'];
$Salariotipo = $_POST['Mtipo_salario'];
$Contratacion = $_POST['Mtipo_contratacion'];
$Categoria = $_POST['Mcategoria'];
$Subcategoria = $_POST['Msubcategoria'];
$Requerimientos = $_POST['Mrequerimientos'];
$Funciones = $_POST['Mfunciones'];
 



mysqli_query($link, "UPDATE empleos SET estado_empleo = '$Estado', nombre = '$Nombre', empresa = '$Empresa', puesto = '$Puesto', turno = '$Turno', salario = '$Salario', tipo_salario = '$Salariotipo',
 tipo_contratacion = '$Contratacion', categoria = '$Categoria', subcategoria = '$Subcategoria', requerimientos = '$Requerimientos', funciones = '$Funciones' 
WHERE empleo_id = '$Id'") or die("No se pudo actualizar");

 mysqli_close($link);    
header("location:modificarempleo.php");
?>
