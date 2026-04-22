<?php
@include_once '../configuracao/conexao.php';

class Coordenacao
{
    public static function listar()
    {
        $pdo = Database::conexao();
        $sql = "SELECT id, nome, email, senha FROM coordenacao ORDER BY id ASC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list ? $list : [];
    }

    public static function buscarPorId($id)
    {
        $pdo = Database::conexao();
        $sql = "SELECT id, nome, email, senha FROM coordenacao WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function inserir($nome, $email, $senha)
    {
        $pdo = Database::conexao();
        $sql = "INSERT INTO coordenacao (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        return $stmt->execute();
    }

    public static function atualizar($id, $nome, $email, $senha = null)
    {
        $pdo = Database::conexao();

        if ($senha !== null && trim($senha) !== '') {
            $sql = "UPDATE coordenacao SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':senha', $senha);
        } else {
            $sql = "UPDATE coordenacao SET nome = :nome, email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
        }

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);

        return $stmt->execute();
    }

    public static function excluir($id)
    {
        $pdo = Database::conexao();
        $sql = "DELETE FROM coordenacao WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
