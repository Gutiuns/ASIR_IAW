<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Style.css" type="text/css" />
    <link rel="icon" href="resources/favicon.png" type="image/png" />
    <link href="resources/fontawesome-free-5.12.0-web/css/fontawesome.css" rel="stylesheet">
  <link href="resources/fontawesome-free-5.12.0-web/css/brands.css" rel="stylesheet">
  <link href="resources/fontawesome-free-5.12.0-web/css/solid.css" rel="stylesheet">
    <title>Ashi Shoes - Register</title>
</head>
    <body class="bodylog">                
            <div class="formulogn">
            <img src="resources/ashi_dark.png" height="100px" class="logimg"/>
            <?php
                echo "<p class='welcom'> Bienvenido a la familia Ashi, " .$_SESSION['user'] .".</p><a href='inicio.php' class='linklog'>acceder</a>";
                if(!$_SESSION['user']){
                    header('location:index.php');
                }
            ?>
            </div>
        <footer><p>Guillermo Orlando Gutiérrez Mattei</p></footer>
    </body>
</html>