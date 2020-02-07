<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guillermo</title>
</head>
<body>
    <?php 
    require_once ('clases/carta.php');
    require_once ('clases/baraja.php');
    $barajaEspañola=new Baraja;
    echo "<br/>";
    $carta1=$barajaEspañola->darCarta();
    $carta2=$barajaEspañola->darCarta();
    $carta3=$barajaEspañola->darCarta();
    $carta4=$barajaEspañola->darCarta();
    $carta5=$barajaEspañola->darCarta();
    echo "<br/>";
    echo $carta1->toString() ." y el valor es " .$carta1->getPuntos() ."<br/>";
    echo $carta2->toString() ." y el valor es " .$carta2->getPuntos() ."<br/>";
    echo $carta3->toString() ." y el valor es " .$carta3->getPuntos()."<br/>";
    echo $carta4->toString() ." y el valor es " .$carta4->getPuntos()."<br/>";
    echo $carta5->toString() ." y el valor es " .$carta5->getPuntos()."<br/>";
    echo "<br/>";
    $puntuacion=$carta1->getPuntos() + $carta3->getPuntos() + $carta4->getPuntos() + $carta5->getPuntos() + $carta2->getPuntos();
    echo "la puntuación total es: $puntuacion";
    echo "<br/>";
    if($puntuacion <= 7){
        echo "Has ganado!";
    }else{
        echo "Te has pasado!";
    }
    echo "<br/>";

    ?>
</body>
</html>