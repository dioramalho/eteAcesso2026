<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/biometria.php';
@include_once '../model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';

$idAluno = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['idAluno'])) ? $_GET['idAluno'] : null;
$acao = ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['acao'])) ? $_GET['acao'] : null;

$msgAlert = "";

// Criação de objetos
$alunoObj = new aluno(null, null, null);
$usuarioLogado = Login::verificarAutenticacao('secretaria');
$aluno = $alunoObj->buscarPorId($idAluno);


// Tela de confirmação da ação de deletar aluno
if (@$idAluno && @$paginaUrl == 'deletar-aluno' && !$acao) { 
    ?>
    <script>
    setTimeout(confirmarDeletarAluno, 1000);
    function confirmarDeletarAluno() {
      let text = "Tem certeza que deseja DELETAR o aluno <?= $aluno[0]['Nome']?>?\n\nPressione OK para confirmar!";
    if (confirm(text) == true) {
    window.location.href = '<?=constant("URL_LOCAL_SITE")?>' + '?pagina=deletar-aluno&idAluno=<?= $aluno[0]['id'] ?>&acao=deletar'
    } else {
    window.location.href = '<?=constant("URL_LOCAL_SITE")?>' + '?pagina=lista-aluno&msgAlert=Ação de deletar aluno CANCELADA!'
    }
    }
    </script>
    <?php
}

// Validação do método de deletar aluno
if (@$idAluno && @$paginaUrl == 'deletar-aluno' && @$acao == 'deletar') {
    $retorno = Aluno::deletarAluno($idAluno);
    if (@$retorno) {
        $listaAlunos = $alunoObj->ListaDeAluno();
        @include_once './view/footer.php';
        header('Location:'.constant("URL_LOCAL_SITE").'?pagina=lista-aluno&msgAlert=Aluno(a) apagado com sucesso!' );
    } else {
        $listaAlunos = $alunoObj->ListaDeAluno();
        $msgAlert = 'Algo deu errado, aluno(a) não foi apagado!';
    }
}

@include_once '../view/header.php';
@include_once '../view/formularioCadastroAluno.php';
@include_once '../view/footer.php';