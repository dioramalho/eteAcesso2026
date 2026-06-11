<?php
include_once __DIR__ . '/../view/topo_interno.php';  
?>

<div class="container-fluid d-flex justify-content-center">
    
    <section style="width: 100%; max-width: 600px; margin-top: 40px;">

        <div class="row mb-3">
            <h2 class="text-center display-6">Cadastro de Responsável</h2>
        </div>

        <div class="row">

            <div class="col-12">

                <!--<form method="POST" action="../controller/responsaveisController.php" class="was-validated"> -->

                <form method="POST" action="<?= constant('URL_LOCAL_FORMS') ?>responsaveisController.php" class="card p-4 shadow-sm">

                    <input type="hidden" name="acao" value="cadastrar">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">ID do Aluno</label>
                        <input type="number" name="idAluno" class="form-control" required value="<?= isset($_GET['idAluno']) ? htmlspecialchars($_GET['idAluno']) : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-success btn-lg w-100 mb-2">
                        Cadastrar
                    </button>

                    <a href="?pagina=lista-aluno" 
                       class="btn btn-secondary btn-lg w-100">
                       Voltar
                    </a>

                </form>

            </div>
        </div>

    </section>

    
</div>

<?php
include_once __DIR__ . '/../rodape_interno.php';
?>

