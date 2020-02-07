<?php session_start();
 require_once("libs/dat_bd.php");
 require_once("libs/lib_bd.php");
 require_once("libs/maneja_ciudades.php");
 conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
 if (isset($_POST['id'])){
    foreach ($_POST['id'] as $i=>$c){
        borra_ciudad($bd,$c);
        $_SESSION['case']=3;
        header("location:bien.php");
        }
}else{    
    $_SESSION['errorlevel']="2";
    header("location:formulario_borra.php");
}

?>