<?php session_start();
    foreach ($_POST as $i=>$c){
        $_SESSION[$i]=$c;   
    } 
    $_SESSION['errore']=0;
    $_SESSION['errorn']=0;
    if($_POST["nombre"]!="" && $_POST["edad"]>17){
        header("location:dentro.php");
    }else{
        if($_POST["nombre"]==""){
            $_SESSION['errorn']=1;
            header("location:index.php");
        }
        if($_POST["edad"]<17){
            $_SESSION['errore']=1;
            header("location:index.php");
        }
    }
?>
