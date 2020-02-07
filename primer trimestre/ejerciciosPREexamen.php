<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>idiomas_guillermo</title>
</head>
<body>

    <?php
    require_once("libreria.php");

    //EJERCICIO REGIONES

    $reg=crea_regiones();
    muestraarray($reg);
   
    cuenta_provncias($reg);

    //EJERCICIO BLACKJACK SIMPLE

    echo "<h2>Black Jack</h2>";

    function main (){
        $n=elige_num_jugadores();
        $cartas=repatir_cartas($n);
        $puntos=contar_puntos($cartas);
        comparar_jugadores($puntos);
    }

    main();
   

    ?>

</body>
</html>