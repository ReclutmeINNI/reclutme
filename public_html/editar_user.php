<?php
   include('menu1.php');
    include('conexion.php');
   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar usuario seleccionado</title>
    <link rel="stylesheet" href="css/empnuevo.css">
    
</head>
<body>


<?php
    $id=$_GET["id"];
    $sql="SELECT * FROM usuarios where id='$id'";
    $result=mysqli_query($link, $sql);
    while($mostrar = mysqli_fetch_array($result)){
?>
<br>
  <div class="container">
    <h2>Editando empleo</h2>
        <form action="update-users.php" method="POST">

        <label>ID</label>
        <input type="text" value="<?php echo $mostrar['id'] ?>" name="U_id" readonly>
        <label>Email</label>
        <input type="text" value="<?php echo $mostrar['email'] ?>" name="U_email">
        <label>Clave</label>
        <input type="text" value="<?php echo $mostrar['clave'] ?>" name="U_clave">
        
        

    <label>Rol</label>
        <?php echo $mostrar['rol_id'] ?>
        <select name="U_rol" required>
        <option value="">Seleccionar</option>
        <option value="2">Usuario - 2</option>
        <option value="1">Administrador - 1</option>
        </select>

       
      
      
<?php    
    }
?> 

    <button class="button button1" id="button1" type="submit" value="Guardar">Actualizar</button>

  </form>

</div>
</body>
</html>