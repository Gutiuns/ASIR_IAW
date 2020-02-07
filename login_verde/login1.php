<?php session_start();

    require_once('funciones_sesion.php');

    foreach ($_POST as $i=>$c){
        $_SESSION[$i]=$c;   
        } 

    if(($_SESSION['user']=="guillermo")&&($_SESSION['pass']==1234)){
        header("location:dentro.php");
    }else{
        $_SESSION['error']="yes";
        header("location:index.php");
    }

?>
