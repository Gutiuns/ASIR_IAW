<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" type="image/ico" href="resources\favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    require_once("libs/maneja_ciudades.php");
    tipo_letra();
    ?>
    <title>Error</title>
</head>

<body>
<div id="header">
<div id="title">
            <h1>Turismo</h1>
        </div>
    </div>
        <div class="error">
            <?php 
            if ($_SESSION['errorlevel']==1){
                echo "<p class='alert'>Ya existe una ciudad con el nombre '" .$_SESSION['nombre'] ."' </p>";
            } elseif($_SESSION['errorlevel']==2){
                echo "<p class='alert'>No ha seleccionado ciudades para borrar </p>";
            }
            ?>
                        <img src="resources\alert.png" class="imanimada"/></br>
                        <a href="cierra.php" class="home colormal">volver</a>
        </div>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei  &#169;</p></footer>
</body>

</html>