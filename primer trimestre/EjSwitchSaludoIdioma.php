<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>idiomas_guillermo</title>
</head>
<body>

    <?php


        echo "<h2>Saludos</h2>";
        $idioma="Inglés";
        Switch ($idioma){
            case "ingles":
            case "inglés":
                echo "Hello! How are you?<br/>";
            break;
            case "español":
                echo "Hola! ¿Cómo estás?<br/>";
            break;
            case "francés":
            case "frances":
                echo "Bonjour! Comment ça va?<br/>";
            break;
            case "alemán":
            case "aleman":
                echo "Hallo! wie geht es dir?<br/>";
            break;
            case "holandés":
            case "holandes":
                echo "hallo! hoe gaat het?<br/>";
            break;
            case "Noruego":
                echo "Hi! hvordan går det?<br/>";
            break;
            default:
                echo "te has equivocado <br/>";
            break;

        }
    ?>

</body>
</html>