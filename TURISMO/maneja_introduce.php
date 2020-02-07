<?php session_start();
 require_once("libs/dat_bd.php");
 require_once("libs/lib_bd.php");
 require_once("libs/maneja_ciudades.php");
 conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
 $igual=existe_nombre($bd,$_POST['nombre']);
 $id=id_libre($bd);
 if ($igual==true){    
    inserta_ciudad($bd,$id,$_POST['nombre'],$_POST['habitantes'],$_POST['pais'],$_POST['monumento']);
    $_SESSION['case']=1;
    $_SESSION['nombre']=$_POST['nombre'];
    header("location:bien.php");
  } elseif (!$igual) {
    $_SESSION['nombre']=$_POST['nombre'];
    $_SESSION['errorlevel']="1";
    header("location:formulario_introduce.php");
}
?>