<?php

require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$id = $_POST["id"];

$clienteDTO = new clienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setEmail($email);
$clienteDTO->setCelular($celular);
$clienteDTO->setId($id);

$clienteDAO = new clienteDAO();
$clienteDAO->updateClienteById($clienteDTO);


    echo "<script>";
    echo "window.location.href = '../view/listarAllCliente.php';";
    echo "</script> ";


?>
