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
}

function pass_bien ($pas1,$pas2){
    if ($pas1 == $pas2){
        $igual=true;
    }else{
        $igual=false;
    }
    return($igual);
}

function header_($usuario,$ruta){
    echo '<header>
    <img src="resources/ashi_white.png" height="70px" class="headimg"/>                    
         <ul class="fixlist">
            <li class="fixit" ><a href="#" class="lista ';
            if ($ruta=="inicio.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-home"></i>  Inicio</a></li>
            <li class="fixit "><a href="#" class="lista ';
            if ($ruta=="catalogo.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-shopping-cart"></i>  Catálogo</a></li>
            <li class="fixit "><a href="#" class="lista ';
            if ($ruta=="carro.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-shopping-basket"></i>  Carrito</a></li>
            <li class="fixit "><a href="#" class="lista ';
            if ($ruta=="perfil.php"){
                echo "activo";
            } 
            echo '"><i class="fas fa-user-circle"></i>  Perfil</a></li>' ;
                if ($_SESSION['user']=='gutiuns'){
                    echo '<li class="fixit "><a href="#" class="lista ';
                    if ($ruta=="admin.php"){
                        echo "activo";
                    } 
                    echo '"><i class="fas fa-hammer"></i>  Administrar</a></li>';
                }
                if(!$_SESSION['user']){
                    header('location:index.php');
                }
        echo '</ul>
        <div class="dropdown">
            <button class="dropbtn"><i class="fas fa-bars"></i></button>
                <div class="dropdown-content">
                    <a href="#"><i class="fas fa-home"></i>  Inicio</a>
                    <a href="#"><i class="fas fa-shopping-cart"></i>  Catálogo</a>
                    <a href="#"><i class="fas fa-shopping-basket"></i>  Carrito</a>
                    <a href="#"><i class="fas fa-user-circle"></i>  Perfil</a>';
                        if ($_SESSION['user']=='gutiuns'){
                            echo '<a href="#"><i class="fas fa-hammer"></i>  Administrar</a>';
                        }
                        echo'
                </div>
        </div>
</header>';
}


?>