<?php
require_once __DIR__ . '/../../configuracao/conexao.php';

class Responsaveis {

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $senha;
    public $idAluno;

    public function __construct($nome=null, $email=null, $telefone=null, $senha=null, $idAluno=null){
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
        $this->idAluno = $idAluno;
    }

    // CREATE
    public function cadastrar(){
        $pdo = Database::conexao();

        $sql = "INSERT INTO responsavel (nome, email, telefone, senha, idAluno)
                VALUES (:nome, :email, :telefone, :senha, :idAluno)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':idAluno', $this->idAluno);

        return $stmt->execute();
    }

    // READ
    public function listar(){
        $pdo = Database::conexao();
        return $pdo->query("SELECT * FROM responsavel")->fetchAll(PDO::FETCH_ASSOC);
    }

    // BUSCAR POR ID
    public function buscar($id){
        $pdo = Database::conexao();

        $sql = "SELECT * FROM responsavel WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function atualizar($id){
        $pdo = Database::conexao();

        $sql = "UPDATE responsavel 
                SET nome = :nome, email = :email, telefone = :telefone
                WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    // DELETE
    public function deletar($id){
        $pdo = Database::conexao();

        $sql = "DELETE FROM responsavel WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    // BUSCAR POR ID DO ALUNO
    public function buscarPorId($idAluno){
        $pdo = Database::conexao();

        $sql = "SELECT * FROM responsavel WHERE idAluno = :idAluno";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idAluno', $idAluno);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}