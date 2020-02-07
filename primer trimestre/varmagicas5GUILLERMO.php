<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>variables mágicas guillermo</title>
</head>
<body>

    <?php
        /*Hacer un programa que se llame Varmagicas5.php 
        que muestre todas las constantes mágicas excepto la de CLASS y METHOD */
        echo "<h1>Variables mágicas</h1>";
        echo __LINE__ .", esta es la linea en al qeu está escrita esta orden.<br/>";
        echo __FILE__ .", esta es la ruta dle archivo. <br/>";
        echo __FUNCTION__.", esta es la función que contiene esta orden. La he puesto solo como ejemplo. <br/>";
        echo __DIR__ .", este es el directorio que contiene este archivo<br/>";
        echo __NAMESPACE__ .", esto es __NAMESPACE__ y no entiendo muy bien lo que es<br/>";
        echo __TRAIT__ .", esto es __TRAIT__ <br/>";
    ?>
</body>
</html>