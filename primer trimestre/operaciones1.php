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
      $dia = "2";
      $tiempo = "soleado";
      $hora = "5";

      if ($dia==(1 or 3 or 5) and $tiempo == "soleado" ){
            $toca="true";
            echo "hoy podemos ir al parque! <br/>";
      }
      else {
          $toca=false;
          echo "hoy no toca ir al parque :( <br/>";
      }

      $queda =($toca==true & $hora>=7)? 7 - $hora:false;


    ?>
</body>
</html> 