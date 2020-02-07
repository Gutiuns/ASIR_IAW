

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>var4_guillermo</title>
</head>
<body>

    <?php
// 2 variable c y d con enteros
// variables booleanas a y b
// si a y b son true mostrar el resultado c*d 
// si las dos son false hacer c + d 
//a true b false c-d 
//si b false y b true d-c 

        echo "<h2> variables Booleanas en switch </h2>";
        $a=false;
        $b=false;

        $c=7;
        $d=4;

        //CORRECTO PERO NO OPTIMO

 /*           if ($a && $b){
                echo "el resultado de $c x $d es: " .($d * $c);
            } elseif (!$a && !$b){
                echo "el resultado de $c + $d es: " .($d + $c);
            } elseif ($a && !$b){
                echo "el resultado de $c - $d es: " .($c - $d);
            } else{
                echo "el resultado de $d - $c es: " .($d - $c);    
            }   
*/

            //CODIGO OPTIMO

            if ($a){
                if($b){
                    echo "el resultado de $c x $d es: " .($d * $c); 
                } else {
                    echo "el resultado de $c - $d es: " .($c - $d);
                }
            } else {
                if($b){
                    echo "el resultado de $d - $c es: " .($d - $c);
                } else {
                    echo "el resultado de $c + $d es: " .($d + $c);
                }
            }
    ?>
</body>
</html>