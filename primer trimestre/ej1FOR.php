<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej1_guillermo</title>
    <style>
    td{border:2px solid black;padding:3px 5px;text-align:center;}
    table{border-collapse:collapse}  
    </style>
</head>
<body>

    <?php
    // de i= 2 0 y J = 3 1
        for ($i=2;$i>=0;$i--){
            for ($j=3;$j>=1;$j--){
                echo "$i, $j <br/>";
            }
        }

        echo"<hr/>";
    // de i=2 0 y j=0 3
        for ($i=2;$i>=0;$i--){
            for ($j=0;$j<=3;$j++){
                echo "$i, $j <br/>";
            }
        }
    
    //ahora el chungo, triangulo de 1 a 5
        echo"<hr/>";
        $n=1;
        for ($i=10;$i>=1;$i--){
            for ($j=1;$j<=$i;$j++){
                echo "$j ";
            }
            echo "<br/>";
        }

        echo "<hr/>\n";
        $n=1;
        echo "<table>\n";
            for($i=1;$i<4;$i++){
                echo"<tr>\n";
                    for ($j=1;$j<5;$j++){
                        //$n=rand(1,8);
                        $n=$i+$j;
                        echo "<td>$n</td>";
                    }
                echo"\n</tr>\n";
            }
        echo "</table>\n";

    ?>

</body>
</html>