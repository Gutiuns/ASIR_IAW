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
        form table, form select, form{
            margin:20px auto 0 auto;
        }
        table{
            
            border-collapse: collapse;
        }
        input[type="submit"]{
            display:block;
            margin: 10px auto 0 auto;
        }
    </style>
    
    <title>Ashi Shoes - Home</title>
</head>
    <body>                
                            <!--<?php /* 
                            echo "<form method='POST' action='manejaform.php'>";
                            echo "<table>";
                            imprime_zapatos($bd);*/
                            ?>
                            </table> 
                            <input type="submit" value="siguiente"/>
                            <h1>nueva cosa</h1>
   
                           </form> -->
                           <?php  
                            echo "<form method='POST' action='manejaform.php'>";
                                echo "<select multiple name='zap[]'>";
                                imprime_zapatos_lista($bd);
                                echo "</select>";
                            ?>
                            <input type="submit" value="siguiente"/>
                           </form>
                            
        <footer>
        </footer>
    </body>
</html>