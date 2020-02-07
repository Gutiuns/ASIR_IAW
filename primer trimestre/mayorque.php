<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comparar_guillermo</title>
</head>
<body>

    <?php

  //vamos a comparar dos números y sacar el mayor
        $n=7;
        $m=9;

        echo "<p> Entre $n y $m el mayor es: ";
        switch($n>$m){
            case true:
                echo " $n</p>";
            break;

            case false:
            echo " $m</p>";
            break;
        }
    ?>
</body>
</html>