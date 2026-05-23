<div class="container">
    <div class="row">
        <header>
            <img src="<?= constant("URL_LOCAL_IMG") ?>tela/ete_logo.png" class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1"></div>
        <div class="bg-success p-1"></div>
        <div class="bg-danger p-1"></div>
    </div>

<?php
$cursos = ['ADM', 'TDS', 'LOG'];
$series = ['1 Ano A', '2 Ano A', '3 Ano A', '1 Ano B', '2 Ano B', '3 Ano B'];

$dados = [];
$totais = [];

foreach ($cursos as $curso) {
    foreach ($series as $serie) {
        $dados[$curso][$serie] = 0;
    }
    $totais[$curso] = 0;
}

foreach ($listaAlunos as $aluno) {
    $curso = $aluno['Curso'];
    $serie = $aluno['Serie'];

    if (isset($dados[$curso][$serie])) {
        $dados[$curso][$serie]++;
        $totais[$curso]++;
    }
}
?>

<section>
<div class="container mt-4 mb-4">
<div class="row text-center">

<h3>Total de Alunos</h3>
<h5>Em tempo real</h5>

<!-- ­ƒöÑ C├ìRCULO CORRIGIDO -->
<div class="col-sm-3 mx-auto">
    <svg viewBox="0 0 100 100" width="150">

        <!-- Fundo -->
        <circle cx="50" cy="50" r="40"
            stroke="#eee"
            stroke-width="8"
            fill="none"/>

        <!-- Barra -->
        <circle id="loaderCircle"
            cx="50" cy="50" r="40"
            stroke="#28a745"
            stroke-width="8"
            fill="none"
            stroke-linecap="round"
            stroke-dasharray="251.2"
            stroke-dashoffset="251.2">
        </circle>

        <!-- N├║mero -->
        <text id="totalAlunosText"
            x="50%" y="50%"
            dominant-baseline="middle"
            text-anchor="middle"
            font-size="20">
            <?= $totalAlunos ?>
        </text>

    </svg>
</div>

<!-- SELECT -->
<div class="col-sm-4 mx-auto mt-3">
    <label><strong>Selecione o Curso:</strong></label>
    <select id="selectCurso" class="form-control">
        <option value="">-- Turma --</option>
        <?php foreach ($cursos as $curso): ?>
            <option value="<?= $curso ?>"><?= $curso ?></option>
        <?php endforeach; ?>
    </select>
</div>

<!-- TABELA -->
<div class="col-sm-12 text-center mt-4" id="tabelaCursos" style="display:none;">
    <table class="table table-borderless text-center">
        <thead>
            <tr>
                <th></th>
                <th>Curso</th>
                <th>Turma</th>
                <th>SubTotal</th>
            </tr>
        </thead>
        <tbody id="conteudoTabela"></tbody>
    </table>
</div>

</div>

<!-- BOT├òES -->
<div class="row mt-3">
    <div class="col-sm-6">
        <a class="btn btn-outline-primary" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno">
            Lista de Alunos
        </a>
    </div>

    <div class="col-sm-6 text-end">
        <button id="botaoTurma" class="btn btn-outline-primary">
            Mostrar lista
        </button>
    </div>
</div>

<!-- LISTA -->
<div class="col-sm-12 mt-3" id="listaAlunos" style="display:none;">
    <h3>Lista de alunos</h3>
    <h5>Presentes at├® o momento.</h5>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Matr├¡cula</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Dia</th>
                    <th>Entrada</th>
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
                        <td><?= date('d-m-Y') ?></td>
                        <td><?= $aluno['dia_semana'] ?></td>
                        <td><?= $aluno['acesso_hora'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</div>
</section>

<footer class="text-end">
    <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" class="img-fluid">
</footer>
</div>

<!-- ­ƒöÑ CSS ANIMA├ç├âO CORRIGIDA -->
<style>
#loaderCircle {
    transform: rotate(-90deg);
    transform-origin: 50% 50%;
    animation: progresso 2s ease-in-out infinite;
}

@keyframes progresso {
    0% { stroke-dashoffset: 251.2; }
    50% { stroke-dashoffset: 0; } /* ­ƒöÑ CORRE├ç├âO AQUI */
    100% { stroke-dashoffset: 251.2; }
}
</style>

<!-- JS -->
<script>
let dados = <?= json_encode($dados) ?>;
let totais = <?= json_encode($totais) ?>;

const select = document.getElementById("selectCurso");
const tabela = document.getElementById("tabelaCursos");
const conteudo = document.getElementById("conteudoTabela");

const imagens = {
    ADM: "<?= constant("URL_LOCAL_IMG") ?>tela/mda.png",
    TDS: "<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png",
    LOG: "<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png"
};

function atualizarTabela(curso) {
    conteudo.innerHTML = "";

    for (let serie in dados[curso]) {
        conteudo.innerHTML += `
            <tr>
                <td><img src="${imagens[curso]}" width="40"></td>
                <td>${curso}</td>
                <td>${serie}</td>
                <td>${dados[curso][serie]}</td>
            </tr>
        `;
    }

    conteudo.innerHTML += `
        <tr>
            <th colspan="3">Total</th>
            <td>${totais[curso]}</td>
        </tr>
    `;
}

select.addEventListener("change", function () {
    const curso = this.value;

    if (!curso) {
        tabela.style.display = "none";
        return;
    }

    tabela.style.display = "block";
    atualizarTabela(curso);
});

// ­ƒöÑ ATUALIZA├ç├âO SEM RELOAD
function atualizarDados() {
    fetch('dados.php')
        .then(res => res.json())
        .then(data => {

            document.getElementById("totalAlunosText").innerText = data.total;

            dados = data.dados;
            totais = data.totais;

            const curso = select.value;
            if (curso) atualizarTabela(curso);
        });
}

setInterval(atualizarDados, 5000);

// BOT├âO LISTA
const lista = document.getElementById("listaAlunos");
const botao = document.getElementById("botaoTurma");

botao.addEventListener("click", () => {
    lista.style.display = lista.style.display === "none" ? "block" : "none";
});
</script>

