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
        <h2 class="margen-b titulo">Login</h2>
        <form action="login1.php" method="post" autocomplete="off">
            <div class="input-c">
                <label class="bloque linea-objeto">Nombre</label>
                <input type="text" placeholder="Introduce tu nombre" name="nombre" class="bloque margen-b rellena" />
            </div>
            <div class="input-c">
                <label class="bloque linea-objeto">Edad</label>
                <input type="number" name="edad" class="bloque margen-b rellena-n" required="required" />
            </div>
            <div class="input-c">
                <label class="bloque linea-objeto">Sexo</label>
                <input type="radio" name="sexo" value="man" id="h" class=" margen-b"/><label for="h" class="enlinea">hombre</label>
                <input type="radio" name="sexo" value="woman" id="m" class="margen-b"/><label for="m" class="enlinea">mujer</label>
            </div>
            <div class="input-c">
                <?php 
                if ($_SESSION['errorn']==1){
                    echo "<p class='alert'>Introduzca su nombre.</p>" ;
                }
                if ($_SESSION['errore']==1){
                    echo "<p class='alert'>menor de edad.</p>" ;
                }
                ?>
                <input type="submit" value="entrar" class="boton margen-a" />
            </div>
        </form>
    </div>
</body>

</html>