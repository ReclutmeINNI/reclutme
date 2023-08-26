<?php

    //INICIALIZAR LA SESION
    
    
    session_start();
    
    

require_once "conexion.php";

$email = $password ="";
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["email"]))){
        $email_err = "Por favor, ingrese el email correcto";
    }else{
        $email = trim($_POST["email"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }
    
    
    

    //VALIDAR CREDENCIALES
    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, email, clave, rol_id FROM usuarios WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password, $rol_id );
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        
                        // ALMACENAR DATOS EN VARABLES DE SESION
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email;
                        $_SESSION["rol"] = $rol_id;
                        
                        
                        
                        if (isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: index_admin.php');
                break;
                
            case 2:
                header('location: index.php');
                break;
                
            default:
        }
    }
                        
                    }else{
                        $password_err = "La contraseña que has introducido no es valida";
                    }
                    
                } 
            }else{
                    $email_err = "No se ha encontrado ninguna cuenta con este email.";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }
    
    mysqli_close($link);
    
}

?>

























