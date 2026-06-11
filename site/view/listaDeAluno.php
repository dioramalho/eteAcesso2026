

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
        <div class="container mt-4 ">
            <div class="row">
                <div class="col-sm-1 ms-2 mb-2"><a class="btn btn-outline-primary" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=secretaria" class="btn btn-primary mt-4">Voltar</a></div>
                <div class="col">
                    <h2 style="text-align: center;padding-left: 0px;padding-right: 80px">
                        <?= $titulo ?>
                    </h2>
                </div>
            </div>
            <!-- Tabela com o histórico completo do aluno que será gerada de acordo com acesso ao sistema  -->
            <div class="table-responsive-sm m-2">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start gap-2 mb-3">
                    <a type="button" class="btn btn-outline-primary" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=cadastro-aluno">Cadastrar Alunos</a>
                    <form action="<?= constant("URL_LOCAL_FORMS") ?>listaAlunoController.php" method="post" class="w-100 w-md-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" name="termo" placeholder="Pesquisar aluno...">
                            <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                        </div>
                    </form>
                </div>

                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-dark diminuir-fonte-mobile">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Turma</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Cadastro</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Responsável</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="diminuir-fonte-mobile">
                        <?php
                        foreach ($alunoRetorno as $aluno) : ?>
                            <tr>
                                <td>
                                    <strong><?= $aluno['id'] ?></strong>
                                </td>
                                <td>
                                    <?= $aluno['Matricula'] ?>
                                </td>
                                <td>
                                    <a type="button" title="Editar Aluno" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=edicao-aluno&IdAluno=<?= $aluno['id']?>"><?= $aluno['Nome']?></a>
                                </td>
                                <td>
                                    <?= $aluno['Serie'] ?>
                                </td>
                                <td>
                                    <?= $aluno['Curso'] ?>
                                </td>
                                <?php if ($aluno['biometria01']) : ?>
                                    <td class="esconder-mobile"><a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=biometria&idAluno=<?= $aluno['id'] ?>" class="btn btn-outline-success">Biometria</a></td>
                                <?php else : ?>
                                    <td class="esconder-mobile"><a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=biometria&idAluno=<?= $aluno['id'] ?>" class="btn btn-outline-danger">Biometria</a></td>
                                <?php endif ?>

                                <td class="esconder-mobile">
                                    <?php if ($aluno['imagem']) : ?>
                                        <?= 'imagem já existe' ?>
                                    <?php else : ?>
                                        <form action="<?= constant("URL_LOCAL_FORMS") ?>listaAlunoController.php" method="post" enctype="multipart/form-data">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="imagem" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" required="required">
                                                <input type="hidden" name="aluno_id" value="<?= $aluno['id'] ?>">
                                                <button class="btn btn-outline-primary" name="submit" type="submit" id="inputGroupFileAddon04">Enviar</button>
                                            </div>
                                        </form>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($aluno['responsavel_nome'] ?? 'Sem responsável cadastrado') ?>
                                </td>
                                <td>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#responsavelModal-<?= $aluno['id'] ?>">
                                            Responsável
                                        </button>
                                        <a type="button" class="btn btn-danger btn-sm" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=deletar-aluno&idAluno=<?= $aluno['id'] ?>">Deletar</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>

                <?php foreach ($alunoRetorno as $aluno) : ?>
                    <div class="modal fade" id="responsavelModal-<?= $aluno['id'] ?>" tabindex="-1" aria-labelledby="responsavelModalLabel-<?= $aluno['id'] ?>" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="responsavelModalLabel-<?= $aluno['id'] ?>">Responsáveis de <?= htmlspecialchars($aluno['Nome'] ?? 'Aluno') ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                </div>
                                <div class="modal-body">
                                    <?php $responsaveis = $responsaveisPorAluno[$aluno['id']] ?? []; ?>
                                    <?php if (!empty($responsaveis)) : ?>
                                        <div class="table-responsive-sm">
                                            <table class="table table-bordered table-hover align-middle">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>Telefone</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($responsaveis as $responsavel) : ?>
                                                        <tr>
                                                            <td><?= htmlspecialchars($responsavel['nome']) ?></td>
                                                            <td><?= htmlspecialchars($responsavel['email']) ?></td>
                                                            <td><?= htmlspecialchars($responsavel['telefone']) ?></td>
                                                            <td class="d-flex gap-2 flex-wrap">
                                                                <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=responsavel-editar&id=<?= $responsavel['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                                                                <a href="<?= constant("URL_LOCAL_FORMS") ?>responsaveisController.php?acao=excluir&id=<?= $responsavel['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este responsável?')">Excluir</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    <?php else : ?>
                                        <p class="mb-0">Nenhum responsável cadastrado para este aluno.</p>
                                    <?php endif; ?>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=cadastro-responsavel&idAluno=<?= $aluno['id'] ?>" class="btn btn-success">
                                        Cadastrar novo responsável
                                    </a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php

                if ($exibir_paginacao) :

                ?>
                    <ul class="pagination justify-content-center paginacao-mobile">
                        <li class="page-item paginacao-mobile"><a class="btn btn-outline-primary" class="page-link" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno&page=<?= $page - 1; ?>">Anterior</a>
                        </li>
                        <?php
                        $listatotal = (count($listaAlunos) / $limit) + 1;

                        for ($i = 1; $i <= $listatotal; $i++) : ?>

                            <li class="page-item paginacao-mobile"><a class="btn btn-outline-primary" class="page-link" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno&page=<?= $i; ?>">
                                    <?= $i; ?>
                                </a></li>

                        <?php endfor; ?>
                        <li class="page-item paginacao-mobile"><a class="btn btn-outline-primary" class="page-link" href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno&page=<?= $page + 1; ?>">Proximo</a>
                        </li>
                    </ul>
                <?php
                endif;
                ?>
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