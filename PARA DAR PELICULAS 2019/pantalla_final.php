<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<title> EXAMEN B </title>
	<meta charset="UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="Zowi Skull.ico"  />
	<link rel="stylesheet" href="estilos.css" />
	
</head>


<body class="final">


<?php 
	$actorr=$_SESSION['act'];
	$peli=$_SESSION['peli'];
	foreach ($_SESSION['cartelera'] as $I=>$C){
		if ($I==$actorr){
			$peliculabuena=$C;
		}
	}
	function acertada($actor, $pelicula, $peli){
		if($pelicula!==$peli){
			echo "<h1 class='mal final'> ¡OHHHHHHHHHH! LO SENTIMOS, HAS FALLADO</h1><br/><br/>";
			echo "<hr/><h2 class='final'>la pelicula donde actua '$actor' es '$pelicula'</h2>";
			ECHO "<div class='link'><a href='cerrar_sesion.php'>¡VOLVER A JUGAR!</a></div>";
		}else{
			echo "<h1 class='bien final'> ¡enhorabuena!</h1><br/><br/>";
			echo "<hr/><h2 class='final'>¡HAS ACERTADO LA PELÍCULA DEL ACTOR/ACTRIZ ELEGIDO/A!</h2>";
			echo "<h2 class='final'>la pelicula donde actua '$actor' es '$pelicula'</h2>";
			ECHO "<div class='link'><a href='cerrar_sesion.php'>¡VOLVER A JUGAR!</a></div>";
		}
	}

	acertada($actorr,$peliculabuena,$peli);
	
?>

</body>
</html>