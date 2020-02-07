<?php
session_start();

if (isset($_POST['peli'])){
    $_SESSION['peli']=$_POST['peli'];
    header("location:pantalla_final.php");
}else{
    header("location:nada.php");
}	
?>