<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'/>
    <link rel='favicon' type='image/ico' link=''/>
    <title>Document</title>
</head>
<body style='background-color:#ffbd36; color:#212020; font-family:sans-serif; font-weight:700;'>
    <?php
        echo "<h1 style='margin:auto; text-align:center; text-transform:uppercase;'>Plantilla php</h1>";

        $p_1 = 'Aquí se pueden añadir comillas "dobles" <br/>';
        $p_2 = "Aquí se pueden añadir comillas 'simples' <br/>";
        $p_3 = "Esta cadena no da error por las comillas \"dobles\" <br/>";

        echo "<h2 style='text-align:center'> 'Hoy es " .date('l, j \d\e F \d\e o') ."'</h2> ";
        echo $p_1;
        echo $p_2;
        echo $p_3;

    ?>
</body>
</html>