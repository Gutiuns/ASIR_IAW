<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frutas_guillermo</title>
</head>
<body>

    <?php
        $fruta="amarillo";

        Switch ($fruta){

            /* NO UTILIZAMOS OR COMO OPERADOR, ABRIMOS DIFERENTES
            CASOS CON UNA MISMA SALIDA */ 

            case "amarillo":
            case "blanco":
                echo "es una pera";
            break;

            case "rojo":
            case "verde":
                echo "es una manzana";
            break;

            case "morado":
                echo "es una mora";
            break;
            
            //SI LA ENTRADA NO COINCIDE CON NINGÚN CASO SACA ESTO

            default:
                echo "no tenemos fruta de ese color";
        }
    ?>
</body>
</html>