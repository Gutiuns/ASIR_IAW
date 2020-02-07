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
            $entero= 3;
            $real= 56.00;
            $cad= "hola";
            $cierto=true;
            $falso=false;
            $vacia=null;

            echo "<br/>la variable \$cad contiene: ";
            printf ($cad);
            echo " <br/> y es de tipo ";
            echo var_dump($cad);

            
            echo "<br/><br/>la variable \$entero contiene: ";
            printf ($entero);
            echo " <br/> y es de tipo ";
            echo var_dump($entero);

            
            echo "<br/><br/>la variable \$real contiene: ";
            printf ($real);
            echo " <br/> y es de tipo ";
            echo var_dump($real);

            
            echo "<br/><br/>la variable \$cierto contiene: ";
            printf ($cierto);
            echo " <br/> y es de tipo ";
            echo var_dump($cierto);

            echo "<br/><br/>la variable \$falso contiene: ";
            printf ($falso);
            echo " <br/> y es de tipo ";
            echo var_dump($falso);

            echo "<br/><br/>la variable \$vacia contiene: ";
            printf ($vacia);
            echo " <br/> y es de tipo ";
            echo var_dump($vacia);
    ?>
</body>
</html>