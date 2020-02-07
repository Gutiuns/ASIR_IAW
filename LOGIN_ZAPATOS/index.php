<?php session_start();?>
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
    <title>Ashi Shoes - Log In</title>
</head>

<body class="bodylog">
            <?php 
                if (isset($_SESSION['error'])){
                    echo "<div class='nologin'>
                    <p class='alert'>Su usuario o contraseña no son correctos.</p> 
                    </div>";
                }
                session_destroy();
                unset($_SESSION);
            ?>                  
        <form action="src/maneja_login.php" method="post" autocomplete="off" class="formulogn">
        <img src="resources/ashi_dark.png" height="100px" class="logimg"/>
        <div class="box">
        <i class="fas fa-user"></i>
                    <input type="text" required name="user" placeholder="Usuario" class="datos"/>
                </div>
                <div class="box">
                    <i class="fas fa-lock"></i>
                    <input type="password" required name="pass" placeholder="Contraseña" class="datos"/>
                </div>
                <input type="submit" value="entrar" class="botonlog" /> 
                <div class="logeate"> <p class="cuenta">¿No tienes cuenta? Puedes registrarte </p><a href="register.php" class="cuenta"> aquí.</a></div>         
        </form>

       
    <footer><p>Guillermo Orlando Gutiérrez Mattei</p></footer>
</body>

</html>