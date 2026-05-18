<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';

/**
 * Informações estática da tela
 */
$titulo = "Acesso aluno ETE";
if($_SESSION ){
    $usuarioLogado = Login::verificarAutenticacao('secretaria');
}else{
    unset($_SESSION);
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=secretaria");
}
include_once './view/formularioCadastroAluno.php';
