<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" type="image/ico" href="resources\favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para borrar</title>
    <style>label{display: inline;}</style>
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
    <div id="content">
        <div id="formuario">
            
        <form action="maneja_borra.php" enctype="multipart/form-data" method="POST" class="rosso">
        <h2 class="margen-b">Borrar ciudad</h2>
        <?php 
        require_once("libs/dat_bd.php");
        require_once("libs/lib_bd.php");
        require_once("libs/maneja_ciudades.php");
        conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
        if (isset($_SESSION['errorlevel']) and ($_SESSION['errorlevel']==2)){
            echo "<p class='alert'>No ha seleccionado ninguna ciudad</p>";}
        formu_borra_ciudades($bd);
?> 
        </form>
    </div>
    </div>
    <a href="index.php" class="volver">inicio</a>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei  &#169;</p></footer>
</body>

</html>