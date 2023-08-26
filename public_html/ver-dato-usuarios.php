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
<a href=https://reclut.me/register_user.php><button class="button button1" >Agregar usuario</button></a>
<td>Id</td>
<td>Email</td>
<td>contraseña</td>
<td>Rol id</td>

<td></td>
<td></td>

</tr>
<?php
    $sql="SELECT * FROM usuarios";
    $result=mysqli_query($link, $sql);
    while($mostrar = mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar['id']?></td>
    <td><?php echo $mostrar['email']?></td>
    <td><?php echo $mostrar['clave']?></td>
    <td><?php echo $mostrar['rol_id']?></td>
    
    <td><a class="button aeditar" href="editar_user.php?id=<?php echo $mostrar['id']?>">Editar</a></td>
<td>
<form action="delete_user.php" method="POST">
    <input hidden= "true" type="text" value="<?php echo $mostrar['id']?>" name="eliminarID" readonly>
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