<?php 
require_once('libs/dat_bd.php');
require_once('libs/lib_bd.php');
require_once('libs/lib_zapatos.php');
conecta_bd($bd,$servidor,$baseDatos,$usuario,$clave);
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
    <style>
        td{
            border:1px solid black;
            padding: 10px
        }
        table{
            margin:20px auto 0 auto;
            border-collapse: collapse;
        }
    </style>
    
    <title>Ashi Shoes - Home</title>
</head>
    <body>                
                            <?php 
                           if (isset($_POST)){
                               foreach ($_POST as $cont){ 
                                foreach ($cont as $c){
                                echo "<h1>Zapatilla</h1>";
                                sacazap($bd,$c);}
                                }
                                
                           }else{
                               echo "<h1>NO SE HA INTRODUCIDO NADA</h1>";
                           }
                            ?>
        <footer>
        </footer>
    </body>
</html>