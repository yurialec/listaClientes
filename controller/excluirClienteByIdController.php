<?php
require_once '../dao/clienteDAO.php';

$id = $_GET["id"];
//echo $idcliente;

$clienteDAO = new clienteDAO();
$clienteDAO->excluirCliente($id);

echo "<script>";
echo "window.location.href = '../view/listarAllCliente.php';";
echo "</script> ";
?>
