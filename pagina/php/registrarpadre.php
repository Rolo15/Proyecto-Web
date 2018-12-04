<?php

    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];

        
          $insertar = "INSERT INTO registrarpadre( nombre, apellido, email,direccion ) VALUES('$nombre','$apellido','$email','$direccion')";
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