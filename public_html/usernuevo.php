<?php
   include('menu1.php');

   ?>

<!DOCTYPE html>
<html>
<head>
    <title>NUEVO Usuario</title>
    <link rel="stylesheet" href="css/empnuevo.css">
    
</head>
<body>

<br>
  <div class="container">
    <h2>NUEVO USUARIO</h2>
    <form class="form" name="empleos" method="POST" action="registrousuario.php">
    
    <label for="estado_empleo">Estado del empleo:</label>
      <select name="estado_empleo" required>
        <option value="">Seleccionar</option>
        <option value="Disponible">Disponible</option>
        <option value="No disponible">No disponible</option>
      </select>

      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" required>

      <label for="empresa">Empresa:</label>
      <input type="text" name="empresa" required>

      <label for="puesto">Puesto:</label>
      <input type="text" name="puesto" required>

      <label for="turno">Turno:</label>
      <input type="text" name="turno" required>

      <label for="salario">Salario:</label>
      <input type="text" name="salario" required><br>

      <label for="tipo_salario">Tipo de salario:</label>
      <input type="text" name="tipo_salario" required><br>

      <label for="tipo_contratacion">Tipo de Contratación:</label>
      <select name="tipo_contratacion" required>
        <option value="">Seleccionar</option>
        <option value="Indeterminado">Indeterminado</option>
        <option value="Temporal">Temporal</option>
      </select>

      <label for="categoria">Categoría:</label>
      <input type="text" name="categoria" required><br>

      <label for="subcategoria">Subcategoría:</label>
      <input type="text" name="subcategoria" required><br>

      <label for="requerimientos">Requerimientos:</label>
      <textarea name="requerimientos" rows="4" required></textarea><br>

      <label for="funciones">Funciones:</label>
      <textarea name="funciones" rows="4" required></textarea><br>

      <button class="button button1" id="button1" type="submit" value="Guardar">Guardar</button>

    </form>
  </div>
</body>
</html>