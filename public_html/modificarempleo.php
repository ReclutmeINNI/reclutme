<?php
   include('menu1.php');
    include('conexion.php');
   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Empleo</title>
    <link rel="stylesheet" href="css/modificarempleo.css">
    
</head>

<script type="text/javascript">
    function ConfirmarEliminar() {
        var respuesta = confirm("Estas seguro que deseas eliminar el usuario");
        if(respuesta== true){
            return true;
        }else{
            return false;
        }
    }

</script>
<body>
<br>
<table class="tableresultados">
<tr class="basetabla">
<a href=https://reclut.me/empnuevo.php><button class="button button1" >Agregar empleo</button></a>
<td>Id</td>
<td>Estado del empleo</td>
<td>Nombre</td>
<td>Empresa</td>
<td>Puesto</td>
<td>Turno</td>
<td>Salario</td>
<td>Tipo de salario</td>
<td>Tipo de contratacion</td>
<td>Categoria</td>
<td>Subcategoria</td>
<td>Requerimientos</td>
<td>Funciones</td>
<td></td>
<td></td>

</tr>
<?php
    $sql="SELECT * FROM empleos";
    $result=mysqli_query($link, $sql);
    while($mostrar = mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar['empleo_id']?></td>
    <td><?php echo $mostrar['estado_empleo']?></td>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['empresa']?></td>
    <td><?php echo $mostrar['puesto']?></td>
    <td><?php echo $mostrar['turno']?></td>
    <td><?php echo $mostrar['salario']?></td>
    <td><?php echo $mostrar['tipo_salario']?></td>
    <td><?php echo $mostrar['tipo_contratacion']?></td>
    <td><?php echo $mostrar['categoria']?></td>
    <td><?php echo $mostrar['subcategoria']?></td>
    <td><?php echo $mostrar['requerimientos']?></td>
    <td><?php echo $mostrar['funciones']?></td>
    <td><a class="button aeditar" href="editarempleo.php?id=<?php echo $mostrar['empleo_id']?>">Editar</a></td>
<td>
<form action="eliminarempleo.php" method="POST">
    <input hidden= "true" type="text" value="<?php echo $mostrar['empleo_id']?>" name="eliminarID" readonly>
    <input class="button aeditar" type="submit" value="Eliminar" name="btneliminar" onclick="return ConfirmarEliminar()">
</form>
</td>

</tr>
    
<?php    
    }
   
?> 
</table>
</body>
</html>