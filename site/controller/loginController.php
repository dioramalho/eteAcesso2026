<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/seguranca.php';
@include_once '../model/login.php';
@include_once '../model/utilidades';

/**
 * Informações do formulário
 */
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$senha = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['senha'])) ? $_POST['senha'] : null;
$tipo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['tipo'])) ? $_POST['tipo'] : null;
$usuarioLogado = false;
$msgAlert = "";
$logout = (!empty($_GET['logout'])) ? $_GET['logout'] : null;

/**
 * Informações estática da tela
 */
$titulo = "Login Acesso";

/**
 * Verifica se há solicitação de logout
 */
if($logout) {
    if($_SESSION){
        session_destroy();
    }
    $exibirFormulario = true;
    @include_once './view/header.php';
    @include_once './view/loginSecretaria.php';
    @include_once './view/footer.php';
    exit();
}


//Validação de login e senha
if($email && $senha){
    @$paginaUrl = false;
    if($tipo === 'secretaria'){
        $usuarioLogado = Login::validarSenhaSecretaria($email,$senha);
    }
}

if($usuarioLogado){
    $_SESSION["usuario"]["email"] = $email;
    $_SESSION["usuario"]["logado"] = $usuarioLogado;
    $_SESSION["usuario"]["tipo"] = $tipo;
    $_SESSION['timestamp'] = time();
}

/**
 * Verifica se usuário já está autenticado
 */
$usuarioJaAutenticado = Login::verificarAutenticacao('secretaria');

/**
 * Se já está autenticado, redireciona para o dashboard
 */
if($usuarioJaAutenticado && !$usuarioLogado) {
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=dashboard");
    exit();
}

/**
 * Tela vem do index via get (logout)
 */
// Logout removido de aqui, agora é tratado acima com o parâmetro &logout=true

$retorno = Login::verificarAutenticacao($tipo);
if(!$retorno) {
    $msgAlert = $usuarioLogado ? 'Login ou senha incorretos, tente novamente' : '';
    $exibirFormulario = true;
    @include_once './view/header.php';
    @include_once './view/loginSecretaria.php';
    @include_once './view/footer.php';
}
    
if($retorno && $tipo === 'secretaria') header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=dashboard");
?>