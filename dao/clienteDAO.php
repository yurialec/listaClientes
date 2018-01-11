<?php

require_once 'conexao/conexao.php';

class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllCliente() {
        try {
            $sql = "SELECT * FROM clientes";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "INSERT INTO clientes (nome,email,celular) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getEmail());
            $stmt->bindValue(3, $clienteDTO->getCelular());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirCliente($id) {
        try {
            $sql = "DELETE FROM clientes 
                   WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getClienteById($id) {
        try {
            $sql = "SELECT * FROM clientes WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            $clientes = $stmt->fetch(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateClienteById(clienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE clientes SET nome=?,
                                       email=?,
                                       celular=? 
                    WHERE id= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getEmail());
            $stmt->bindValue(3, $clienteDTO->getCelular());
            $stmt->bindValue(4, $clienteDTO->getId());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>