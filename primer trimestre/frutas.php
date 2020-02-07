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
    //hacer esto con la estructura switch
        $color="azul";

        if(($color=="rojo") or ($color=="verde")){
            echo "Es una manzana";

        }
        elseif (($color=="amarillo") or ($color=="blanco")){
            echo "es una pera";
        }
        elseif($color=="morado"){
            echo "es una mora";
        }
        else{
            echo "no tenemos fruta de ese color";
        }
    ?>
</body>
</html>