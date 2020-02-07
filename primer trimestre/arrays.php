<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej2_guillermo</title>
    <style>
    table{border-collapse:collapse;}
    td{border: 1px solid black; padding:5px; text-align:center;}
    </style>
</head>
<body>

    <?php
        $limite=100;
        //numeros con los numeros del 1 al 100

        for ($i=0;$i<$limite;$i++){
            $a[$i]=$i+1;
        }

        var_dump($a);

        echo "<h1>pares menores de 100</h1>";
        //pares menores 100
        $n=0;
        for ($i=0;$i<$limite;$i++){
            if($i%2!=0){
                $b[$n]=$i+1;
                $n++;
            }   
        }

        var_dump($b);

        //impares menores 100
        $m=0;
        echo "<h1>impares menores de 100</h1>";
        for ($i=0;$i<$limite;$i++){
            if($i%2==0){
                $c[$m]=$i+1;
                $m++;
            }       
        }
        print_r($c);
        echo "<h1>array de edades</h1>";
        $edades=array("lola"=>6,"pedro"=>19,28=>"rut",30=>"Pedro", "sara"=>50);
        echo "<table>";
        foreach ($edades as $in=>$con){
            echo "<tr>";
            echo "<td>$in</td>";
            echo "<td>$con</td>";
            echo "</tr>";
        }
        echo"</table>";

        echo "<br/>";
        echo "<table>";
        echo "<tr>";
        foreach ($edades as $caja){
            echo "<td>$caja</td>";
        }
        echo "</tr>";
        echo"</table>";

    ?>

</body>
</html>