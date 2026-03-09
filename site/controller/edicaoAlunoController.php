<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/biometria.php';
@include_once '../model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';
@include_once '../model/utilidades';

/**
 * Informações do formulário
 */
$idAluno = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['IdAluno'])) ? $_GET['IdAluno'] : null;
$liberarCampos = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['liberar'])) ? $_GET['liberar'] : null;
$idPost = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['IdPost'])) ? $_POST['IdPost'] : null;
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? strtoupper($_POST['nome']) : null;
$sexo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sexo'])) ? $_POST['sexo'] : null;
$dataN = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['dataN'])) ? $_POST['dataN'] : null;
$matricula = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['matricula'])) ? $_POST['matricula'] : null;
$curso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['curso'])) ? $_POST['curso'] : null;
$serie = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['serie'])) ? $_POST['serie'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$usuarioLogado = false;

// Criação de objetos
$usuarioLogado = Login::verificarAutenticacao('secretaria');
$alunoObj = new aluno(null, null, null);
if($idAluno){
    $alunoRetorno = $alunoObj->buscarPorId($idAluno);
}elseif($idPost){
    $alunoRetorno = $alunoObj->buscarPorId($idPost);
}

// Tela que vem do index via get
if(@$paginaUrl == 'edicao-aluno' && $usuarioLogado && $alunoRetorno && !$_POST){
    // Informações estática da tela
    $titulo = "Editar Aluno " . "<br>" . $alunoRetorno[0]['Nome'];

    $exibirFormulario = true;
    @include_once './view/header.php';
    @include_once './view/formularioEdicaoAluno.php';
    @include_once './view/footer.php';
} elseif(!$_POST){
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=login-secretaria");
}

// Verificando informações do POST e chamando método para editar aluno
if ($nome && $sexo && $dataN && $matricula && $curso && $serie && $email && $telefone && $idPost){
    $dataN = $alunoObj->dataFormatada($dataN);
    Aluno::editarAlunoPorId($idPost, $matricula, $nome, $dataN, $sexo, $serie, $curso, $email, $telefone);
    header('Location:' . constant("URL_LOCAL_SITE") . "?pagina=lista-aluno&msgAlert=Aluno ".$nome." atualizado com sucesso!");
}
