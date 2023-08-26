<?php
   include('menu1.php');
    include('conexion.php');
   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultados de Examen</title>
    <link rel="stylesheet" href="css/resultadoexamenes.css">
    
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
<td>Id</td>
<td>Valor DISC</td>
<td>Autodescripcion</td>
<td>Motivaciones</td>
<td>Trabajo bajo presion</td>
</tr>
<?php
    $sql="SELECT * FROM tablacleaver";
    $result=mysqli_query($link, $sql);
    while($mostrar = mysqli_fetch_array($result)){
?>

<tr>
    <td><?php echo $mostrar['Id']?></td>
    <td><?php echo $mostrar['ValorDISC']?></td>
    <td><?php echo $mostrar['Autodescriptivo']?></td>
    <td><?php echo $mostrar['Motivaciones']?></td>
    <td><?php echo $mostrar['Bajopresion']?></td>
</tr>
    
<?php    
    }
   
?> 
</table>
</body>
</html>