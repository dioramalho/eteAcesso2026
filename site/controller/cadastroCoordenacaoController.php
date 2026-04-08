<?php
session_start();
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/login.php';
@include_once '../model/coordenacao.php';
@include_once './view/topo_interno.php';

$usuarioLogado = Login::verificarAutenticacao('secretaria');

if (!$usuarioLogado) {
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=secretaria");
    exit;
}

$msgAlert = isset($_SESSION['cadastro_coordenacao_msg']) ? $_SESSION['cadastro_coordenacao_msg'] : null;
unset($_SESSION['cadastro_coordenacao_msg']);

$id = isset($_POST['id']) ? intval($_POST['id']) : null;
$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';
$permissao = isset($_POST['permissao']) ? trim($_POST['permissao']) : 'coordenador';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : null;

    if ($action === 'create') {
        if ($nome && $email && $senha) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $ok = Coordenacao::inserir($nome, $email, $senha);
                $msgAlert = $ok ? 'Usuário cadastrado com sucesso.' : 'Erro ao cadastrar usuário.';
            } else {
                $msgAlert = 'E-mail inválido.';
            }
        } else {
            $msgAlert = 'Preencha nome, e-mail e senha para cadastrar.';
        }
    }

    if ($action === 'update') {
        if ($id && $nome && $email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $ok = Coordenacao::atualizar($id, $nome, $email, $senha);
                $msgAlert = $ok ? 'Usuário atualizado com sucesso.' : 'Erro ao atualizar usuário.';
            } else {
                $msgAlert = 'E-mail inválido.';
            }
        } else {
            $msgAlert = 'ID, nome e e-mail são obrigatórios para atualização.';
        }
    }

    if ($action === 'delete') {
        if ($id) {
            $ok = Coordenacao::excluir($id);
            $msgAlert = $ok ? 'Usuário excluído com sucesso.' : 'Erro ao excluir usuário.';
        } else {
            $msgAlert = 'ID não informado para exclusão.';
        }
    }

    // Guarda mensagem para o redirect PRG
    $_SESSION['cadastro_coordenacao_msg'] = $msgAlert;
    header('Location:'.constant('URL_LOCAL_SITE')."?pagina=cadastro-coordenacao");
    exit;
}

$usuarios = Coordenacao::listar();

@include_once './view/header.php';
@include_once './view/cadastroCordenacao.php';
@include_once './view/footer.php';
@include_once  './view/rodape_interno.php';
