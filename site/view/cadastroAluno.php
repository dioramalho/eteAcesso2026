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
    <br>
    <a class="btn btn-outline-primary" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno" class="btn btn-primary mt-5">Voltar</a>

    <section>
        <!-- Titulo de conteúdo da pagina -->
        <div class="row">
            <h1 class="text-center"><?=$titulo?></h1>
        </div>
        <!-- Formulário de cadastro -->
        <div class="row">
            <div class="col-sm-6">
                <?php if (!empty($erros)) : ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach ($erros as $erro) : ?>
                                <li><?= htmlspecialchars($erro) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if ($exibirFormulario) : ?>
                    <form action="<?= constant('URL_LOCAL_SITE') ?>?pagina=cadastro-aluno" method="post" class="was-validated">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control maiusculo" id="name" placeholder="Nome do aluno" name="nome" required value="<?= htmlspecialchars($valores['nome'] ?? '') ?>">
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div>
                            <label>Sexo:</label>
                            <br>
                            <input type="radio" id="male" name="sexo" value="M" <?= (isset($valores['sexo']) && $valores['sexo'] === 'M') ? 'checked' : '' ?> required />
                            <label for="male">Masculino</label>
                            <input type="radio" name="sexo" value="F" id="female" <?= (isset($valores['sexo']) && $valores['sexo'] === 'F') ? 'checked' : '' ?> required />
                            <label for="female">Feminino</label>
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div class="mb-3">
                            <br>
                            <label for="dataN" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="dataN" name="dataN" required value="<?= htmlspecialchars($valores['dataN'] ?? '') ?>">
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula:</label>
                            <input type="text" class="form-control" id="matricula" placeholder="Número de matrícula" name="matricula" required value="<?= htmlspecialchars($valores['matricula'] ?? '') ?>">
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div>
                            <label for="inputCurso">Curso:</label>
                            <select name="curso" id="inputCurso"  class="form-select" required>
                                <option value="" hidden>Selecione o curso...</option>
                                <option value="TDS" <?= (isset($valores['curso']) && $valores['curso'] === 'TDS') ? 'selected' : '' ?>>Análise e Desenvolvimento de Sistemas</option>
                                <option value="LOG" <?= (isset($valores['curso']) && $valores['curso'] === 'LOG') ? 'selected' : '' ?>>Logística</option>
                            </select>
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div>
                            <br>
                            <label for="inputSerie">Série:</label>
                            <select name="serie" id="inputSerie" class="form-select" required>
                                <option value="" hidden>Selecione a turma...</option>
                                <option value="1 Ano A" <?= (isset($valores['serie']) && $valores['serie'] === '1 Ano A') ? 'selected' : '' ?>>1 Ano A</option>
                                <option value="2 Ano A" <?= (isset($valores['serie']) && $valores['serie'] === '2 Ano A') ? 'selected' : '' ?>>2 Ano A</option>
                                <option value="3 Ano A" <?= (isset($valores['serie']) && $valores['serie'] === '3 Ano A') ? 'selected' : '' ?>>3 Ano A</option>
                                <option value="1 Ano B" <?= (isset($valores['serie']) && $valores['serie'] === '1 Ano B') ? 'selected' : '' ?>>1 Ano B</option>
                                <option value="2 Ano B" <?= (isset($valores['serie']) && $valores['serie'] === '2 Ano B') ? 'selected' : '' ?>>2 Ano B</option>
                                <option value="3 Ano B" <?= (isset($valores['serie']) && $valores['serie'] === '3 Ano B') ? 'selected' : '' ?>>3 Ano B</option>
                            </select>
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div class="mb-3">
                            <br>
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Email do aluno" name="email" required value="<?= htmlspecialchars($valores['email'] ?? '') ?>">
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Telefone do aluno(Apenas Números)" name="telefone" required value="<?= htmlspecialchars($valores['telefone'] ?? '') ?>">
                            <div class="valid-feedback">Preenchido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2 botaoLogin">Cadastrar</button>
                    </form>
                <?php endif; //Exibir formularios ?>

                    <?php if (!$exibirFormulario) : ?>
                    <div class="mb-3 mt-3">
                        <a href="../view/tela-escola.php"></a>
                    <?php endif; //Exibir Sucesso?>
                    </div>

                    <!-- Imagem do com uma logo do Acesso Inteligente -->
                    <div class="offset-sm-1 col-sm-4 mb-2 ">
                        <img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo_acesso.png" alt="Logo do Acesso Inteligente" class="pt-2 mt-3 flex-shrink-1 bd-highlight img-fluid ">
                    </div>
            </div>
    </section>

    <!-- Rodapé do site -->
    <div class="container">
        <div class="row">
            <footer>
                <p class="rounded float-right">
                    <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" alt="Logo da Secretaria de Educação e Esporte do Governo de Pernambuco." class="mb-2 pt-2 flex-shrink-1 bd-highlight img-fluid ">
                </p>
            </footer>
        </div>
    </div>
</div>