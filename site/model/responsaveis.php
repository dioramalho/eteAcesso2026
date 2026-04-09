<?php
require_once __DIR__ . '/../../configuracao/conexao.php';

class Responsaveis {

    // CREATE
    public function cadastrar($dados){
        $pdo = Database::conexao();

        $sql = "INSERT INTO responsavel 
                (nome, email, telefone, senha, idAluno)
                VALUES (:nome, :email, :telefone, :senha, :idAluno)";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nome' => $dados['nome'] ?? null,
            ':email' => $dados['email'] ?? null,
            ':telefone' => $dados['telefone'] ?? null,
            ':senha' => password_hash($dados['senha'], PASSWORD_DEFAULT),
            ':idAluno' => $dados['idAluno'] ?? null
        ]);
    }

    // UPDATE
    public function atualizar($dados){
        $pdo = Database::conexao();

        $sql = "UPDATE responsavel 
                SET nome = :nome, email = :email, telefone = :telefone
                WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            ':nome' => $dados['nome'] ?? null,
            ':email' => $dados['email'] ?? null,
            ':telefone' => $dados['telefone'] ?? null,
            ':id' => $dados['id']
        ]);
    }

    // DELETE
    public function deletar($id){
        $pdo = Database::conexao();

        $stmt = $pdo->prepare("DELETE FROM responsavel WHERE id = :id");

        return $stmt->execute([':id' => $id]);
    }

    // READ
    public function listar(){
        $pdo = Database::conexao();
        return $pdo->query("SELECT * FROM responsavel")
                   ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($id){
        $pdo = Database::conexao();

        $stmt = $pdo->prepare("SELECT * FROM responsavel WHERE id = :id");
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($idAluno){
        $pdo = Database::conexao();

        $stmt = $pdo->prepare("SELECT * FROM responsavel WHERE idAluno = :idAluno");
        $stmt->execute([':idAluno' => $idAluno]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}