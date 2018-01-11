<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">      
    </head>
    <body>        
        <?php
            require_once "header.php";
            require_once '../dao/clienteDAO.php';

            $clienteDAO = new clienteDAO();
            $clientes = $clienteDAO->getAllCliente();
        
        

            echo "<table class='table table-hover' align='center'>";
            echo "<div class='col-sm-6'>
                    <div class='form-group h2'>
                        <input class='search form-control' type='text' placeholder='Pesquisar registro!'>
                    </div>
                </div>";
            echo "<br>";
            echo "<tr>";
            echo "  <th>Nome</th>";
            echo "  <th>Email</th>";
            echo "  <th>Celular</th>";
            echo "  <th>Excluir</th>";
            echo "  <th>Alterar</th>";
            echo "</tr>";


            foreach ($clientes as $c) {
                echo "<tr>";
                echo "  <td>{$c["nome"]}</td>";
                echo "  <td>{$c["email"]}</td>";
                echo "  <td>{$c["celular"]}</td>";
                echo "  <td><a class='btn btn-danger' href='../controller/excluirClienteByIdController.php?id={$c["id"]}'>Excluir</a></td>";
                echo "  <td><a class='btn btn-info' href='formAlterarCliente.php?id={$c["id"]}'>Alterar</a></td>";
                echo "</tr>";            
            }

            echo "</table>";
        ?>
            
    </body>
</html>
