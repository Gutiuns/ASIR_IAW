<?php session_start();
session_destroy();
unset($_SESSION);?>
<!DOCTYPE html>
<html lang="es">

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
    <title>Turismo</title>
</head>

<body>
    <div id="header">
        <div id="title">
            <h1>Turismo</h1>
        </div>
    </div>
    <div id="content">
        <div id="tabla">
        <table class="tab margen-b">
            <tr>
                <td><a href="formulario_introduce.php" class="but blue">Insertar ciudad</a></td>
                <td><a href="formulario_borra.php" class="but red">Borrar ciudad</a></td>
                <td><a href="fromulario_edita.php" class="but green">Actualizar ciudad</a></td>
                <td><a href="imprime_ciudades.php" class="but orange">Ver ciudades</a></td>
            </tr>
        </table>
    </div>
    <table>
        <tr>
            <td></td>
            <td><img src="resources\van-gogh.jpg" width="696" height="430" class="vangog"/></td>
            <td></td>
        </tr>
    </table>
    </div>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei &#169;
</p></footer>
</body>

</html>