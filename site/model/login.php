<?php
@include_once '../configuracao/conexao.php';
class Login {

public static function verificarAutenticacao($tipo){
    if(!$tipo) return false;
    if($tipo <> @$_SESSION["usuario"]["tipo"]) return false;
    if(!@$_SESSION["usuario"]["logado"]) return false;
    return true;
}

public static function validarSenhaSecretaria($email, $senha){
    $sql = "SELECT * FROM coordenacao WHERE email = :email and senha = :senha";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $result = $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return ($result)?$result:false;
}

public static function validarSenhaResponsavel($idAluno, $senha){
    
    $sql = "SELECT * FROM responsavel WHERE idAluno = :idAluno and senha = :senha";
    $pdo = Database::conexao();
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':idAluno', $idAluno);
    $stmt->bindValue(':senha', $senha);
    $result = $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return ($result)?$result:false;
}

//validarSenhaResponsavel

public static function validarSenhaResponsavel($idAluno, $senha) {
    $pdo = Database::conexao();

    $sql = "SELECT senha FROM responsavel WHERE idAluno = :idAluno LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idAluno', $idAluno);
    $stmt->execute();

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($dados && password_verify($senha, $dados['senha'])) {
        return true;
    }

    return false;
}

public static function automatcLogout(){
    if($_SESSION['timestamp'] && $_SESSION['usuario'])
    if(time() - $_SESSION['timestamp'] > 225) { 
        echo"<script>alert('15 Minutes over!');</script>";
        unset($_SESSION['usuario']);
    } else {
        $_SESSION['timestamp'] = time();
    }
}

    public static function consultaIdAluno($idAluno, $senha)
    {
        $sql = "SELECT * FROM `responsavel` WHERE `idAluno` = :idAluno AND `senha` = :senha";
        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':idAluno', $idAluno);
        $stmt->bindValue(':senha', $senha);
        $result = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>