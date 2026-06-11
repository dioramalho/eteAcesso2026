<?php
include_once __DIR__ . '/../../configuracao/conexao.php';

class Responsaveis
{
    //atributos
    public $nome;
    public $email;
    public $telefone;
    public $senha;

    //Construtor
    public function __construct($nome = null, $email = null, $telefone = null, $senha = null)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }

    // Lista todos os responsáveis
    public function listar()
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM responsavel ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lista responsáveis por aluno
    public function listarPorAluno($idAluno)
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM responsavel WHERE idAluno = :idAluno ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':idAluno', $idAluno, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Busca por id (chave primaria id)
    public function buscarPorId($id)
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM responsavel WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Insere novo responsavel
    public function inserir($dados)
    {
        $pdo = Database::conexao();
        $sql = "INSERT INTO responsavel (nome, email, telefone, senha, idAluno) VALUES (:nome, :email, :telefone, :senha, :idAluno)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':email', $dados['email']);
        $stmt->bindValue(':telefone', $dados['telefone']);
        $stmt->bindValue(':senha', $dados['senha']);
        $stmt->bindValue(':idAluno', isset($dados['idAluno']) ? $dados['idAluno'] : null, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Atualiza um responsavel por id
    public function atualizar($id, $dados)
    {
        $pdo = Database::conexao();
        $sql = "UPDATE responsavel SET nome = :nome, email = :email, telefone = :telefone";
        if (isset($dados['senha']) && $dados['senha'] !== '') {
            $sql .= ", senha = :senha";
        }
        $sql .= " WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $dados['nome']);
        $stmt->bindValue(':email', $dados['email']);
        $stmt->bindValue(':telefone', $dados['telefone']);
        if (isset($dados['senha']) && $dados['senha'] !== '') {
            $stmt->bindValue(':senha', $dados['senha']);
        }
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Remove um responsavel por id
    public function excluir($id)
    {
        $pdo = Database::conexao();
        $sql = "DELETE FROM responsavel WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

}
