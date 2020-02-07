<?php session_start(); 
var_dump ($_SESSION)?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="icon" href="resources/favicon.png" type="image/png" />
    <link href="resources/fontawesome-free-5.12.0-web/css/fontawesome.css" rel="stylesheet">
  <link href="resources/fontawesome-free-5.12.0-web/css/brands.css" rel="stylesheet">
  <link href="resources/fontawesome-free-5.12.0-web/css/solid.css" rel="stylesheet">
    <title>Ashi Shoes - Register</title>
</head>

<body class="bodylog">
<?php 
                if (isset($_SESSION['passerror'])){
                    echo "<div class='nologin'>
                    <p class='alert'>Las contraseñas no coinciden.</p> 
                    </div>";
                    unset($_SESSION);
                }elseif(isset($_SESSION['regerror'])){
                    echo "<div class='nologin'>
                    <p class='alert'>El usuario introducido ya existe.</p> 
                    </div>";
                    unset($_SESSION);
                }
                
            ?>        
        <form action="src/maneja_register.php" method="POST" autocomplete="off" class="formulogn">
            <img src="resources/ashi_dark.png" height="100px" class="logimg"/>
            <p class="pform">Nombre</p><input required  autocomplete="off" type="text" name="nombre" id="name" class="inputblock"/>
            <p class="pform">Apellidos</p><input required  autocomplete="off" type="text" name="ape" id="surname" class="inputblock"/>
            <?php 
                $año=date("Y")-14;
                $fecha=date("$año-m-d");
                echo '<p class="pform">Fecha de nacimiento: </p><input type="date" required class="inputblock" name="nacimiento"  autocomplete="off" id="nacimiento" min="1900-01-01" max="'.$fecha.'"/>';
            ?>
            <p class="pform">Nombre de usuario</p><input  type="text" required autocomplete="off" name="user" id="user" class="inputblock"/>
            <p class="pform">Escriba su contraseña</p><input type="password"  required  autocomplete="off" name="pass1" id="pass1" pattern=".{8,}"  placeholder="8 caracteres mínimo" class="inputblock"/>
            <p class="pform">Repita su contraseña</p><input type="password"  required autocomplete="off" name="pass2" id="pass2" pattern=".{8,}" class="inputblock margbot"/>
            
            <input type="submit" value="guardar" class="botonlog" />
            <div class="logeate"> <p class="cuenta">¿Ya tienes cuenta? Inicia sesión </p><a href="index.php" class="cuenta"> aquí.</a></div>
            <p class="menores">Solo se admiten registros para mayores de 14 años. Para quejas contacte con Rut.</p>
        </form> 
    <footer><p>Guillermo Orlando Gutiérrez Mattei</p></footer>
</body>

</html>