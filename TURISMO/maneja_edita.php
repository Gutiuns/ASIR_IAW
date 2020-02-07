<?php session_start();
 require_once("libs/dat_bd.php");
 require_once("libs/lib_bd.php");
 require_once("libs/maneja_ciudades.php");
 conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
 $igual=existe_nombre($bd,$_POST['nombre']);
 if ($igual){ 
     $id=id_libre($bd);
     actualiza_ciudad($bd,$_POST['id'],$_POST['nombre']);
     $_SESSION['case']=2;
     $_SESSION['nombre']=$_POST['nombre'];
     header("location:bien.php");
}   else {
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['errorlevel']="3";
    header("location:fromulario_edita.php");
}
?>