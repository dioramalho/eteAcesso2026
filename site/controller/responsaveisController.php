<?php
require_once __DIR__ . '/../model/Responsaveis.php';
require_once __DIR__ . '/../../configuracao/configuracao.php';

$responsavel = new Responsaveis();

$acao = $_POST['acao'] ?? $_GET['acao'] ?? null;

// CADASTRAR
if ($acao === 'cadastrar') {
    $responsavel->cadastrar($_POST);
}

// EDITAR
elseif ($acao === 'editar') {
    $responsavel->atualizar($_POST);
}

// EXCLUIR
elseif ($acao === 'excluir') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $responsavel->deletar($id);
    }
}

// REDIRECIONA
header("Location: " . URL_LOCAL_SITE . "?pagina=responsavel-lista");
exit;