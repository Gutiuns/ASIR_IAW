<?php 
function inserta_ciudad(&$bd,$identity,$nom,$hab,$pais,$mon){

     try{   $sql= "insert into ciudades values (:ident_ciu, :nombre, :habitantes, :pais, :monumentos)";
    $sentencia=$bd->prepare($sql);
    $sentencia->bindValue("ident_ciu", $identity);
    $sentencia->bindValue("nombre", $nom);
    $sentencia->bindValue("habitantes", $hab);
    $sentencia->bindValue("pais", $pais);
    $sentencia->bindValue("monumentos", $mon);
    $sentencia->execute();
    } catch (PDOException $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

function borra_ciudad(&$bd,$id){
    try{   
    $sql= "delete from ciudades where idCiudad=:id";
   $sentencia=$bd->prepare($sql);
   $sentencia->bindValue("id", $id);
   $sentencia->execute();
   }catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
   }


function actualiza_ciudad(&$bd,$ident,$nom){  
$sql= "update ciudades set nombre=:nombre where idCiudad=:id";
   $sentencia=$bd->prepare($sql);
   $sentencia->bindValue("nombre", $nom);
   $sentencia->bindValue("id", $ident);
   $sentencia->execute();
}
function imprime_ciudades($bd){  
    $i=0;
    $sql= "SELECT * FROM fotografias as t1
            INNER JOIN ciudades 
            ON t1.idCiudad = ciudades.idCiudad
            ORDER BY ciudades.idCiudad ASC";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
            if ($i%2==0){
            echo "<tr class='linea'><td>$fila[idCiudad]</td><td>$fila[nombre]</td><td>$fila[habitantes]</td><td>$fila[pais]</td><td>$fila[monumentos]</td><td><img src='resources/pictures/$fila[fotografia].jpg' heigh='86px' width='128px'/></td></tr>";
            }else{
            echo "<tr class='linea2'><td>$fila[idCiudad]</td><td>$fila[nombre]</td><td>$fila[habitantes]</td><td>$fila[pais]</td><td>$fila[monumentos]</td><td><img src='resources/pictures/$fila[fotografia].jpg' width='128px'/></td></tr>";
            }
        $i++;
    }
    if ($i==0){
        echo "<p class='alert'>La base de datos no tiene contenido.</p>";
    }
    $sentencia->closeCursor();
}
function id_libre($bd){  
    $id=1;
    $sql= "select * from ciudades";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
        if ($id==$fila['idCiudad']){
            $id++;
        }
    }
    $sentencia->closeCursor();
    return($id);
}
    
function formu_borra_ciudades($bd){  
    $i=0;
    $sql= "select * from ciudades";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
        echo "<div class='line'><input type='checkbox'  id='" .$fila['nombre'] ."' name='id[]' value='" .$fila['idCiudad'] ."'/><label for='" .$fila['nombre'] ."'>" .$fila['nombre'] ."</label></div>";
        $i++;
    }
    if ($i==0){
        echo "<p class='alert'>La base de datos no tiene contenido.</p>";
    } else {
        echo "<br/><input type='submit' value='Borrar' class='enviar rojo' />";
        echo "<input type='reset' value='Resetear' class='enviar rojo' />";
    }
    return ($i);
    $sentencia->closeCursor();
}   

function formu_edita_ciudades($bd){  
    $i=0;
    $sql= "select * from ciudades";
        $sentencia=$bd->prepare($sql);
        $sentencia->execute();
        while($fila=$sentencia->fetch() ){
        echo "<div class='line'><input type='radio' id='" .$fila['nombre'] ."' required name='id' value='" .$fila['idCiudad'] ."'/><label for='" .$fila['nombre'] ."'>" .$fila['nombre'] ."</label></div>";
        $i++;
    }
    if ($i==0){
        echo "<p class='alert'>La base de datos no tiene contenido.</p>";
    } else {
        echo "<div class='line'><label for='neim' >Nombre </label> <input autocomplete='off' size='40' type='text' name='nombre' required id='neim' class='greeen' placeholder='Granada'/></div>";
        echo "<br/><input type='submit' value='Aceptar' class='enviar verde' />";
        echo "<input type='reset' value='Resetear' class='enviar verde' />";
    }
    $sentencia->closeCursor();
}   
function existe_nombre ($bd,$nombre){
    $igual=true;
    $sql= "select * from ciudades";
    $sentencia=$bd->prepare($sql);
    $sentencia->execute();
    while($fila=$sentencia->fetch() ){
       if ($fila['nombre']==$nombre) {
            $igual=false;
    }
}
return ($igual);
}
function tipo_letra (){
    echo"<link href='https://fonts.googleapis.com/css?family=Montserrat+Subrayada:700|Open+Sans:400,600,700&display=swap' rel='stylesheet'>";
}
?>