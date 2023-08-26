<?php
   include('menu1.php');

   ?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos de usuario</title>
    <link rel="stylesheet" href="css/empnuevo.css">
    
</head>
<body>

<br>
  <div class="container">
    <h2>Registra tus datos</h2>
    <form class="form" name="empleos" method="POST" action="registro_dat_usuario.php">
    
    <label for="curp">Curp:</label>
      <input type="text" name="curp" required>
      
      <label for="rfc">Rfc:</label>
      <input type="text" name="rfc" required>

      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" required>

      <label for="apellido_pat">Apellido paterno:</label>
      <input type="text" name="apellido_pat" required>

      <label for="apellido_mat">Apellido materno:</label>
      <input type="text" name="apellido_mat" required>

      <label for="edad">Edad:</label>
      <input type="text" name="edad" required><br>
      
      
      <label for="fnac">Fecha de nacimineto:</label>
      <input type="date" id="fnac" name="fnac">
      
      

      <label for="telefono">Telefono:</label>
      <input type="text" name="telefono" required><br>

      <label for="telefono">Codigo postal:</label>
      <input type="text" name="telefono" required><br>

      <label for="domicilio">Domicilio:</label>
      <input type="text" name="domicilio" required><br>
      
      
      
      
      <label for="colonia">Colonia:</label>
      <input type="text" name="colonia" required><br>

      <label for="estado">Estado:</label>
      <input type="text" name="estado" required><br>

      <label for="pais">Pais:</label>
      <input type="text" name="pais" required><br>
      
      
      
      <label for="max_lvl_estudios">Maximo nivel de estudios:</label>
      <select name="max_lvl_estudios" required>
        <option value="">Seleccionar</option>
        <option value="Indeterminado">Secundario</option>
        <option value="Temporal">preparatoria</option>
        <option value="Indeterminado">Licenciatura</option>
      </select>
      

      

      <button class="button button1" id="button1" type="submit" value="Guardar">Guardar</button>



        




    </form>
  </div>
</body>
</html>