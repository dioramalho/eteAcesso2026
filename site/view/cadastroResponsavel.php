<!-- Cabeçalho padrão -->
<div class="container">
    <div class="row">
        <header>
            <img src="<?= constant("URL_LOCAL_IMG") ?>tela/ete_logo.png" 
                 class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1"></div>
        <div class="bg-success p-1"></div>
        <div class="bg-danger p-1"></div>
    </div>

    <section class="mt-4">

        <div class="row">
            <h2 class="text-center">Cadastro de Responsável</h2>
        </div>

        <div class="row justify-content-center">

            <div class="col-sm-6">

                <!--<form method="POST" action="../controller/responsaveisController.php" class="was-validated"> -->

                <form method="POST" action="<?= constant('URL_LOCAL_SITE') ?>controller/responsaveisController.php">

                    <input type="hidden" name="acao" value="cadastrar">

                    <div class="mb-3">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Telefone</label>
                        <input type="text" name="telefone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Senha</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>ID do Aluno</label>
                        <input type="number" name="idAluno" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Cadastrar
                    </button>

                    <a href="?pagina=responsavel-lista" 
                       class="btn btn-secondary w-100 mt-2">
                       Voltar
                    </a>

                </form>

            </div>
        </div>

    </section>

    <!-- Rodapé do site -->
        <div class="row">
            <footer>
                <p class="rounded float-right p-0">
                    <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" alt="Logo da Secretaria de Educação e Esporte do Governo de Pernambuco." class="mb-2 pt-2 flex-shrink-1 bd-highlight img-fluid ">
                </p>
            </footer>
        </div>
</div>