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
        $otroarray = array (
            0 => "A",
            1 => "E",
            2 => array("D","C","B","R"),
            3 => 8
        );
        print_r($otroarray);
        foreach ($otroarray as $indice=>$valor){
            if (is_array($valor)){
                foreach($valor as $indi2=>$cont){
                    echo "<br/> la $cont está en al posición $indi2 de la posición $indice del primer array.";
                }
            }else{
                echo "<br/>la $valor está en la posicion $indice .";
            }
        }
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<br/>";
        echo "<br/>";
        echo "<h1>colores</h1>";



        //EJERCICIOS COLORES, COPIAYORDENA, 
        //ORDENA_MEDIANO (SACANDO INDICE MEDIANO, VALOR MEDIANO Y QUE NO SE REPITAN LOS NUMEROS,
        //poner a la izquierda los menores que el elemento del indice mediano y a la derecha os mayores)

        $colors=array(
            "warm" => array(
                    "red"=>"#f00",
                    "orange"=>"#f60",
                    "yellow"=>"#FF0"
                    ),
            "cold" => array(
                "blue"=>"#039",
                "green"=>"#060",
                "purple"=>"#609"
                )
            );
        echo "<table style='border-collapse:collapse'>";
                foreach($colors as $ind=>$tem){
                    if ($ind=="warm"){
                        $letra="black";
                    }else{
                        $letra="white";
                    }
                    if (is_array($tem)){
                    echo"<tr>";
                        foreach ($tem as $ind2=>$hex){
                            echo"<td style='color:$letra; padding:5px;border:2px solid black; background-color:$hex';> $hex </td>";
                        }
                    echo "</tr>";
                }
                }
        echo"</table>";
        echo "<br/>";
        echo "<br/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        echo "<br/>";
        echo "<br/>";

            echo "<h1>find'n'sort</h1>";
            $contador=0;
            $tamaño=25;
            for($i=0;$i<$tamaño;$i++){
                $vectorA[$i]=mt_rand(3,90);
                $vectorB[$i]=$vectorA[$i];
            }

            for($n=0;$n<sizeof($vectorA);$n++){
                
                for($i=0;$i<(sizeof($vectorA)-1);$i++){
                    if($vectorA[$i]>=$vectorA[$i+1]){
                        $c=$vectorA[$i+1];
                        $vectorA[$i+1]=$vectorA[$i];
                        $vectorA[$i]=$c;
                        $contador++;
                    }  
                }  
            }   
        echo "<br/>";
        echo "<h3> iteraciones: $contador</h3>";
        echo "<br/>";
        echo "<h3>A ordenar:</h3>";
        foreach($vectorB as $vecb){
            echo "$vecb ";
        }
        echo "<br/>";
        echo "<h3>ordenado:</h3>";
        echo "<br/>";
        foreach($vectorA as $veca){
            echo "$veca ";
        }

    ?>
</body>
</html>