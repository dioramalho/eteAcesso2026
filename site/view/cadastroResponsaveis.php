<?php
include_once __DIR__ . '/../topo_interno.php';  
?>

<div class="container">
    
    <section class="mt-4">

        <div class="row">
            <h2 class="text-center">Cadastro de Responsável</h2>
        </div>

        <div class="row justify-content-center">

            <div class="col-sm-6">

                <!--<form method="POST" action="../controller/responsaveisController.php" class="was-validated"> -->

                <form method="POST" action="<?= constant('URL_LOCAL_FORMS') ?>responsaveisController.php">

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
                        <input type="number" name="idAluno" class="form-control" required value="<?= isset($_GET['idAluno']) ? htmlspecialchars($_GET['idAluno']) : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Cadastrar
                    </button>

                    <a href="?pagina=lista-aluno" 
                       class="btn btn-secondary w-100 mt-2">
                       Voltar
                    </a>

                </form>

            </div>
        </div>

    </section>

    
</div>
