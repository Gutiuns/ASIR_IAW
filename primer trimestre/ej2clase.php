<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej2_guillermo</title>
</head>
<body>

    <?php

    echo "<h2>ej 1 y 2</h2>";

        echo"<hr/>";
        $n=1;
        for ($i=10;$i>=1;$i--){
            for ($j=1;$j<=$i;$j++){
                echo "$j ";
            }
            echo "<br/>";
        }
        echo"<hr/>";

        echo "<h2>ej 3 y 4</h2>";

        $name="ieszvergeles";
        $ma=strlen($name);
        echo "<table>";
        for ($i=1;$i<=$ma;$i++){
            echo "<tr>";
            for ($j=1;$j<=$ma;$j++){
               if ($i==$j){
                   $y=$i-1;
                   echo "<td>$name[$y]</td>";
               }else{
                   echo "<td>*</td>";
               }
            }
            echo "</tr>";
        }
        echo "</table>";
        //ejercicio 5 todo con bucles while
        /*
        
        ej 6 
        -----------------
        | a | b | c | d |
        -----------------
        | e | f | g | h |
        -----------------
        | i | j | k | l |
        -----------------
        
        
        
        */


    ?>

</body>
</html>