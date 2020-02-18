<?php

function imprime_zapatos($bd){  
    $sql= "SELECT * FROM zapatos";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
            echo "<tr><td><input type='checkbox' name='zap[]' value='$fila[id]'/></td><td>$fila[id]</td><td>$fila[Nombre]</td><td>$fila[precio] €</td></tr>";           
    } 
    $sentencia->closeCursor();
}
function sacazap($bd,$id){
    $sql= "SELECT * FROM zapatos WHERE id = :id";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("id", $id);
    $sentencia->execute();
    while($fila=$sentencia->fetch() ){    
        echo "Nombre: " .$fila['Nombre'];  
        echo "<br/>";
        echo "Desripción: " .$fila['Descripcion']; 
        echo "<br/>";
        echo "Precio: " .$fila['precio'];     
    } 
}
function actualizaPrecio(&$bd,$id){
    $sql= "UPDATE zapatos SET precio = precio + 5 WHERE id = :id";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("id", $id);
    $sentencia->execute();
}
function imprime_zapatos_lista($bd){  
    $sql= "SELECT * FROM zapatos";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
            echo " <option value='".$fila['id'] . "'>" .$fila['Nombre'] ." </option>";           
    } 
    $sentencia->closeCursor();
}

?>