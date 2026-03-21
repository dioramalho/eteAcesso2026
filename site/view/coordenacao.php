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
        <!-- Titulo do conteúdo da pagina -->
        <div class="container mt-4 mb-4">
            <!-- <h2 style="text-align: center;"><?= $titulo; ?></h2> -->
            <div class="row">

                <h3>Total de Alunos</h3>
                <h5>Em tempo real.</h5>

                <div class="col-sm-3">
                    <svg viewBox="0 0 100 100">
                        <rect x="0" y="0" width="50" height="50" stroke="transparent" stroke-width="3px" fill="transparent" />
                        <circle class="bg" cx="50" cy="50" r="40" stroke="" stroke-width="3px" fill="" /><text id="total" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">
                            <?= $totalAlunos ?>
                        </text>
                        <circle class="meter" cx="50" cy="50" r="40" />
                    </svg>
                    
                </div>

                <div class="col-sm-4 mb-3">
                        <label><strong>Selecione o Curso:</strong></label>
                    <select id="selectCurso" class="form-control">
                        <option value="">-- Escolha --</option>
                        <option value="ADM">ADM</option>
                        <option value="TDS">TDS</option>
                        <option value="LOG">LOG</option>
                    </select>
                </div>
                    <div class="col-sm-12 text-center">
                        <div id="ADM" class="turmaAlunos" style="display:none;">
                    <div id="turmaAlunos">
                        <table id="tabela" class="table responsive-sm table table-borderless mb-4">
                            <table class="table table-borderless mx-auto text-center">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Curso</th>
                                    <th>Turma</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $adm1a_contador = 0;
                                $adm1b_contador = 0;

                                $adm2a_contador = 0;
                                $adm2b_contador = 0;

                                $adm3a_contador = 0;
                                $adm3b_contador = 0;
                                foreach ($listaAlunos as $aluno) :
                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '1 Ano A') {
                                        $adm1a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '2 Ano A') {
                                        $adm2a_contador++;
                                    }

                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '3 Ano A') {
                                        $adm3a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '1 Ano B') {
                                        $adm1b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '2 Ano B') {
                                        $adm2b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'ADM' && $aluno["Serie"] === '3 Ano B') {
                                        $adm3b_contador++;
                                    }
                                    $adm_total_contador = $adm1a_contador + $adm2a_contador + $adm3a_contador + $adm1b_contador + $adm2b_contador + $adm3b_contador;
                                ?>

                                <?php endforeach; ?>
                                <tr>
                                    <img src="..." class="imagem mx-auto d-block">
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 1 Ano A</td>
                                    <td>
                                        <?= $adm1a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 2 Ano A</td>
                                    <td>
                                        <?= $adm2a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 3 Ano A</td>
                                    <td>
                                        <?= $adm3a_contador ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 1 Ano B</td>
                                    <td>
                                        <?= $adm1b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 2 Ano B</td>
                                    <td>
                                        <?= $adm2b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/mda.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>ADM</td>
                                    <td> 3 Ano B</td>
                                    <td>
                                        <?= $adm3b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Total de Alunos TDS:</th>
                                    <td>
                                        <?= $adm_total_contador ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <div class="col-sm-12 text-center">
                        <div id="TDS" class="turmaAlunos" style="display:none;">                   
                    <div id="turmaAlunos">
                        <table id="tabela" class="table responsive-sm table table-borderless mb-4">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Curso</th>
                                    <th>Turma</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tds1a_contador = 0;
                                $tds1b_contador = 0;

                                $tds2a_contador = 0;
                                $tds2b_contador = 0;

                                $tds3a_contador = 0;
                                $tds3b_contador = 0;
                                foreach ($listaAlunos as $aluno) :
                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '1 Ano A') {
                                        $tds1a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '2 Ano A') {
                                        $tds2a_contador++;
                                    }

                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '3 Ano A') {
                                        $tds3a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '1 Ano B') {
                                        $tds1b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '2 Ano B') {
                                        $tds2b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'TDS' && $aluno["Serie"] === '3 Ano B') {
                                        $tds3b_contador++;
                                    }
                                    $tds_total_contador = $tds1a_contador + $tds2a_contador + $tds3a_contador + $tds1b_contador + $tds2b_contador + $tds3b_contador;
                                ?>

                                <?php endforeach; ?>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 1 Ano A</td>
                                    <td>
                                        <?= $tds1a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 2 Ano A</td>
                                    <td>
                                        <?= $tds2a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 3 Ano A</td>
                                    <td>
                                        <?= $tds3a_contador ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 1 Ano B</td>
                                    <td>
                                        <?= $tds1b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 2 Ano B</td>
                                    <td>
                                        <?= $tds2b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-tds.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>TDS</td>
                                    <td> 3 Ano B</td>
                                    <td>
                                        <?= $tds3b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Total de Alunos TDS:</th>
                                    <td>
                                        <?= $tds_total_contador ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="col-sm-12 text-center">
                        <div id="LOG" class="turmaAlunos" style="display:none;">
                    <div id="turmaAlunos">
                        <table id="tabela" class="table responsive-sm table table-borderless">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Curso</th>
                                    <th>Turma</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $log1a_contador = 0;
                                $log1b_contador = 0;

                                $log2a_contador = 0;
                                $log2b_contador = 0;

                                $log3a_contador = 0;
                                $log3b_contador = 0;
                                foreach ($listaAlunos as $aluno) :
                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '1 Ano A') {
                                        $log1a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '2 Ano A') {
                                        $log2a_contador++;
                                    }


                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '3 Ano A') {
                                        $log3a_contador++;
                                    }
                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '1 Ano B') {
                                        $log1b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '2 Ano B') {
                                        $log2b_contador++;
                                    }
                                    if ($aluno["Curso"] === 'LOG' && $aluno["Serie"] === '3 Ano B') {
                                        $log3b_contador++;
                                    }
                                    $log_total_contador = $log1a_contador + $log2a_contador + $log3a_contador + $log1b_contador + $log2b_contador + $log3b_contador;
                                ?>

                                <?php endforeach; ?>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 1 Ano A</td>
                                    <td>
                                        <?= $log1a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 2 Ano A</td>
                                    <td>
                                        <?= $log2a_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 3 Ano A</td>
                                    <td>
                                        <?= $log3a_contador ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 1 Ano B</td>
                                    <td>
                                        <?= $log1b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 2 Ano B</td>
                                    <td>
                                        <?= $log2b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo-log.png" alt="Logo do Curso" class="imagem"></td>
                                    <td>LOG</td>
                                    <td> 3 Ano B</td>
                                    <td>
                                        <?= $log3b_contador ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Total de Alunos de LOG:</th>
                                    <td>
                                        <?= $log_total_contador ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
            <div class="row">
                    <div class="col-sm-6 botao-mobile" >
                    <a type="button" class="btn btn-outline-primary" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno">Lista de Alunos</a>
                    </div>
                </div>

            <!-- Tabela que será gerada com as informações de quando o aluno entrar no sistema na entrada da escola  -->
            <div class="row">
                <div class="col-sm-12 mb-2">
                    <button id="botaoTurma" class=" mt-2 btn btn-outline-primary botaoTurma">Mostrar lista</button>
                </div>
            </div>
            
            <div class="col-sm-12" id="listaAlunos" style="display:none;">
                <h3>Lista de alunos</h3>
                <h5>Presentes até o momento.</h5>
                <div class="table-responsive-sm">

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
                            <?php foreach ($listaAlunos as $aluno) : ?>
                                <tr>
                                    <td>
                                        <?= $aluno['Matricula'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=historico&idAluno=<?= $aluno['id'] ?>">
                                            <?= $aluno['Nome'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $aluno['data_formatada'] = $data_acesso->format('d-m-Y') ?>
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
        </div>
    </section>

    <div class="container">

        <!-- Rodapé do site -->
        <div class="row">
            <footer>
                <p class="rounded float-right p-0">
                    <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" alt="Logo da Secretaria de Educação e Esporte do Governo de Pernambuco." class="mb-2 pt-2 flex-shrink-1 bd-highlight img-fluid ">
                </p>
            </footer>
        </div>
    </div>
</div>

<script>
    // Primeiro, obtenha o elemento que você deseja ocultar/mostrar
    var listaAlunos = document.getElementById("listaAlunos");

    // Em seguida, obtenha o botão que irá controlar a ação de ocultar/mostrar
    // var botao = document.getElementById("botao");
    var botaoTurma = document.getElementById("botaoTurma");

    // Adicione um ouvinte de evento ao botão para responder aos cliques
    botaoTurma.addEventListener("click", function() {
        // Verifique se o conteúdo está atualmente visível
        if (listaAlunos.style.display === "none") {
            // Se o conteúdo estiver oculto, mostre-o
            listaAlunos.style.display = "block";
        } else {
            // Se o conteúdo estiver visível, oculte-o
            listaAlunos.style.display = "none";
        }
    });
    
</script>
<script>
    var select = document.getElementById("selectCurso");

    var adm = document.getElementById("ADM");
    var tds = document.getElementById("TDS");
    var log = document.getElementById("LOG");

    select.addEventListener("change", function () {

        // Esconde tudo primeiro
        adm.style.display = "none";
        tds.style.display = "none";
        log.style.display = "none";

        // Mostra o selecionado
        if (this.value === "ADM") {
            adm.style.display = "block";
        }
        if (this.value === "TDS") {
            tds.style.display = "block";
        }
        if (this.value === "LOG") {
            log.style.display = "block";
        }
    });
</script>