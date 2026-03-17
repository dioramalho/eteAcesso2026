<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/seguranca.php';
@include_once '../model/login.php';
@include_once './model/login.php';
@include_once '../model/utilidades';
/**
 * Informações do formulário
 */
$idAlunoForm = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['idAluno'])) ? $_POST['idAluno'] : null;
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$tipo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['tipo'])) ? $_POST['tipo'] : null;
$usuarioLogado = false;
$msgAlert = "";

/**
 * Informações estática da tela
 */
$titulo = "Login Acesso - Responsáveis";

if ($idAlunoForm && $senha) {
    if ($tipo === 'login-responsavel') {
        $usuarioLogado = Login::validarSenhaResponsavel($idAluno, $senha);
        $msgAlert = !$usuarioLogado ? 'Login ou senha incorretos, tente novamente' : '';
    }
}

if ($usuarioLogado ) {
    $_SESSION["usuario"]["idAluno"] = $idAluno;
    $_SESSION["usuario"]["logado"] = $usuarioLogado;
    $_SESSION["usuario"]["tipo"] = $tipo;
    $_SESSION['timestamp'] = time();
    $retorno = Login::verificarAutenticacao($tipo);
    if(!$retorno){
         session_unset($_SESSION["usuario"]);
         session_destroy();
    }
    header('LOCATION:' . constant('URL_LOCAL_SITE') ."?pagina=responsavel&idAluno=$idAluno");
}

$exibirFormulario = true;
@include_once './view/header.php';
@include_once './view/loginResponsavel.php';
@include_once './view/footer.php';

