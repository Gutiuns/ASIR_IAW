<?php 
require_once('Coche.php');
$micoche= new Coche('Toyota','6517113X', 30,'diesel');
$micoche->sacaCoche();
echo "<br/>";
$micoche->arrancar();
echo "velocidad de arranque: ".$micoche->getVelocidad();
echo "<br/>";
for ($i=0 ;$i<=5; $i++){
    $micoche->acelerar();
}
echo "velocidad después de acelerar: ".$micoche->getVelocidad();
echo "<br/>";
$micoche->parar();
echo "velocidad después de parar: ".$micoche->getVelocidad();
echo "<br/>";
echo "Depósito: ".$micoche->getNivel_combus();
echo "<br/>";
$micoche->repostar();
echo "Depósito después de repostar: ".$micoche->getNivel_combus();
echo "<br/>";

?>