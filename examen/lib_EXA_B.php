<?php

//EJERCICIO 1

function crea_provisiones (&$array,$num){
    //creo un bucle que asigne $num veces valores
    echo "$num";
    for ($i=0;$i<$num;$i++){
        
        $indi=array_rand($array);
        //saco el contenido de un indice random del array introducido
        $cont=$array[$indi];

        //meto ese indice en el nuevo array y le asigno un valor
        $resultado[$cont]=rand(0,300);

        //borro del array introducido el bloque que acabo de introducir en el nuevo array para que no se repitan
        unset($array[$indi]);
    }
    //ahora piso el array que he metido con el array resultado
    $array=$resultado;
}

/*
//EJEERCICIO 2

function imprime_prov($array,$texto="edificio"){

    echo "<p>El $texto tiene:</p>";
    echo "<ul>";
    foreach ($array as $recurso => $cantidad){
        echo "<li> $cantidad de $recurso</li>";
    }
    echo "</ul>";
}

//EJERCICIO 3

function crea_ciudad (){   
    $productos = array ("Carne", "Lechuga", "Tomate", "Maiz", "Trigo", "Zanahorias", "Avena", "Patatas");
    $productos1=$productos;
    $productos2=$productos;
    crea_provisiones($productos,rand(1,8));
    crea_provisiones($productos1,rand(1,8));
    crea_provisiones($productos2,rand(1,8));

    //asigno los tres arrays creados anteriromente al array ciudad
    $ciudad=array(
        "Granero"=>$productos,
        "Establo"=>$productos1,
        "Edificio"=>$productos2,
    );
    return ($ciudad);
}

*/




?>