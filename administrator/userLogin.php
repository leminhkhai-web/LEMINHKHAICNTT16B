<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./js_LMK/jquery-3.6.4.min.js"></script>
        <link rel="stylesheet" href="../administrator/stylescss_LMK/mycss.css">
        <title>Login Website</title>
    </head>
    <body>
        <div id="loginBody">
            <div class="head">
                <h1>Đăng nhập</h1>
            </div>
            
            <form name="frmLogin" method="post" action="../administrator/elements_LMK/mUser/userAct.php?reqact=checklogin">
                
                <table>
                    <tr>
                        <td><input type="text" name="username" placeholder="username" class="username"></td></tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="password" class="username"></td></tr>
                    <tr>
                        <td><input type="submit" value="Đăng nhập" class="input"></td></tr>
                </table>
            </form>
        
        </div>
    </body>
</html>