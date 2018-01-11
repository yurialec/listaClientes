<html>
        <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="jquery-2.0.2.min.js"></script>
        <script type="text/javascript" src="jquery.hideseek.min.js"></script>
        </head>
            
        <body>
        <?php
        session_start();
        include 'validaLogin.php';

        if (isset($_SESSION["usuario"])) {
            echo "Usuário logado: ", $_SESSION["usuario"];
            echo "<br>";
            echo "Perfil: ", $_SESSION["perfil"];
        }

        echo"<br>";
        
        ?>

        <a href="principal.php">Página Principal</a><br>
        <a href="listarAllCliente.php">Listar clientes cadastrados</a><br>
        <a href="formCadastrarCliente.php">Cadastrar clientes</a><br>
        <a href="../controller/logoffController.php">sair</a><br><br>
        </body>
</html>
