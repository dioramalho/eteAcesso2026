<?php
require_once __DIR__ . '/../model/Responsaveis.php';
require_once __DIR__ . '/../../configuracao/configuracao.php';

$responsavel = new Responsaveis();

$acao = $_POST['acao'] ?? $_GET['acao'] ?? null;

// CADASTRAR
if ($acao === 'cadastrar') {
    $responsavel->nome = $_POST['nome'];
    $responsavel->email = $_POST['email'];
    $responsavel->telefone = $_POST['telefone'];
    $responsavel->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $responsavel->idAluno = $_POST['idAluno'];

    $responsavel->cadastrar();

    header("Location: " . URL_LOCAL_SITE . "?pagina=responsavel-lista");
    exit;
}

// EDITAR
if ($acao === 'editar') {
    $responsavel->nome = $_POST['nome'];
    $responsavel->email = $_POST['email'];
    $responsavel->telefone = $_POST['telefone'];

    $responsavel->atualizar($_POST['id']);

    header("Location: " . URL_LOCAL_SITE . "?pagina=responsavel-lista");
    exit;
}

// EXCLUIR
if ($acao === 'excluir') {
    $responsavel->deletar($_GET['id']);

    header("Location: " . URL_LOCAL_SITE . "?pagina=responsavel-lista");
    exit;
}