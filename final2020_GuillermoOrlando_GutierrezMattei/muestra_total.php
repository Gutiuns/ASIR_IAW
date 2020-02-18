<?php 
require_once('librerias/datos_bd.php');
require_once('librerias/maneja_bd.php');
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN A </title>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico"  />
	<style type="text/css">
		
		h2 {margin: 0 10% 0 10%; text-align: center}
		h1 {text-align: center;}
		
		div {
		    width: 35%;
		    border: 2px solid green;
		    padding: 0px 50px;
		    margin: 25px auto;
		}
		.titulos {background-color: #1103CA; color:white; text-align: center}
		.error {color: red; font-weight: bold; text-align: center}
		#azul {color: blue; font-weight: bold; }
		p {text-align: center; color: fuchsia; font-weight: bold; font-size: 2em}
		.parrafo{
			font-size: 1em;
			color: black;
			text-align:left;
		}
	</style>
</head>


<body style="background-color: #E0F0EA">

<h2>
<?php
	echo "Nombre: " .$_SESSION['nombre'] ."</h2>";
	echo "<h2>Dirección: " .$_SESSION['direccion'];
?>
</h2>
<div>
<?php

if (isset($_SESSION['final'])){
//esto quiere decir que si se recarga la página se detecta y para evitar una nueva inserción de codigo se redirige a la página principal, donde se se destruye la sesion.
	//unset($_SESSION);
	//session_destroy();
	header('location:final2020.php');	
}else{
//si es la primera vez que se llega a esta pagina se hace esto
	conecta_bd($db,$serv,$baseD,$user,$key);
	//mira si se ha elegido algo y actua en función de eso
	if (isset($_POST['menu'])){
		echo "<h1>HAS ELEGIDO</h1>";
		inserta_factura($db,$_SESSION['nombre'], $_SESSION['direccion'],$_SESSION['tipo'], $_POST['menu']);
		//le voy a añadir el botón en la pantalla donde saca la elección porque me perturba tener una página sin boton de volver a inicio
		echo'<a href="final2020.php">VOLVER AL INICIO</a>';
	}else{
		echo "<h1>NO HAS ELEGIDO NADA</h1>";
		echo'<a href="final2020.php">VOLVER AL INICIO</a>';
	}
	//cierra la conexión a la base de datos. No destruyo la sesión porque el usuario triene 4 opciones:
		//si le da atrás llegará a elige_comida que tiene un detector para ver si vuelve de esta pagina
	cierra_bd($db);
	$_SESSION['final']=true;
	}
		
?>
</div>
</body>
</html>
