<?php
@include_once __DIR__ . '/../../configuracao/configuracao.php';
@include_once __DIR__ . '/../../configuracao/conexao.php';
@include_once __DIR__ . '/../model/aluno.php';
@include_once __DIR__ . '/../model/responsaveis.php';
@include_once __DIR__ . '/../model/login.php';
@include_once __DIR__ . '/../model/login.php';

/**
 * Identificação da pagina acessada via index
 */
$idAluno = true;
$limit = 20;
$msgAlert = "";
$exibir_paginacao = true;
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$msgAlert = ($method === 'GET' && !empty($_GET['msgAlert'])) ? $_GET['msgAlert'] : null;

if (@!$page) {
  $page = 1;
}

/**
 * Informações estática da tela
 */
$titulo = "Lista De Alunos";



//Criação de objetos
$alunoObj = new Aluno(null, null, null);
$responsavelObj = new Responsaveis();

function carregarResponsaveisPorAluno($alunos, $responsavelObj)
{
  $porAluno = [];
  if (is_array($alunos)) {
    foreach ($alunos as $aluno) {
      if (!empty($aluno['id'])) {
        $porAluno[$aluno['id']] = $responsavelObj->listarPorAluno($aluno['id']);
      }
    }
  }
  return $porAluno;
}

$usuarioLogado = Login::verificarAutenticacao('secretaria');

/**
 * Tela vem do index via get
 */

if (@$paginaUrl && $usuarioLogado) {
  $exibirFormulario = true;
  $alunoRetorno = $alunoObj->paginacao($idAluno);
  $listaAlunos = $alunoObj->ListaDeAluno();
  $responsaveisPorAluno = carregarResponsaveisPorAluno($alunoRetorno, $responsavelObj);
  @include_once __DIR__ . '/../view/header.php';
  @include_once __DIR__ . '/../view/listaDeAluno.php';
  @include_once __DIR__ . '/../view/footer.php';
}

if(@$paginaUrl && !$usuarioLogado) {
 header('LOCATION:' . constant('URL_LOCAL_SITE') . "?pagina=secretaria");
}


$target_dir = "upload/";
@$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $id = $alunoObj->buscarPorId($idAluno);
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target_file)) {
    $idAluno = isset($_POST['aluno_id']) ? $_POST['aluno_id'] : null;
    if ($idAluno !== null) {
      $imagens = Aluno::inserirImagem($target_file, $idAluno);

      if ($check !== false) {
        $exibirFormulario = true;
        $alunoRetorno = $alunoObj->ListaDeAluno($idAluno);
        $responsaveisPorAluno = carregarResponsaveisPorAluno($alunoRetorno, $responsavelObj);
        @$exibirFormulario = true;
        $msgAlert = ' Imagem inserida com sucesso ';
        @include_once __DIR__ . '/../view/header.php';
        @include_once __DIR__ . '/../view/listaDeAluno.php';
        @include_once __DIR__ . '/../view/footer.php';
        $uploadOk = 1;
      } else {
        $exibirFormulario = true;
        $alunoRetorno = $alunoObj->ListaDeAluno($idAluno);
        $responsaveisPorAluno = carregarResponsaveisPorAluno($alunoRetorno, $responsavelObj);
        @$exibirFormulario = true;
        $msgAlert = ' imagem não foi inserida ';
        @include_once __DIR__ . '/../view/header.php';
        @include_once __DIR__ . '/../view/listaDeAluno.php';
        @include_once __DIR__ . '/../view/footer.php';
        $uploadOk = 0;
      }
    } else {
      echo 'Id não encontrado';
    }
  } else {
    echo 'imagem não foi enviada';
  }
}

if (isset($_POST['termo'])) {
  $termo = $_POST['termo'];
  $exibir_paginacao = false;
  $resultado_pesquisa = $alunoObj->buscarPorTermo($termo);
  if (!empty($resultado_pesquisa)) {
    $listaAlunos = $resultado_pesquisa;
    $alunoRetorno = $resultado_pesquisa;
    $responsaveisPorAluno = carregarResponsaveisPorAluno($alunoRetorno, $responsavelObj);
    $exibirFormulario = true;
    @include_once __DIR__ . '/../view/header.php';
    @include_once __DIR__ . '/../view/listaDeAluno.php';


  } elseif (empty($resultado_pesquisa)) {
    $alunoRetorno = $alunoObj->paginacao($idAluno);
    $listaAlunos = $alunoObj->ListaDeAluno();
    $responsaveisPorAluno = carregarResponsaveisPorAluno($alunoRetorno, $responsavelObj);
    $exibirFormulario = true;
    $exibir_paginacao = true;
    $msgAlert = 'Aluno não encontrado!';
    @include_once __DIR__ . '/../view/header.php';
    @include_once __DIR__ . '/../view/listaDeAluno.php';
  }
}
// if($_POST){
//   var_dump($_POST);
//   $msgAlert ="sucesso";
//   $exibirFormulario = true;
//   $alunoRetorno = $alunoObj->buscarPorId($idAluno);
//   @include_once '../view/header.php';
//   @include_once '../view/footer-biometria.php'; 
// }else{
//   // $msgAlert ="";
//   $exibirFormulario = true;
//   $alunoRetorno = $alunoObj->buscarPorId($idAluno);
//   @include_once '../view/header.php';
//   @include_once '../view/footer-biometria.php'; 
// }