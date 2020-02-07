<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'/>
    <link rel='favicon' type='image/ico' link=''/>
    <title>Document</title>
</head>
<body style='background-color:#ffbd36; color:#212020; font-family:sans-serif; font-weight:700;'>
<?php

$nom=$_POST["nombre"];
$ap=$_POST["apellidos"];
$mail=$_POST["email"];
$edad=$_POST["edad"];
$est=$_POST["estado"];
$gen=$_POST["genero"];
$hijos=$_POST['hijos'];
$gustos=$_POST['gustos'];

echo "<p>el nombre es $nom $ap</p>";
echo "<p>el correo es $mail</p>";
echo "<p>tiene $edad años.</p>";
echo "<p>Es $gen $est</p>";
echo "<p>tiene $hijos hijos.</p>";
echo "<p>y le gusta ";
foreach ($gustos as $i=>$cosa){
    if((count($gustos)-1)>$i){
    echo " $cosa,";
    }else{
        echo " y $cosa.";  
    }
}
?>
</body>
</html>

