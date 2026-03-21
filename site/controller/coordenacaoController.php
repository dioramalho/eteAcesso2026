<?php
@include_once '../../configuracao/configuracao.php';
@include_once '../../configuracao/conexao.php';
@include_once '../model/aluno.php';
@include_once './model/login.php';
@include_once '../model/login.php';

/**
 * Informações estáticas da tela
 */
$titulo = "Monitor de Acessos";
$msgAlert = !empty($_GET['msgAlert']) ? $_GET['msgAlert'] : null;

// Criação de objetos
$alunosObj = new Aluno(null, null, null);
$hoje = date('Y-m-d');
$listaAlunos = $alunosObj->listarPordata($hoje);

// 🔥 Cursos e logos (AGORA COM ADM)
$cursos = [
    'TDS' => 'logo-tds.png',
    'LOG' => 'logo-log.png',
    'ADM' => 'logo-adm.png'
];

// Turmas
$turmas = ['1 Ano A','2 Ano A','3 Ano A','1 Ano B','2 Ano B','3 Ano B'];

// Contadores dinâmicos
$contadores = [];
foreach ($cursos as $curso => $logo) {
    $contadores[$curso] = [];
}

if ($listaAlunos) {
    foreach ($listaAlunos as $aluno) {
        $curso = $aluno['Curso'];
        $serie = $aluno['Serie'];

        if (!isset($contadores[$curso][$serie])) {
            $contadores[$curso][$serie] = 0;
        }

        $contadores[$curso][$serie]++;
    }
    $totalAlunos = count($listaAlunos);
} else {
    $totalAlunos = 0;
}

// Verificação de autenticação
$usuarioLogado = Login::verificarAutenticacao('secretaria'); 

/**
 * Tela vem do index via get
 */
if(@$paginaUrl && $usuarioLogado){
    @include_once './view/header_coordenacao.php';
} else {
    header('LOCATION:'.constant('URL_LOCAL_SITE')."?pagina=login-secretaria");
    exit;
}
?>

<!-- Cabeçalho -->
<div class="container">
    <div class="row mb-3">
        <header>
            <img src="<?= constant("URL_LOCAL_IMG") ?>tela/ete_logo.png" alt="Logo da ETE" class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1"></div>
        <div class="bg-success p-1"></div>
        <div class="bg-danger p-1"></div>
    </div>

    <!-- Título -->
    <div class="row mb-4">
        <h1 class="text-center"><?= $titulo ?></h1>
    </div>

    <!-- Total -->
    <div class="row mb-4">
        <div class="col-sm-12 text-center">
            <div class="card shadow p-3">
                <h5>Total de Alunos</h5>
                <h1 class="display-4 text-primary"><?= $totalAlunos ?></h1>
            </div>
        </div>
    </div>

    <!-- 🔥 CARDS DINÂMICOS (TDS, LOG, ADM) -->
    <?php foreach($cursos as $curso => $logo): ?>
        <div class="row mb-4">
            <?php foreach($turmas as $turma): ?>

                <div class="col-sm-2 mb-3">
                        <div class="card shadow p-3 text-center">
                        <img src="<?= constant("URL_LOCAL_IMG") ?>tela/<?= $logo ?>" class="img-fluid mb-2">
                        <h5><?= $curso ?> - <?= $turma ?></h5>
                        <h2><?= $contadores[$curso][$turma] ?? 0 ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <!-- Botão -->
    <div class="row mb-3">
        <div class="col-sm-6">
            <button type="button" id="botaoTurma" class="btn btn-outline-primary btn-block">
                Mostrar lista
            </button>
        </div>
    </div>

    <!-- Lista -->
    <div class="row">
        <div class="col-sm-12" id="listaAlunos" style="display:none;">
            <h3>Lista de alunos</h3>
            <div class="table-responsive-sm">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Dia da Semana</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaAlunos as $aluno): ?>
                        <tr>
                            <td><?= $aluno['Matricula'] ?></td>
                            <td>
                                <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=historico&idAluno=<?= $aluno['id'] ?>">
                                    <?= $aluno['Nome'] ?>
                                </a>
                            </td>
                            <td><?= (new DateTime($aluno['acesso_data']))->format('d/m/Y') ?></td>
                            <td><?= $aluno['dia_semana'] ?></td>
                            <td><?= $aluno['acesso_hora'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="row mt-4">
        <footer>
            <p class="rounded float-right">
                <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" class="img-fluid">
            </p>
        </footer>
    </div>
</div>

<!-- JS -->
<script>
    const listaAlunos = document.getElementById("listaAlunos");
    const botaoTurma = document.getElementById("botaoTurma");

    botaoTurma.addEventListener("click", () => {
        listaAlunos.style.display = listaAlunos.style.display === "none" ? "block" : "none";
    });
</script>

<!-- CSS -->
<style>
.card {
    border-radius: 15px;
    transition: 0.3s ease;
}
.card:hover {
    transform: scale(1.05);
}
body {
    background: #f5f7fa;
}
</style>