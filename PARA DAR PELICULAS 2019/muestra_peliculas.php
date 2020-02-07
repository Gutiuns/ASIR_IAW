<?php
session_start();
?>

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
	<h1> EXAMEN 1ª Evaluación. PELICULAS FAMOSAS</h1><br />
	<br />

<?php

$_SESSION=$_POST;
$cartelera=array(
	"Brad Pitt" => "Seven",
	"Will Smith" => "Men in black",
	"Tom Cruise" => "Misión imposible",
	"Julia Roberts" => "Pretty woman",
	"Angelina Jolie" => "Tomb Raider",
	"George Clooney" => "Tres Reyes",
	"Jennifer Aniston" => "Exposados",
	"Bruce Willis" => "El sexto sentido",
	"Scarlett Johansson" => "Match Point",
	"Nicole Kidman" => "The others",
);
$_SESSION['cartelera']=$cartelera;
echo "<hr/><h2 clas='mayus'>ELIGE la pelicula de $_POST[act]</h2><hr/>";
?>	


	<div>

	<form method="POST" action="redirige.php">
		
		<input type='radio' name="peli" value="Tres Reyes"> Tres Reyes <br /><br />	
		<input type='radio' name="peli" value="The others"> The others <br /><br />
		<input type='radio' name="peli" value="El sexto sentido"> El sexto sentido <br /><br />
		<input type='radio' name="peli" value="Match Point"> Match Point <br /><br />
		<input type='radio' name="peli" value="Seven"> Seven <br /><br />
		<input type='radio' name="peli" value="Tomb Raider"> Tomb Raider <br /><br />
		<input type='radio' name="peli" value="Exposados"> Exposados <br /><br />
		<input type='radio' name="peli" value="Pretty woman"> Pretty woman <br /><br />
		<input type='radio' name="peli" value="Misión Imposible"> Misión Imposible <br /><br />
		<input type='radio' name="peli" value="Men in black"> Men in black <br /><br />	
		<input type='submit' value="¡JUGAR!" class="botones"/>
		<input type='reset'  value="resetear"class="botones"/>
		
	</form>
	</div>



</body>

</html> 
