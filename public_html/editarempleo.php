<?php
   include('menu1.php');
    include('conexion.php');
   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Empleo seleccionado</title>
    <link rel="stylesheet" href="css/empnuevo.css">
    
</head>
<body>


<?php
    $id=$_GET["id"];
    $sql="SELECT * FROM empleos where empleo_id='$id'";
    $result=mysqli_query($link, $sql);
    while($mostrar = mysqli_fetch_array($result)){
?>
<br>
  <div class="container">
    <h2>Editando empleo</h2>
        <form action="procesareditarempleo.php" method="POST">
        <label>Id</label>
        <input type="text" value="<?php echo $mostrar['empleo_id'] ?>" name="Mempleo_id" readonly >

    <label>Estado del empleo</label>
        <?php echo $mostrar['estado_empleo'] ?>
        <select name="Mestado_empleo" required>
        <option value="">Seleccionar</option>
        <option value="Disponible">Disponible</option>
        <option value="No disponible">No disponible</option>
        </select>

        <label>Nombre</label>
        <input type="text" value="<?php echo $mostrar['nombre'] ?>" name="Mnombre">
        <label>Empresa</label>
        <input type="text" value="<?php echo $mostrar['empresa'] ?>" name="Mempresa">
        <label>Puesto</label>
        <input type="text" value="<?php echo $mostrar['puesto'] ?>" name="Mpuesto">
        <label>Turno</label>
        <input type="text" value="<?php echo $mostrar['turno'] ?>" name="Mturno">
        <label>Salario</label>
        <input type="text" value="<?php echo $mostrar['salario'] ?>" name="Msalario">
        <label>Tipo de salario</label>
        <input type="text" value="<?php echo $mostrar['tipo_salario'] ?>" name="Mtipo_salario">

    <label>Tipo de contratacion</label>
        <?php echo $mostrar['tipo_contratacion'] ?>
        <select name="Mtipo_contratacion" required>
        <option value="">Seleccionar</option>
        <option value="Indeterminado">Indeterminado</option>
        <option value="Temporal">Temporal</option>
        </select>

        <label>Categoria</label>
        <input type="text" value="<?php echo $mostrar['categoria'] ?>" name="Mcategoria">
        <label>Subcategoria</label>
        <input type="text" value="<?php echo $mostrar['subcategoria'] ?>" name="Msubcategoria">
        <label>Requerimientos</label>
        <textarea rows="4" name="Mrequerimientos"><?php echo $mostrar['requerimientos'] ?></textarea>
        <label>Funciones</label>
        <textarea rows="4" name="Mfunciones"><?php echo $mostrar['funciones']?></textarea>
      
      
<?php    
    }
?> 

    <button class="button button1" id="button1" type="submit" value="Guardar">Actualizar</button>

  </form>

</div>
</body>
</html>