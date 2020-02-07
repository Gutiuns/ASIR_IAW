
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
require_once("libs/maneja_ciudades.php");
conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
echo "prueba de inserción";
//inserta_ciudad($bd,8,"Valencia");
//inserta_ciudad($bd,7,"Gibraltar");
//borra_ciudad($bd,"Gibraltar");
//actualiza_ciudad($bd,7,"Barcelona");
cierra_bd($bd);
?>
</body>
</html>