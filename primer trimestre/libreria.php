<?php

function mostrar_resul ($n1,$n2,$n3){
    echo "<br/>la suma es: ". ($n1+$n2+$n3);
    echo "<br/>la multiplicación es: ". ($n1*$n2*$n3);

}

function medianaArray ($array){

    sort($array);
    $i=count($array);
    if($i%2!=0){
    $me=($array[$i+1])/2;
    }elseif($i%2==0){
      $me=(($array[$i/2]+$array[($i/2)+1])/2);
    }
    return $me;
}

function intercambia (&$a,$b){
    $c=$a;
    $a=$b;
    $b=$c;
}

function cuenta_provncias($array){
    $a=0;
    foreach ($array as $indice=>$contenido){
        $num=count($contenido);
        $a+=$num;
        echo "En $indice hay $num provincias. ";
    }
    echo "<p>En total hay $a provincias. <p/>";

}



function muestraarray($array){
    foreach($array as $i=>$c){
        if(is_array($array[$i])){
            echo"<p>el contenido del indice $i es:</p>";
            foreach($c as $in=>$co){
                
                echo"<p style='color:#F55; margin-left:70px'>el contenido de la posición $in es $co</p>";
            }
        } else {
            echo"<p>el contenido del indice $i es $c </p>";
        }      
    }
}

function multiplicaarray($array){
    $total=1;
    foreach($array as $numero){
        $total=$total*$numero;
    }
    return $total;
}

function factorial($a){
    for($i=$a-1;$i>0;$i--){
        $a*=$i;
    }
    return $a;
}

function fibonacci($n){
    $a=0;
    $b=1;
    do{
        echo "$a ";
        $c=$a;
        $a=$b;
        $b=$c+$a;
        $n--;
    }while($n>0);
}

function crea_regiones(){
    $regiones=array(
        "Andalucía" => array("Granada","Málaga","Córdoba","Sevilla","Almería","Huelva","Jaén","Cádiz",),
        "Extremadura" => array("Cáceres","Badajoz"),
        "Galicia" => array("Lugo","Orense","Pontevedra","La Coruña")
        
    );
    return $regiones;
}

//EJERCICIO BLACK JACK

    
function carta (){
    $baraja=array(2,3,4,5,6,7,8,9,10,"AS","J","Q","K");
    $card=$baraja[rand(0,12)];
    return ($card);
    }
    
function elige_num_jugadores(){
    $n=rand(2,5);
    return ($n);
}

function repatir_cartas($n){
    for ($i=0;$i<$n;$i++){
        $jugador[$i]=array(carta(),carta(),carta());
        echo "<p>el jugador $i tiene las siguientes cartas: </p>";
        foreach ($jugador[$i] as $numero){
            echo "$numero ";
        }
        echo "</br>";
    }
    return ($jugador);
}

function contar_puntos($jugador){
    echo "<h4>puntos:</h4>";
    foreach ($jugador as $indice=>$cartas){
        $n=0;
        foreach ($cartas as $card){
            switch ($card){
                case "J":
                    $n=$n+10;
                break;
                case "Q":
                    $n=$n+10;
                break;
                case "K":
                    $n=$n+10;
                break;
                case "AS":
                    $n=$n+11;
                break;
                default:
                    $n=$n+$card;
            }
        }
        $puntos[$indice]=$n;
        echo "</br>El jugador $indice ha sacado $n puntos. </br>";
    }
    return ($puntos);
}

function comparar_jugadores($puntos){
    asort($puntos);
    /*si le pongo por defecto una string 
    con letras al ganador el programa 
    falla si el ganador es el jugador 0.*/
    $ganador=777;
    $max=0;
    $t=0;
    foreach ($puntos as $quien => $total){
        if ($total < 22){
            if ($total==$max){
                $t++;
            }else{
                $t=0;
            }
            $ganador=$quien;
            $max=$total;
        }
    }
    echo "<h4>ganador:</h4>";
    if ($ganador==777){
        echo "nadie ha sacado 21 o menos";
    }elseif(0<$t){
        echo "ha habido un empate entre los jugadores (";
        foreach ($puntos as $i=>$c){
            if ($c==$max){
                echo " $i ";
            }
        }
        echo ") con una puntuación de $max.";
    }else{
        echo "el ganador es el jugador $ganador con un total de " .$puntos[$ganador] ." puntos.";
    }
}

function ordena_array($vectorA){
        $contador=0;
        $vectorB=$vectorA;
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
}    

//la funcion rand_array saca indices aleatorios de un array

?>