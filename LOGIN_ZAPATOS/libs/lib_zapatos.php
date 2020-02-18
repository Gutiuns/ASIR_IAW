<?php

function existe_user ($bd,$user,$pass){
    $existe=false;
    $sql= "select * from usuarios";
    $sentencia=$bd->prepare($sql);
    $sentencia->execute();
    while($fila=$sentencia->fetch() ){
        if ($fila['usuario']==$user ) {
            if (password_verify($pass,$fila['contraseña'])){
                $existe=true;
            }                   
        }
    }
    return ($existe);
}   
function inserta_usuario(&$bd,$usuario,$contraseña,$nombre,$apellido,$fnacimiento){

    try{   $sql= "insert into usuarios values (:usu, :pass, :nom, :ape, :fna)";
        $con=password_hash($contraseña, PASSWORD_DEFAULT);
        $sentencia=$bd->prepare($sql);
        $sentencia->bindValue("usu", $usuario);
        $sentencia->bindValue("pass",$con);
        $sentencia->bindValue("nom", $nombre);
        $sentencia->bindValue("ape", $apellido);
        $sentencia->bindValue("fna", $fnacimiento);
        $sentencia->execute();
   } catch (PDOException $e) {
           echo 'Caught exception: ',  $e->getMessage(), "\n";
       }
   }
function existe_nombre ($bd,$usu){
    $libre=true;
    $sql= "select * from usuarios";
    $sentencia=$bd->prepare($sql);
    $sentencia->execute();
    while($fila=$sentencia->fetch() ){
       if ($fila['usuario']==$usu) {
            $libre=false;
        }
    }
    return ($libre);
    $sentencia->closeCursor();
}

function pass_bien ($pas1,$pas2){
    if ($pas1 == $pas2){
        $igual=true;
    }else{
        $igual=false;
    }
    return($igual);
}

function ponHeader($ruta){
    echo '<header>
            <img src="resources/ashi_white.png" height="70px" class="headimg"/>                    
            <ul class="fixlist">
            <li class="fixit" ><a href="inicio.php" class="lista ';
            if ($ruta=="inicio.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-home"></i>  Inicio</a></li>
            <li class="fixit "><a href="catalogo.php" class="lista ';
            if ($ruta=="catalogo.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-shopping-cart"></i>  Catálogo</a></li>
            <li class="fixit "><a href="carro.php" class="lista ';
            if ($ruta=="carro.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-shopping-basket"></i>  Carrito</a></li>
            <li class="fixit "><a href="perfil.php" class="lista ';
            if ($ruta=="perfil.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-user-circle"></i>  Perfil</a></li>' ;
                if ($_SESSION['user']=='gutiuns'){
                    echo '<li class="fixit "><a href="admin.php" class="lista ';
                    if ($ruta=="admin.php"){
                        echo "activo";
                    } 
                    echo '"><i class="fas fa-hammer"></i>  Administrar</a></li>';
                }

        echo '</ul>
        <div class="dropdown">
            <button class="dropbtn"><i class="fas fa-bars fa-2x"></i></button>
                <div class="dropdown-content">
                    <a href="inicio.php"><i class="fas fa-home"></i>  Inicio</a>
                    <a href="catalogo.php"><i class="fas fa-shopping-cart"></i>  Catálogo</a>
                    <a href="carro.php"><i class="fas fa-shopping-basket"></i>  Carrito</a>
                    <a href="perfil.php"><i class="fas fa-user-circle"></i>  Perfil</a>';
                        if ($_SESSION['user']=='gutiuns'){
                            echo '<a href="admin.php"><i class="fas fa-hammer"></i>  Administrar</a>';
                        }
                        echo'
                </div>
        </div>
    </header>';
    
}

function compruebaLog(){
    if(!$_SESSION['user']){
        session_destroy();
        unset($_SESSION);
        header('location:index.php');
    }
}

function sacaZapas($bd){
    $sql= "select * from zapatillas";
    $sentencia=$bd->prepare($sql);
    $sentencia->execute();
    while($fila=$sentencia->fetch() ){
      echo '<tr class="zapatilla">
                <td class="datazap"><img class="imgzapa" src="resources/zapas/' .$fila['foto'] .'.jpg"/></td>
                <td class="datazap"><h2 class="nomzapa">' .$fila['nombre'] .'</h2></td>
                <td class="datazap"><p class="precio">' .$fila['precio'] .'$</p></td>
                <td class="datazap"><input type="checkbox" value="' .$fila['id'] .'" name="checkbox[]" id="' .$fila['nombre'] .'" class="chkz"></td>
                <td class="datazap"><label for="' .$fila['nombre'] .'" class="labeled" >Añadir al carrito</label></td>
            </tr>';
    }
}
?>