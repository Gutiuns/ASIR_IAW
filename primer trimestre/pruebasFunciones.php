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
        echo"<h2>recore arrays</h2>";
        $lista=array("lola"=>6,"pedro"=>range("a","j"),28=>"rut",30=>"Pedro", "sara"=>50);
        muestraarray($lista);


        echo"<h2>multiplica array</h2>";
        $mas=rand(2,6);
        for($i=0;$i<$mas;$i++){
            $arr[$i]=rand(-100,100);
        }
        
        $multi=multiplicaarray($arr);
        echo "<p>";
        foreach ($arr as $num){
            echo"$num ";
        }
        echo "</p>";
        echo"<p>el resultado de multiplicar todos los números del array es: $multi</p>";

        echo"<h2>factorial</h2>";

        $numero=rand(3,9);
        echo"el factorial de $numero es " .factorial($numero);

        echo"<h2>fibonacci</h2>";
        $j=rand(6,30);
        echo "<p>la sucesion de fibonacci con $j interacciones es: </p>";
        fibonacci($j);


        

        //recorrer array inverso
    ?>
</body>
</html>