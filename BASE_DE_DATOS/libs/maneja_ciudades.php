<?php 
function inserta_ciudad(&$bd,$identity,$nom){

     try{   $sql= "insert into ciudades values (:ident_ciu, :nombre)";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("ident_ciu", $identity);
    $sentencia->bindValue("nombre", $nom);
    $sentencia->execute();
    }catch(PDOException $e){
        $e=$sentencia->errorInfo();
        print_r($e);
    }
    $sentencia->closeCursor();
}
function borra_ciudad(&$bd,$nom){
    try{   
    $sql= "delete from ciudades where nombre=:nombre";
   $sentencia=$bd->prepare($sql);
   $sentencia->bindValue("nombre", $nom);
   $sentencia->execute();
   }catch(PDOException $e){
       $e=$sentencia->errorInfo();
       print_r($e);
   }
   $sentencia->closeCursor();
}
function actualiza_ciudad(&$bd,$ident,$nom){  
$sql= "update ciudades set nombre=:nombre where idCiudad=:id";
   $sentencia=$bd->prepare($sql);
   $sentencia->bindValue("nombre", $nom);
   $sentencia->bindValue("id", $ident);
   $sentencia->execute();
   $sentencia->closeCursor();
}
function imprime_ciudades(&$bd){  
    $sql= "select * from ciudades";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while( $fila=$sentencia->fetch() ){
        echo "<p>$fila[idCiudad], $fila[nombre]</p>";
        $sentencia->closeCursor();
    }}
    
?>