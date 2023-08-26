
<?php 
    
    include 'code-register-admin.php';

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
    <h2>Agregar usuario</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
                
                
                <label for="email">Email</label>
                <input type="text" name="email">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                
                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"> <?php echo $password_err; ?></span>
                <br>
        
        

    <label for="rol_id">Estado del empleo:</label>
      <select name="rol_id" required>
        <option value="">Seleccionar</option>
        <option value="2">Usuario - 2</option>
        <option value="1">Administrador - 1</option>
        </select>

       
      
      
<?php    
    
?> 

    <button class="button button1" id="button1" type="submit" value="Guardar">Guardar</button>

  </form>

</div>
</body>
</html>