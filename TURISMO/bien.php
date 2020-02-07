<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" type="image/ico" href="resources\favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operación realizada</title>
    <?php
    require_once("libs/maneja_ciudades.php");
    tipo_letra();
    ?>
</head>

<body>
<div id="header">
<div id="title">
            <h1>Turismo</h1>
        </div>
    </div>
        <div class="bien">
            <?php 
            if ($_SESSION['case']==1){
                echo "<p class='cool'>La ciudad '" .$_SESSION['nombre'] ."' ha sido introducida correctamente </p>";
            } elseif ($_SESSION['case']==2){
                echo "<p class='cool'>La ciudad '" .$_SESSION['nombre'] ."' ha sido actualizada correctamente </p>";
            }   elseif ($_SESSION['case']==3){
                echo "<p class='cool'>Se han eliminado las ciudades seleccionadas</p>";
            }
            ?>
                        <img src="resources\check.png" class="imgbien"/></br>
                        <a href="cierra.php" class="home colorbien">volver</a>
        </div>
    
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei  &#169;</p></footer>
</body>

</html>