<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>Login</title>
    </head>
    <body>
        <center>
        <div id="divlogin">
            <p id="logologin">
                <img src="" alt="Logo"/>
            </p>
            <form action="controller/loginController.php" method="post" id="formlogin">
                <table align="center">
                    <tr>
                        <td>Usuário:</td>
                        <td><input type="text" name="usuario"/ class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input type="password" name="senha" class="form-control"/></td>
                    </tr>                
                    <tr>                    
                        <td>&nbsp;</td>
                        <td>
                        <input type="submit" class="btn btn-success"></input>
                        <input type="reset" class="btn btn-info"></input>
                        </td>
                    </tr>                                                                
                </table>
            </form> 
        </div>
        </center>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo "<div id='errorlogin'>", $_GET["msg"], "</div>";
        }
        ?>
    </center>
    
</body>
</html>
