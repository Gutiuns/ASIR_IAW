<?php
function inserta_usuario(&$bd,$usuario,$contra){
    try{   $sql= "insert into usuarios values (:usu, :pass)";
   $sentencia=$bd->prepare($sql);
   $sentencia->bindValue("usu", $usuario);
   $sentencia->bindValue("pass", $contra);
 
   $sentencia->execute();
   } catch (Exception $e) {
           echo 'Caught exception: ',  $e->getMessage(), "\n";
       }
   }

    
?>