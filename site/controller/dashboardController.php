<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/login.php';
@include_once './view/topo_interno.php';

/**
 * Informações estática da tela
 */
$titulo = "Dashboard";

/**
 * Verificação de autenticação do usuário
 * O usuário DEVE estar logado para acessar o dashboard
 */
$usuarioLogado = Login::verificarAutenticacao('secretaria');

/**
 * Tela vem do index via get
 * Se estiver logado, exibe o dashboard
 * Se não estiver logado, redireciona para o login
 */
if (@$paginaUrl && $usuarioLogado) {
    @include_once './view/header_coordenacao.php';
    @include_once './view/dashboard.php';
    @include_once './view/footer.php';
} else {
    // Redireciona para a página de login se não estiver autenticado
    header('LOCATION: ' . constant('URL_LOCAL_SITE') . "?pagina=secretaria");
}
?>
