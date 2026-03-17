<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/aluno.php';
@include_once './model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';
@include_once '../controller/loginControllerResponsaveis.php';

@$idAluno = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['idAluno'])) ? $_GET['idAluno'] : null;
if (!$_SESSION["usuario"]["idAluno"] == $idAluno && !$_SESSION["usuario"]["logado"] == true) {
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=login-responsavel&idAluno=$idAluno");
}

/**
 * Informações estática da tela
 */
$titulo = "Responsaveis - Histórico do aluno";

//Criação de objetos
$alunoObj = new Aluno(null, null, null);

$exibirFormulario = true;
$alunoRetorno = $alunoObj->listarPorFrequencia($idAluno);
$infoAluno = $alunoObj->listarAlunos($idAluno);
$imagemAluno = $infoAluno[0]['imagem'];

if($alunoRetorno) {
    $dataNasc = $alunoRetorno[0]['Data_Nasc'];
    $dataFormatada = $alunoObj->dataFormatada($dataNasc);
}
@include_once './view/header.php';
@include_once './view/painelAluno.php';
@include_once './view/footer.php'; 
