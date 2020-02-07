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
        <h2 class="margen-b titulo">Login</h2>
        <form action="login1.php" method="post" autocomplete="off">
            <div class="input-c">
                <label class="bloque linea-objeto">Usuario</label>
                <input required="required" type="text" placeholder="Introduce tu usuario" name="user" class="bloque margen-b rellena" />
            </div>
            <div class="input-c">
                <label class="bloque linea-objeto">Contraseña</label>
                <input required="required" type="password" placeholder="Introduce tu contraseña" name="pass" class="bloque margen-b rellena" />
            </div>
            <div class="input-c">
                <?php 
                if (isset($_SESSION['error'])){
                    echo "<p class='alert'>Su usuario o contraseña no son correctos.</p>" ;
                    echo "<p class='alert'>Por favor vuelva a intentarlo.</p>";
                }
                ?>
                <input type="submit" value="entrar" class="boton margen-a" />
            </div>
        </form>
    </div>
</body>

</html>