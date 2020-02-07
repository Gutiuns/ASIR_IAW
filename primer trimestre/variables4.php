<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>var4_guillermo</title>
</head>
<body>

    <?php
        echo "<h2> variables 4 </h2>";

        // PHP ADMITE UN NUMERO LIMITADO DE BITS

        $maximo=PHP_INT_MAX;
        echo "<p>El mayo entero que se puede guardar en una variable entera es $maximo</p><br/>";
        $demasiado = (int)(++$maximo);
        echo "<p>si se intenta guardar una más, el resultado es $demasiado</p><br/>";

        //PODEMOS ASIGNAR NUEVOS CARACTERES A UNA CADENA DE ESTA FORMA

        $saludo="hola mundo";
        echo "<p>$saludo</p>";

        $saludo[10]="s";
        echo "<p>$saludo</p>";

        //SI SE LE PONE UN NÚMERO MAYOR QUE LA CADENA SE RELLENA CON 1 ESPACIO

        $saludo[25]="!";
        echo "<p>$saludo</p>"; 

    ?>
</body>
</html>