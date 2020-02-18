<?php 
require_once('librerias/datos_bd.php');
require_once('librerias/maneja_bd.php');
//ESTO ESTÁ MAL:
session_start();
unset($_SESSION);
session_destroy();


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN A</title>
	<meta charset="UTF-8" />
	<!-- Ruta absoluta, icono dinámico -->
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico" />
	<style type="text/css">
		div {
		    width: 300px;
		    border: 20px solid green;
		    padding: 15px;
		    margin: 25px auto;
		}
		.titulos {background-color: #1103CA; color:white; text-align: center}
		.error {color: red; font-weight: bold; text-align: center}
		#azul {color: blue; font-weight: bold; }
		#num2 {text-align: center}

		p, h2 {margin: 0 10% 0 10%}
		h1 {text-align: center;}

		input, select{
			margin-bottom: 10px;
		}
	</style>


</head>


<body style="background-color: #FFE4B5">
	<br/><br/><br/><br/>
	<h1> EXAMEN FINAL CURSO 19-20. COMIDA A DOMICILIO</h1><br />
	<br />

	<!-- Aquí puedo poner slashes a titulos y azul y puntuar por ponerlos bien -->
	<hr /><h2 class="titulos">PIDE TU COMIDA PREFERIDA</h2> <hr />
	<div id="azul"><p>

	<form method="POST" action="elige_comida.php">

		<fieldset><legend>COMIDAS</legend>

		<label for="nom">Nombre:</label><br/>
		<input type="text" required name="nombre" id="nom" maxlength="30" autocomplete="off"/>
		<br/>
		<label for="dir">Dirección:</label><br/>
		<input type="text" required name="direccion" id="dir" maxlength="30" autocomplete="off"/><br/>
		<select name="tipo">
			<?php 
			conecta_bd($db,$serv,$baseD,$user,$key);
			muestra_tipos($db);
			cierra_bd($db);
			?>
		</select>
		</fieldset>
		<br /><br />
		<p id="num2"><input type="submit" value="Continuar" /></p>
	</form></p></div>


</body>

</html>
