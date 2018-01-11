<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <body>
        
        <td>
            <?php
                require_once"header.php";
            ?>    
        </td>
        
        
        <form action="../controller/cadastrarClienteController.php" method="post">
            <div class="" size="60">
            <table class="table table-hover" align="center">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" class="form-control" size="5"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" class="form-control" size="5"/></td>
                </tr>                
                <tr>
                    <td>Celular:</td>
                    <td><input type="text" name="celular" class="form-control" size="5"/></td>
                </tr>                                
                                                                
                <tr>                    
                    <td colspan="2">
                        <input type="submit" class="btn btn-success" value="Cadastrar"/>
                    </td>
                </tr>                                                                
            </table>
        </div>
                </form>
        
        <center>
            <?php 
                if (!empty($_GET["msg"])){
                    echo $_GET["msg"]; 
                }
            ?>
        </center>
        
        
    </body>
</html>