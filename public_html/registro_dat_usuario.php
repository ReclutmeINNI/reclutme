<!DOCTYPE html>

<html lang="es">
        <head>
    <link rel="stylesheet"/>
        </head>
<body>

<?php

$Curp = $_POST['curp'];
$Rfc = $_POST['rfc'];
$Nombre = $_POST['nombre'];
$Apellidop = $_POST['apellido_pat'];
$ApellidoM = $_POST['apellido_mat'];
$Edad = $_POST['edad'];
$Fnac = $_POST['fnac'];
$Telefono = $_POST['telefono'];
$Cp = $_POST['cp'];
$Domicilio = $_POST['domicilio'];
$Colonia = $_POST['colonia'];
$Estado = $_POST['estado'];
$Pais = $_POST['pais'];
$MaxE = $_POST['max_lvl_estudios'];
 

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
 
$insertar = "INSERT INTO persona(curp,rfc,nombre,apellido_pat,apellido_mat,edad,fnac,telefono,cp,domicilio,colonia,estado,pais,max_lvl_estudios) 
VALUES('$Curp','$Rfc','$Nombre','$Apellidop','$ApellidoM','$Edad','$Fnac','$Telefono','$Cp','$Domicilio','$Colonia','$Estado','$Pais','$MaxE')";
  
   /* $query = mysqli_query($link,$insertar);*/
        if(mysqli_query($link,$insertar)){
            echo '<script> alert("Guardado correctamente");
                location.href="ver-dato-usuarios.php"
                </script>';
            }else{
                echo "Fallo";
            }
            mysqli_close();    
            
?>
</body>
</html>