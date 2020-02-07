<!DOCTYPE html>
<html lang="en"/>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>var4_guillermo</title>
</head>
<body>

    <?php
    
        //para llamar a una libreria se pone require_once (nombre de la libreria)
        require_once("libreria.php");
        $h=8;$y=5;$r=23;
        print_r (mostrar_resul($h,$r,$y));

        echo "<h2>funcion de intercambio</h2>"; 
        echo "<br/>ahora \$h es $h \n"; 
        echo "<br/>y \$y es $y \n";
        echo "<br/>después de la función";
        intercambia($h,$y);
        echo "<br/>ahora \$h es $h \n"; 
        echo "<br/>y \$y es $y \n";
    ?>
</body>
</html>