<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fun2_guillermo</title>
</head>
<body>

    <?php

    //podemos usar un unset() para borrar uan variable
    //podemos ver si la variable está asignada con iset()

        $nombre="manolo";
        unset ($nombre);
        switch(isset($nombre)){

            case true:
            echo "el nombre es $nombre <br/>";
            break;

            case false:
            echo"no existe el nombre! <br/>";
            break;
        }

/*PODEMOS CONVERTIR UNA CADENA DE CARACTERES A INTEGER*/     

        $nom1="pepe";
        $conversion=settype($nom1, "integer");
        echo "hemos pasado $nom1 a integer y sale $conversion <br/>";

        $nom2="45JUAN";
        echo "hemos pasado $nom2";
        $conversion2=settype($nom2, "integer");
        echo " a integer y sale $conversion2 <br/>";

    ?>
</body>
</html>