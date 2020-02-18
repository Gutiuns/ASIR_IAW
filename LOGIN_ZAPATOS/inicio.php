<?php 
require_once('libs/dat_bd.php');
require_once('libs/lib_bd.php');
require_once('libs/lib_zapatos.php');
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <link rel="icon" href="resources/favicon.png" type="image/png" />
    <link href="resources/fontawesome-free-5.12.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="resources/fontawesome-free-5.12.0-web/css/brands.css" rel="stylesheet">
    <link href="resources/fontawesome-free-5.12.0-web/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="Style.css" type="text/css" />
    
    <title>Ashi Shoes - Home</title>
</head>
    <body>                
                            <?php  
                            $ruta=basename(__FILE__);                        
                            ponHeader($ruta);
                            ?>
                            <div class="content">
                                <img src="resources/nike.jpg" width="90%" class="anuncio"/>
                            </div>
                            <a href="inicio.php"  class="home">Volver</a>
        <footer>
            <p>Guillermo Orlando Gutiérrez Mattei</p>
        </footer>
    </body>
</html>
<?php compruebaLog() ?>