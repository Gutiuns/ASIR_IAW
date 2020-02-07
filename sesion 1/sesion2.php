<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es" style="background-color: #ddd">
<head>
	<title> sesion guillermo </title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<style>
        *{
            font-family:sans-serif;
        }
        img{
            display:block;
            margin:auto;
        }
		h2{
            text-transform: uppercase;
            text-align:center;
		}
		input[type=text], input[type=email]{
			display:block;
			width: 30%;
			padding: 8px 16px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 4px;
			border: 2px solid black;
			transition-duration: 300ms;
		}
		input[type=submit], input[type=reset]{
			border-radius:4px;
			background-color:  rgb(253, 143, 0);
			color:#fff;
		}
		input[type=submit]:focus, input[type=reset]:focus{
			background-color: rgb(179, 101, 0);
		}
		input[type=submit]:hover, input[type=reset]:hover, #archivo{
			cursor:pointer;
		}
		input[type=text]:hover,input[type=email]:hover {
			width: 70%;
			display:block;
			transition-duration: 300ms;
		}
		input[type=radio],input[type=checkbox]{
			cursor:pointer;
		}
		input[type=text]:focus,input[type=email]:focus {
			width: 70%;
		}
		input[type=number] {
			padding: 8px 16px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 4px;
			border: 2px solid black;
			display:block;
		}
		input [type=checkbox]{
			float:left;
			margin-right: 30px;
		}
		select{
			padding: 8px 16px;
			margin: 8px 0;
			box-sizing: border-box;
			border-radius: 4px;
			border: 2px solid black;
			font-size: 1em;
			display:block;
		}
		fieldset{
			box-sizing: border-box;
			border: 2px solid black;
			border-radius:15px;
		}
		input:focus{
			background-color: rgb(203, 223, 253);
		}
		.bot{
			cursor:pointer;
		}
		.inputfile {
			width: 0.1px;
			height: 0.1px;
			opacity: 0;
			overflow: hidden;
			position: absolute;
			z-index: -1;
		}
		#archivo{
			border-radius:4px;
			border:none;
			background-color:  rgb(253, 143, 0);
			color:#fff;
			padding:5px;
			font-weight:bold;
			font-size:1.5em;
			text-align:center;
			font-family:sans-serif;
        }
        #general{
            border:3px solid black;
            width:40%;
            padding:20px;
            margin:auto;
            background-color: rgb(255, 228, 74);
            border-radius:15px;
        }
        .boton{
            border:2px solid rgb(255, 228, 74);
            padding:10 5;
            font-weight:bold; 
            font-size:1.5em; 
            margin:5px;
        }
        .boton:hover{
            border:2px solid black;
        }
	</style>	
</head>
    <body>
        <div id="general">
            <?php
            $nom=$_SESSION["nombre"];
            $ape=$_SESSION["apellidos"];
            $ed=$_SESSION["edad"];
            $gen=$_POST["genero"];
            echo "<h2>hola</h2><h2> $nom $ape</h2>";
            if ($ed<46){
                    if($gen=="mujer"){
                        echo"<img src='mj.png' height='500px' width='500px'/>";
                    }else{
                        echo"<img src='hj.png' height='500px' width='500px'/>";
                    }    
            }else{
                if($gen=="hombre"){
                    echo"<img src='hv.png' height='500px' width='500px'/>";
                }else{
                    echo"<img src='mv.png' height='500px' width='500px'/>";
                }  
            }
            ?>
            <form action="sesion3.php" enctype="multipart/form-data" method="POST" autocomplete="off">
                <input type="submit" value="destruir sesion" class="boton" style="display:block; margin:auto; margin-top:20px;"/>
            </form>
        </div> 
    </body>
</html>