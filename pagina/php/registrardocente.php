<?php

    include("conexion.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $asignatura = $_POST["asignatura"];
    $email = $_POST["email"];
    $direccion = $_POST["direccion"];

        
          $insertar = "INSERT INTO registrardocente(nombre,apellido,asignatura,email,direccion ) VALUES('$nombre','$apellido','$asignatura','$email','$direccion')";
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