<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css" type="text/css" />
</head>

<body>
    <div id="caja">
        <?php 
        $usuario=$_SESSION['user'];
        echo"<h2 class='margen-b titulo'>Bienvenido $usuario</h2>"
        ?>
        <form action="close.php" method="post" autocomplete="off">
            <input type="submit" value="cerrar sesión" class="boton margen-a" />
        </form>
        
    </div>
</body>

</html>