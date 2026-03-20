<?php
$exibir_alerta = false; // Controle do alerta
?>

<div class="container">
    <!-- Cabeçalho -->
    <div class="row mb-2">
        <header class="col-12 text-center">
            <img src="<?= constant("URL_LOCAL_IMG") ?>tela/ete_logo.png" 
                 alt="Logo da ETE - Escola Técnica Estadual" 
                 class="mx-auto d-block img-fluid" 
                 style="max-height: 120px;">
        </header>
        <div class="col-12 bg-warning p-1"></div>
        <div class="col-12 bg-success p-1"></div>
        <div class="col-12 bg-danger p-1"></div>
    </div>

    <!-- Alerta -->
    <?php if ($exibir_alerta) : ?>
        <div class="alert alert-danger text-center">
            <strong>Aviso!</strong> As informações estão incorretas.
        </div>
    <?php endif; ?>

    <section class="my-4">
        <!-- Título -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1><?= $titulo ?></h1>
            </div>
        </div>

        <!-- Formulário de login -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <?php if (!empty($exibirFormulario)) : ?>
                    <form action="<?= constant("URL_LOCAL_FORMS") ?>loginController.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="uname" class="form-label">Login:</label>
                            <input type="text" class="form-control" id="uname" name="email" placeholder="Número da Matrícula" required>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="pwd" name="senha" placeholder="Insira a data" required>
                            <div class="invalid-feedback">Por favor, preencha este campo.</div>
                        </div>
                        <input type="hidden" name="tipo" value="secretaria">
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                <?php else: ?>
                    <div class="text-center mb-3">
                        <a href="../view/tela-escola.php" class="btn btn-success">Ir para Tela da Escola</a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Logo do sistema -->
            <div class="col-md-4 col-sm-12 text-center mt-4 mt-md-0">
                <img src="<?= constant("URL_LOCAL_IMG") ?>tela/logo_acesso.png" 
                     alt="Logo do Acesso Inteligente" 
                     class="img-fluid" 
                     style="max-height: 150px;">
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="mt-4">
        <div class="row">
            <div class="col-12 text-end">
                <img src="<?= constant("URL_LOCAL_IMG") ?>tela/rodape.png" 
                     alt="Logo da Secretaria de Educação e Esporte do Governo de Pernambuco." 
                     class="img-fluid" style="max-height: 60px;">
            </div>
        </div>
    </footer>
</div>

<!-- Validação de formulário Bootstrap 5 -->
<script>
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>