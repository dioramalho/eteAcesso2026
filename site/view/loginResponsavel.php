<!-- Declaração de variável pra alerta -->

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

    <!-- Condicinal caso as informações e login estajam incorretas -->
    <?php if ($exibir_alerta) : ?>
        <div class="alert alert-danger">
            <strong>Aviso!</strong> As informações estão errada!.
        </div>
    <?php endif ?>
    <section>
        <!-- Titulo de conteúdo da pagina -->
        <div class="row">
            <h1 class="mt-3 text-center"><?=$titulo?></h1>
        </div>

        <!-- Formulário de acesso com condicional para validação -->
        <div class="row">
            <div class="col-sm-6">
                <?php if ($exibirFormulario) : ?>

<form method="POST" action="index.php?pagina=login-responsavel">
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="pwd" 
                                placeholder="Digite a senha" 
                                name="senha" required>
                        </div>

                        <input type="hidden" name="idAluno" value="<?=$idAluno?>">
                        <input type="hidden" name="tipo" value="login-responsavel">

                        <button type="submit" class="btn btn-primary mb-2 w-100">Entrar</button>

                        <!-- BOTÃO CADASTRO -->
                        <a href="index.php?pagina=responsavel-cadastro" class="btn btn-success w-100">
                            Cadastrar
                        </a>

                    </form>
                <?php endif; //Exibir formularios
                ?>

                

                <!-- Imagem do com uma logo do Acesso Inteligente -->
            </div>
            <div class="offset-1 col-sm-5 mb-2 " id="imgLogo">
                <img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo_acesso.png" alt="Logo do Acesso Inteligente" class="pb-3 flex-shrink-1 bd-highlight img-fluid ">
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