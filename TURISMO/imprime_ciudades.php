 <?php session_start() ?>
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
    <title>muestra ciudades</title>

</head>

<body>
    <?php 
    require_once("libs/dat_bd.php");
    require_once("libs/lib_bd.php");
    require_once("libs/maneja_ciudades.php");
    conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
    ?>
    <div id="header">
    <div id="title">
            <h1>Turismo</h1>
        </div>
    </div>
    <div id="content">
        <div id="tabla">
        <table class="t-borde cuad">
            <tr><th>ID</th><th>nombre</th><th>habitantes</th><th>país</th><th>monumento</th><th>imagen</th></tr>
        <?php 
        imprime_ciudades($bd);
        ?>
        </table>
    </div>
    </div>
    <?php 
      cierra_bd($bd)
    ?>
    <a href="index.php" class="volver">inicio</a>
    <footer><p class="pie">Guillermo Orlando Gutiérrez Mattei  &#169;</p></footer>
</body>

</html>