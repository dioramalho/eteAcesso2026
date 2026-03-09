<!-- Cabeçalho -->
<div class="container">
    <div class="row">
        <header>
            <img src="<?= constant("URL_LOCAL_IMG") ?>tela/ete_logo.png" alt="Logo da ETE - Escola Técnica Estadual" class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1" style="margin-bottom: 0px;"></div>
        <div class="bg-success p-1" style="margin-bottom: 0px;"></div>
        <div class="bg-danger p-1" style="margin-bottom: 0px;"></div>
    </div>

    <section>
        <!-- Titulo de conteúdo da pagina -->
        <div class="container mt-2 ">
            <div class="row">
                <div class="col-sm-1 mb-2"><button class="btn btn-outline-primary" id="botaoVoltar">Voltar</button></div>
                <div class="col-sm-11 mt-2">
                    <h2 style="text-align: center;">
                        <?= $titulo ?>
                    </h2>
                </div>
            </div>



            <!-- Tabela com o histórico completo do aluno que será gerada de acordo com acesso ao sistema  -->
            <div class="table-responsive-sm m-3">

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Dia da Semana</th>
                            <th>Horário de Entrada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alunoRetorno as $aluno) : ?>
                            <tr>
                                <td>
                                    <?= $aluno['Matricula'] ?>
                                </td>
                                <td>
                                    <?= $aluno['Nome'] ?>
                                </td>
                                <td>
                                    <?= $dataFormatada ?>
                                </td>
                                <td>
                                    <?= $aluno['dia_semana'] ?>
                                </td>
                                <td>
                                    <?= $aluno['acesso_hora'] ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Rodapé do site -->
    <div class="container">
        <div class="row">
            <footer>
                <p class="rounded float-right"><img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" alt="Logo da Secretaria de Educação e Esporte do Governo de Pernambuco." class="mb-2 pt-2 flex-shrink-1 bd-highlight img-fluid "></p>
            </footer>
        </div>
    </div>
</div>
<script>
    document.getElementById("botaoVoltar").addEventListener("click", function() {
        // Usa o histórico de navegação para voltar à página anterior
        window.history.back();
    });
</script>