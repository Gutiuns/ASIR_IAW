<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Style.css" type="text/css" />
</head>

<body>
    <div id="caja">
        <?php 
        $usuario=$_SESSION['nombre'];
        echo"<h2 class='margen-b titulo'>Bienvenido $usuario</h2>";
        if ($_SESSION["sexo"]=="man"){
            echo"<label for='alarga'>Elija sus productos</label>
					<select id='alarga' name='alarga' size='4' multiple='multiple'>
					  <option value='windows' selected='selected'>Windows</option>
					  <option value='mac'>Mac</option>
					  <option value='linux'>Linux</option>
					  <option value='otro'>Otro</option>
					</select>";
        }
        ?>
        <form action="close.php" method="post" autocomplete="off">
            <input type="submit" value="cerrar sesión" class="boton margen-a" />
        </form>
        
    </div>
</body>

</html>