<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="shortcut icon" type="image/ico" href="resources\favicon.ico"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario para añadir</title>
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
            
        <form action="maneja_introduce.php" enctype="multipart/form-data" method="POST">
        <h2>Introducir ciudad</h2>
        <?php 
                if (isset($_SESSION['errorlevel']) and ($_SESSION['errorlevel']==1)){
                    echo "<p class='alert'>Ya existe una ciudad con el nombre '" .$_SESSION['nombre'] ."' </p>";
                }
            ?>
            <label for="neim" >Nombre </label> <input autocomplete="off" class="input" size="40" type="text" name="nombre" required id="neim" placeholder="Granada"/>
            <label for="hab"  >Habitantes </label> <input autocomplete="off" class="input"  size="40" type="number" name="habitantes"  id="hab" placeholder="999"/>
            <label for="pais"  >País </label> <input autocomplete="off" size="40" class="input"  type="text" name="pais"  id="pais" placeholder="España"/>
            <label for="monument" >Monumento </label> <input autocomplete="off" class="input"  size="40" type="text" name="monumento"  id="monument" placeholder="La Alhambra"/>
            <br/><input type="submit" value="Introducir" class="enviar azulo" />
            <input type="reset" value="Resetear" class="enviar azulo" />
            
        </form>
    </div>
    </div>
    <a href="index.php" class="volver">inicio</a>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei  &#169;</p></footer>
</body>

</html>