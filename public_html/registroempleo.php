<?php
include ("conexion.php");
?>
<!DOCTYPE html>

<html lang="es">
        <head>
    <link rel="stylesheet"/>
        </head>
<body>

<?php

$Estado = $_POST['estado_empleo'];
$Nombre = $_POST['nombre'];
$Empresa = $_POST['empresa'];
$Puesto = $_POST['puesto'];
$Turno = $_POST['turno'];
$Salario = $_POST['salario'];
$Salariotipo = $_POST['tipo_salario'];
$Contratacion = $_POST['tipo_contratacion'];
$Categoria = $_POST['categoria'];
$Subcategoria = $_POST['subcategoria'];
$Requerimientos = $_POST['requerimientos'];
$Funciones = $_POST['funciones'];
 

/*
echo "$Estado";
echo "$Nombre";
echo "$Empresa";
echo "$Puesto";
echo "$Turno";
echo "$Salario";
echo "$Salariotipo";
echo "$Contratacion";
echo "$Categoria";
echo "$Subcategoria";
echo "$Requerimientos";
echo "$Funciones";*/
 
$insertar = "INSERT INTO empleos(estado_empleo,nombre,empresa,puesto,turno,salario,tipo_salario,tipo_contratacion,categoria,subcategoria,requerimientos,funciones) 
VALUES('$Estado','$Nombre','$Empresa','$Puesto','$Turno','$Salario','$Salariotipo','$Contratacion','$Categoria','$Subcategoria','$Requerimientos','$Funciones')";
  
   /* $query = mysqli_query($link,$insertar);*/
        if(mysqli_query($link,$insertar)){
            echo '<script> alert("Guardado correctamente");
                location.href="mempleos.php"
                </script>';
            }else{
                echo "Fallo";
            }
            mysqli_close();    
            
?>
</body>
</html>