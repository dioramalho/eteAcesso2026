<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';


/**
 * Informações estática da tela
 */
$titulo = "Monitor de acessos";
$msgAlert = !empty($_GET['msgAlert']) ? $_GET['msgAlert'] : null;

//Criação de objetos
$alunosObj = new Aluno(null, null, null);
$hoje = date('Y-m-d');
$listaAlunos = $alunosObj->listarPordata($hoje); 
if($listaAlunos){
    
    foreach ($listaAlunos as $aluno) {
        $data_acesso = new DateTime($aluno['acesso_data']);
        $aluno = $data_acesso->format('d/m/Y');
    }
    $totalAlunos = sizeof($listaAlunos);
}else{
    $totalAlunos = 0;
}

$usuarioLogado = Login::verificarAutenticacao('secretaria'); 

/**
 * Tela vem do index via get
 */

if(@$paginaUrl && $usuarioLogado){
    @include_once './view/header_coordenacao.php';
    @include_once './view/coordenacao.php';
    @include_once './view/footer.php'; 
}else{
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=secretaria");
}






