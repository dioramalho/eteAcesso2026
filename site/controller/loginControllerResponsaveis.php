<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/login.php'; // Funções de login

// Pegando dados do POST
$idAlunoForm = !empty($_POST['idAluno']) ? $_POST['idAluno'] : null;
$senha = !empty($_POST['senha']) ? $_POST['senha'] : null;
$tipo = !empty($_POST['tipo']) ? $_POST['tipo'] : null;

$usuarioLogado = false;
$msgAlert = "";

$titulo = "Login Acesso - Responsáveis";

// Validação
if ($idAlunoForm && $senha && $tipo === 'login-responsavel') {
    $usuarioLogado = Login::validarSenhaResponsavel($idAlunoForm, $senha);
    if (!$usuarioLogado) {
        $msgAlert = 'Login ou senha incorretos, tente novamente';
    }
}

// Se login válido, criar sessão
if ($usuarioLogado) {
    $_SESSION["usuario"]["idAluno"] = $idAlunoForm;
    $_SESSION["usuario"]["logado"] = true;
    $_SESSION["usuario"]["tipo"] = $tipo;
    $_SESSION['timestamp'] = time();

    // Redireciona para página do responsável
    header('LOCATION:' . constant('URL_LOCAL_SITE') . "?pagina=responsavel&idAluno=$idAlunoForm");
    exit;
}

// Se não logado, exibe formulário novamente
$exibirFormulario = true;
@include_once './view/header.php';
@include_once './view/loginResponsavel.php';
@include_once './view/footer.php';