
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bd_guillermo</title>
</head>
<body>
<?php 
require_once("libs/dat_bd.php");
require_once("libs/lib_bd.php");
conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);

    $valor="%a";
    $consulta="Select nombre, ingresos, numPed 
                from clientes 
                where nombre like :letra";
    $resultado=$bd->prepare($consulta);
    $resultado->bindValue("letra",$valor);
    $resultado->execute();
    echo "</br>";
 
    while( $fila=$resultado->fetch() ){
        echo "<p>$fila[nombre]  ha gastado $fila[ingresos]€ en $fila[numPed] pedidos</p>";
    }
    $resultado->closeCursor();
    cierra_bd($bd);
?>
</body>
</html>