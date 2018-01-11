<?php
require_once '../dto/clienteDTO.php';
require_once '../dao/clienteDAO.php';

// recuperei os dados do formulario
$nome = $_POST["nome"];
$email = $_POST["email"];
$celular = $_POST["celular"];

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setEmail($email);
$clienteDTO->setCelular($celular);

$clienteDAO = new ClienteDAO();
$sucesso = $clienteDAO->salvarCliente($clienteDTO);

if ($sucesso){
   $msg = "Cadastrado com sucesso"; 
   echo "<script>";
   echo "window.location.href = '../view/formCadastrarCliente.php?msg={$msg}';";
   echo "</script> ";
}
?>
