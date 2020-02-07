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
        $dia=14;

        echo "<h2>¿es la primera semana del mes?</h2>";

        Switch ($dia<7){



            case true:
                echo "es la primera semana del mes<br/>";
            break;
            case false:
                echo "no es la primera semana del mes<br/>";
                break;

        }

        //ej dia de la semana
        $day=14;

        echo "<h2>¿Qué día de la semana es? Con switch</h2>";

        Switch ($day){

            case 1:
                echo "Lunes<br/>";
            break;
            case 2:
                echo "Martes<br/>";
            break;
            case 3:
                echo "Miercoles<br/>";
            break;
            case 4:
                echo "Jueves<br/>";
            break;
            case 5:
                echo "Viernes<br/>";
            case 6:
                echo "sabado<br/>";
            break;
            case 7:
                echo "domingo<br/>";
            break;
            default:
                echo "te has equivocado <br/>";
            break;

        }

        echo "<h2>¿qué día de la semana es? con if</h2>";

        $d=5;
        if ($d==1){
            echo "lunes<br/>";
        } elseif ($d==2){
            echo "martes<br/>";
        }   elseif ($d==3){
            echo "miercoles<br/>";
        }   elseif ($d==4){
            echo "jueves<br/>";
        }   elseif ($d==5){
            echo "viernes<br/>";
        } elseif ($d==6){
            echo "sabado<br/>";
        } elseif ($d==7){
            echo "domingo<br/>";
        } else {
            echo "error<br/>";
        }
    ?>

</body>
</html>