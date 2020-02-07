<?php


//mediana de datos no agrupados es igual a la semisuma de los numeros centrales una vez han sido ordenados.
// para impares no agrupados es Me=x[n+1]/2

$impar=mtrand(1,30);
while ($impar%2==0){
    $impar=mtrand(1,30);
}

for($i=0;$i<$impar;$i++){
    $Arr[$i]=mtrand(1,88);
}

function medianaImpar ($a){
    $me=($a+1)/2;
    return $me;
}



?>