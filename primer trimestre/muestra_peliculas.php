
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B</title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<link rel="stylesheet" href="estilos.css" />
</head>


<body>
	<br><br><br><br>
	<h1>ABD</h1><br />
	<br />

<?php

$cartelera=array(
	"luis" => "",
	"efren" => "",
	"david" => "",
	"buck" => "",
	"juanda" => "",
	"manu" => "",
	"gorje" => "",
	"guti" => "",
	"pepe" => "",
);
foreach ($cartelera as $i=>$c){
	echo "la nota de $i es " .rand(6,9) ;
	echo "<br/>";
}
?>	



</body>

</html> 
