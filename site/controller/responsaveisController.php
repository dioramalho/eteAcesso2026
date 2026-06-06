<?php
// Controller que atende tanto inclusão direta (ações do formulário) quanto inclusão via index.php (exibição de página)
require_once __DIR__ . '/../../configuracao/configuracao.php';
require_once __DIR__ . '/../../configuracao/conexao.php';
require_once __DIR__ . '/../model/responsaveis.php';
require_once __DIR__ . '/../model/aluno.php';

// Se existe uma ação (cadastrar/editar/excluir) tratamos como um endpoint de formulário
$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : null;
if ($acao) {
    $responsavelObj = new Responsaveis();

    if ($acao === 'cadastrar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $dados = [
            'nome' => $_POST['nome'] ?? null,
            'email' => $_POST['email'] ?? null,
            'telefone' => $_POST['telefone'] ?? null,
            'senha' => $_POST['senha'] ?? null,
            'idAluno' => isset($_POST['idAluno']) ? (int) $_POST['idAluno'] : null,
        ];
        $responsavelObj->inserir($dados);
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? constant('URL_LOCAL_SITE') . '?pagina=responsavel'));
        exit;
    }

    if ($acao === 'editar') {
        // editar pode vir via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
            $dados = [
                'nome' => $_POST['nome'] ?? null,
                'email' => $_POST['email'] ?? null,
                'telefone' => $_POST['telefone'] ?? null,
                'senha' => $_POST['senha'] ?? null,
            ];
            if ($id) {
                $responsavelObj->atualizar($id, $dados);
            }
        }
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? constant('URL_LOCAL_SITE') . '?pagina=responsavel'));
        exit;
    }

    if ($acao === 'excluir') {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        if ($id) {
            $responsavelObj->excluir($id);
        }
        header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? constant('URL_LOCAL_SITE') . '?pagina=responsavel'));
        exit;
    }

    // Se ação desconhecida, somente redireciona
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? constant('URL_LOCAL_SITE')));
    exit;
}

// Se não há ação, tratamos visualizações: cadastro ou painel do aluno
// Se a rota é a página de cadastro, exibe o formulário de cadastro
if (isset($_GET['pagina']) && $_GET['pagina'] === 'cadastro-responsavel') {
    include_once __DIR__ . '/../view/header.php';
    include_once __DIR__ . '/../view/cadastroResponsaveis.php';
    include_once __DIR__ . '/../view/footer.php';
    exit;
}

@$idAluno = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['idAluno'])) ? $_GET['idAluno'] : null;
if (!isset($_SESSION["usuario"]) || (!$_SESSION["usuario"]["idAluno"] == $idAluno && !$_SESSION["usuario"]["logado"] == true)) {
    header('LOCATION:' . constant('URL_LOCAL_SITE') . "?pagina=login-responsavel&idAluno=$idAluno");
    exit;
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
$imagemAluno = $infoAluno[0]['imagem'] ?? null;

if ($alunoRetorno) {
    $dataNasc = $alunoRetorno[0]['Data_Nasc'];
    $dataFormatada = $alunoObj->dataFormatada($dataNasc);
}

@include_once __DIR__ . '/../view/header.php';
@include_once __DIR__ . '/../view/painelAluno.php';
@include_once __DIR__ . '/../view/footer.php';
