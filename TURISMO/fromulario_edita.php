<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" type="image/ico" href="resources\favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para editar</title>
    <?php
    require_once("libs/maneja_ciudades.php");
    tipo_letra();
    ?>
    <style>
    label{
        display: inline;
    }
    </style>
</head>

<body>
<div id="header">
    <div id="title">
        <h1>Turismo</h1>
    </div>
    </div>
    <div id="content">
        <div id="formuario">
            
        <form action="maneja_edita.php" enctype="multipart/form-data" method="POST" class="verdo">
        <h2 class="margen-b">Editar ciudad</h2>
        <?php 
        require_once("libs/dat_bd.php");
        require_once("libs/lib_bd.php");
        require_once("libs/maneja_ciudades.php");
        conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);       
        if (isset($_SESSION['errorlevel']) and ($_SESSION['errorlevel']==3)){
            echo "<p class='alert'>Ya existe una ciudad con el nombre '" .$_SESSION['nombre'] ."' </p>";
        }
        formu_edita_ciudades($bd); 
?> 
        </form>
    </div>
    </div>
    <a href="index.php" class="volver">inicio</a>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei</p></footer>
</body>

</html>