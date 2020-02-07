<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>OOP</title>
</head>

<body>
<?php 
require_once('objects\clases.php');
//creamos el objeto
$efren = new Person('efren','123456789x','C/ Mariposa');
echo $efren->toString() ;
echo "</br>";
$rut = new Person('rut','12349x','C/ Pergola');
echo $rut->toString() ;
// nueva persona

?>
</body>

</html>
