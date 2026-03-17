<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/seguranca.php';
@include_once './model/login.php';
@include_once './model/aluno.php';
@include_once '../model/login.php';
@include_once '../model/aluno.php';
@include_once '../model/utilidades';

/**
 * Informações do formulário
 */
$nome = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nome'])) ? $_POST['nome'] : null;
$sexo = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sexo'])) ? $_POST['sexo'] : null;
$dataN = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['dataN'])) ? $_POST['dataN'] : null;
$matricula = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['matricula'])) ? $_POST['matricula'] : null;
$curso = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['curso'])) ? $_POST['curso'] : null;
$serie = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['serie'])) ? $_POST['serie'] : null;
$email = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['email'])) ? $_POST['email'] : null;
$telefone = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['telefone'])) ? $_POST['telefone'] : null;
$usuarioLogado = false;


// Informações estática da tela
$titulo = "Cadastro de Alunos";

// Criação de objetos
$alunoObj = new Aluno(null, null, null);
$usuarioLogado = Login::verificarAutenticacao('secretaria');

// Verificando se há post e enviando mensagem de alerta
if($_POST && $usuarioLogado){
    if($nome && $sexo && $dataN && $matricula && $curso && $serie && $email && $telefone){
        $msgAlert = "Aluno cadastrado com sucesso!";
        $dataN = $alunoObj->dataFormatada($dataN);
        $cadastro = Aluno::cadastrarAluno($matricula, $nome, $dataN, $sexo, $serie, $curso, $email, $telefone);
    }else{
        $msgAlert = "Termine de preencher todos os campos antes de enviar o formulário!";
    }
}

// Tela que vem do index via get
if(@$paginaUrl && $usuarioLogado){
    $exibirFormulario = true;

    @include_once './view/header.php';
    @include_once './view/cadastroAluno.php';
    @include_once './view/footer.php';
}else{
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=login-secretaria");
}