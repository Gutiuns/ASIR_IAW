<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ec_guillermo</title>
</head>
<body>

    <?php

        echo "<h2>bucle while de 1 a 100</h2>";
        $i=1;
        while($i<=100){
            echo " $i";
            $i++;
            if ($i<=100){
                echo ",";
            }
        }
        echo "<hr/>";


        echo "<h2>bucle  dowhile de 100 a 0 numeros pares</h2>";
        $n=100;
        do{
            //compruebo si el numero es par y si lo es lo imprimo
            if($n % 2==0){
            echo " $n";
                if($n>0){
                    echo ",";
                }
            }
            $n--;
        }while($n>=0);
        echo "<hr/>";

        echo "<h2>bucle desde 11 hasta 0 impares.</h2>";
           $k=11;
            while($k>0){
                //compruebo si el numero es impar y si lo es lo imprimo
                if($k % 2 != 0){
                    echo " $k";
                    //saca comas en todos los numeros menos en el último
                    if($k>1){
                        echo ",";
                    }
                }
                $k--;
            }
            echo "<hr/>";

            // for(inicio;condicion;incremento){}
        echo "<h2>pares del 100 al 1 con for.</h2>";
                for($j=100;$j>1;$j--){
                    //compruebo si el numero es par y si lo es lo imprimo
                    if($j % 2==0){
                        echo " $j";
                        //saca comas en todos los numeros menos en el último
                            if($j>2){ 
                                echo ",";
                            }
                        }   
                }

        echo "<br/>";
        echo "<h2>empieza a oler a arrays</h2>"; 

            for ($i=0;$i<4;$i++){
                for ($j=0;$j<5;$j++){
                        echo "<p>$i, $j</p>";
                }
            }
    ?>
</body>
</html>