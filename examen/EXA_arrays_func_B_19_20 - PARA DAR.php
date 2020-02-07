
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B </title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
		<link rel="shortcut icon" type="image/x-icon" href="../iconos/tucan.png" />
	<style type="text/css">
		.titulos {background-color: #9F43F5; color:white}
		p, h3, li {margin-left: 40%}
	</style>

</head>


<body style="background-color: #FFE4B5">
	<br><br><br><br>
	<h1 style="text-align: center"> EXAMEN 1ER TRIMESTRE B. CURSO 19-20</h1><br /><br />
	<?php		
	require_once("lib_EXA_B.php");
	// Creación de la función crea_provisiones PREGUNTA 1 -------------------------
	// Creación de la función imprime_prov PREGUNTA 2  -------------------------
	// Creación de la función crea_ciudad PREGUNTA 3  -------------------------
	// Programa PHP	
	$productos = array ("Carne", "Lechuga", "Tomate", "Maiz", "Trigo", "Zanahorias", "Avena", "Patatas");
	crea_provisiones($productos,rand(1,8));
	var_dump($productos);
	// Impresion pregunta4
	echo "<hr />\n <h2 class=\"titulos\"><center>IMPRESIÓN ciudad melsia</center></h2>\n <hr />";
	/*
	$melsia=crea_ciudad();
	foreach ($melsia as $edificio=>$recurso){
		imprime_prov($recurso,$edificio);
	}
	*/
	?>

</body>

</html> 
