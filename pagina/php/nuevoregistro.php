<?php

    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellidos"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $nuevapass = $_POST["nuevapass"];

        
          $insertar = "INSERT INTO nuevoregistro(nombre,apellidos,email,pass,nuevapass) VALUES('$nombre','$apellido','$email','$pass','$nuevapass)";
        $resul= $conexion->query($insertar);
        
        if($resul){
            ?>
               <scrip type="text/javascript" >
                      alter("Registro Exitoso");
                   
               </scrip>
                
            <?php    
            
               
        }
            else{
                     ?>
               <scrip type="text/javascript" >
                      alter("Error");
                   
               </scrip>
                
            <?php 
        }
       

?>