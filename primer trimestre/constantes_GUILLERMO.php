<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>constantes_guillermo</title>
</head>
<body>

    <?php

    echo "<h1>constantes guillermo</h1>";
    //Definimos primero las constantes
    define("EMPRESA","Zend.S.A.");
    define("Autor","Luis Miguel Cabezas Granado");
    define("cap_albania","Tirana");
    define("Te_agua","no nos dice a qué presión así que no podemos saber al temperatura de ebullición (revisar diagrama de fase del agua)");
    define("cap_macedonia","Skopje");
    define ("COLOR_ROJO","#F00");

    echo EMPRESA ;
    echo "<br/>";
    echo COLOR_ROJO; 
    echo "<br/>";
    echo Autor;
    echo "<br/>";
    echo cap_albania;
    echo "<br/>"; 
    echo Te_agua;
    echo "<br/>";
    echo cap_macedonia;
    echo "<br/>";
    //Existe otra función que nos permite averiguar el valor de la constante, la función constant
    echo constant ("COLOR_ROJO") ;
    ?>
</body>
</html>