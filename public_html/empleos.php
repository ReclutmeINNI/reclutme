<?php
   include('menu1.php');
 

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'u510854823_jesus');
    define('DB_PASSWORD', 'Mataka12');
    define('DB_NAME', 'u510854823_login_tuto');




    function arrojarempleos(){
                $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
                if($link === false){
                    die("ERROR EN LA CONEXION" . mysqli_connect_error());
                }
            $resultado = $link->query("SELECT * FROM empleos");
            
            // Generar las etiquetas <a> para cada candidato

            while ($fila = $resultado->fetch_assoc()) {
                $empleo_id = $fila["empleo_id"]; 
                $funciones = $fila["funciones"];
                $empresa =$fila["empresa"]; 
                $nombre =$fila["nombre"];                
                $puesto =$fila["puesto"];
                $turno   =$fila["turno"];
                $salario=$fila["salario"];
                $tiposal =$fila["tipo_salario"];
                $tipocontra    =$fila["tipo_contratacion"];
                $categoria    =$fila["categoria"];
                $subcategoria    =$fila["subcategoria"];
                $requerimientos =$fila["requerimientos"];

                echo "         
                <div class=\"divemp\" id=\"$empleo_id\" onclick=\"obtenerid($empleo_id)\">
                   <div  class=\"divempcentitulo\" ><p id=\"puesto_$empleo_id\"  class=\"aetiemptitulo\">$puesto</p><hr class=\"hr1\"></div>
                   <div id=\"funciones\" class=\"divempcen\"><h5 class=\"aetiemp\" ><h5 id=\"funcion\" class=\"hcampo\">$funciones</h5></div>
                    <br>                   
                   <div class =\"divhorsalturn\">
                        <div  class =\"horsaltur\"><h5>Turno</h5> <p id=\"turno\" class=\"hcampo\">$turno</p></div>
                        <div  class =\"horsaltur\"><h5>Contratacion</h5>  <p id=\"tipocontra\" class=\"hcampo\">$tipocontra</p></div>

                        <div  class =\"horsaltur\"><h5>Salario</h5> <h5 id=\"salario\" class=\"hcampo\">$salario</h5></div>
                        <div class =\"horsaltur\"><h5>Nombre</h5> <h5 id=\"nombre\" class=\"hcampo\">$nombre</h5></div>
                        <div class =\"horsaltur\"><h5>Empresa</h5> <h5 id=\"empresa\" class=\"hcampo\">$empresa</h5></div>
                        
                        <div class=\"sinvis\" >
                             <h5 id=\"tiposalario\" class=\"hcampo\">$tiposal</h5>
                             <h5 id=\"categoria\" class=\"hcampo\">$categoria</h5>
                             <h5 id=\"subcategoria\" class=\"hcampo\">$subcategoria</h5>
                             <h5 id=\"requerimientos\" class=\"hcampo\">$requerimientos</h5>
                        </div>
                    </div>
                    <br>
                            <button class=\"button\">Postular</button>

                </div>
                ";
            }
            $link->close();
    }






    function divclickemp(){
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }

    if (isset($_POST['dato'])) {
        $valor = $_POST['dato'];
        echo $valor;       

   
    $resultado = $link->query("SELECT * FROM $valor");


    /*
            while ($fila = $resultado->fetch_assoc()) {
                $empleo_id = $fila["empleo_id"]; 
                $funciones = $fila["funciones"];
                $empresa =$fila["empresa"]; 
                $nombre =$fila["nombre"];                
                $puesto =$fila["puesto"];
                $turno   =$fila["turno"];
                $salario=$fila["salario"];
                $tiposal =$fila["tipo_salario"];
                $tipocontra    =$fila["tipo_contratacion"];
                $categoria    =$fila["categoria"];
                $subcategoria    =$fila["subcategoria"];
                $requerimientos =$fila["requerimientos"];
            


                    // Hacer algo con el valor recibido desde JavaScript
                    echo "Valor recibido desde JavaScript: " . $valor;
                    echo "         
                    <div class=\"divfunc\"><p id=\"vispuesto\">$puesto</p>k</div>
            
                    ";
                  }*/

              
     }
    }
         

?>

<!DOCTYPE ht    ml>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/styleempleos.css">
    <link rel="stylesheet" href="css/estilos-menu.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>
       
    <script >


        function enviarDatos(valor){
            $.ajax({
            url: 'empleos.php', // Ruta al archivo PHP
            method: 'POST', // Método de la solicitud HTTP
            data: { dato: valor }, // Datos que deseas enviar
            success: function(response) {
              // La solicitud se completó exitosamente
              console.log(response);
            },
            error: function(xhr, status, error) {
              // Ocurrió un error durante la solicitud
              console.log(error);
            }
          });
        }


        function obtenerid(idemp){
            document.getElementById(idemp).addEventListener('click', function() {
            var divId = this.id;console.log("ID del div:" + divId);
        
        })}

    </script>

    <div class="divmasterprin">
        <div class="divmas"><?php arrojarempleos();?></div>

    </div>
</body>
</html>

