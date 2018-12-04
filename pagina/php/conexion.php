<?php
 $conexion = new mysqli("localhost","root","","bd_colegio");
    if($conexion){
        echo "exito";  
    }

        else{ 
            
            echo "error";    
        
        }
?>