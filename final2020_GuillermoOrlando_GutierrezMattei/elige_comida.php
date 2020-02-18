<?php 
require_once('librerias/datos_bd.php');
require_once('librerias/maneja_bd.php');
session_start();
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
		    width: 35%;
		    border: 20px solid green;
		    padding: 15px;
		    margin: 25px auto;
		    text-align: center;
		}
		.titulos {background-color: #1103CA; color:white; text-align: center}
		.error {color: red; font-weight: bold; text-align: center}
		#azul {color: blue; font-weight: bold; }
		#num2 {text-align: center}


		h2 {margin: 0 10% 0 10%; text-transform: uppercase;}
		h1 {text-align: center;}
		th, td {
  			border: 3px solid blue;
  			border-collapse: collapse;
  			text-align: left
		}
		table {margin: 10% 25%; border-collapse: collapse; width: 55%}
	</style>


</head>


<body style="background-color: #FFE4B5">
	<br/><br/><br/><br/>
	<h1> EXAMEN FINAL CURSO 19-20. COMIDA A DOMICILIO</h1><br/>
	<br />
		
	<div id="azul">
		
	<?php
	$_SESSION['nombre']=$_POST['nombre'];
	$_SESSION['direccion']=$_POST['direccion'];
	$_SESSION['tipo']=$_POST['tipo'];
	// lo he puesto en mayusculas con la sentencia text-transform: uppercase; en los estilos del H2
	echo "<h2>COMIDA " .$_POST['tipo']."</h2>"
	?>
		
		
		<table>
		<form method="POST" action="muestra_total.php">
			<tr><th  id="num2" >COMIDA</th></tr>

	<?php
		conecta_bd($db,$serv,$baseD,$user,$key);
		muestra_comida($db,$_POST['tipo']);
		cierra_bd($db);
	?>
		<tr><td id="num2" colspan="2"><input type="submit" value="Continuar"/></td></tr>
		</form>
		</table>
	</div>
</body>
</html>
<!--  ESTE TROZO ES PARA QUE SI EL USUARIO LE DA AL BOTÓN DEL NAVEGADOR PARA VOlVER ATRÁS DESPUÉS DE LA 3ª PÁGINA  SE VAYA DIRECTAMENTE AL FORMULARIO PRINCIPAL -->
<?php 
if (isset($_SESSION['final'])){
	//esto quiere decir que si vuelve de la 3ª página se detecta y para evitar un error de codigo se redirige a la página principal, donde se destruye la sesion.
	header('location:final2020.php');
}
?>