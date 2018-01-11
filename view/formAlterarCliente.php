<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <?php
    require_once '../dao/clienteDAO.php';
    require_once 'header.php';
    
    $id = $_GET["id"];
    $clienteDAO = new clienteDAO();
    $cliente = $clienteDAO->getClienteById($id);
   
    ?>
    <body>
        <form action="../controller/alterarClienteController.php" method="post">
            <input type="hidden" name="id" value="<?php echo $cliente["id"]?>"/>
            <table class="table table-hover" align="center">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" value="<?php echo $cliente["nome"] ?>" name="nome" size="50" class="form-control"/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" value="<?php echo $cliente["email"]?>" name="email" class="form-control"/></td>
                </tr>                
                <tr>
                    <td>Celular:</td>
                    <td><input type="text" value="<?php echo $cliente["celular"]?>" name="celular" class="form-control"/></td>
                </tr>                                
                                                                                         
                                                                
                <tr>                    
                    <td colspan="2">
                        <input type="submit" class='btn btn-info' value="Alterar" name="submit">
                    </td>
                </tr>                                                                
            </table>
        </form>       
    </body>
</html>
