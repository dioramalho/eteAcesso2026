<?php
include_once __DIR__ . '/../view/topo_interno.php';

// Buscar dados do responsável se id foi passado
$responsavel = [];
if (isset($idResponsavel) && $idResponsavel > 0) {
    $responsavelObj = new Responsaveis();
    $resultado = $responsavelObj->buscarPorId($idResponsavel);
    $responsavel = $resultado[0] ?? [];
}
?>

<div class="container-fluid d-flex justify-content-center">
    
    <section style="width: 100%; max-width: 600px; margin-top: 40px;">

        <div class="row mb-3">
            <h2 class="text-center display-6">Editar Responsável</h2>
        </div>

        <div class="row">

            <div class="col-12">

                <form method="POST" action="<?= constant('URL_LOCAL_FORMS') ?>responsaveisController.php" class="card p-4 shadow-sm">

                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($responsavel['id'] ?? '') ?>">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($responsavel['nome'] ?? '') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($responsavel['email'] ?? '') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control" value="<?= htmlspecialchars($responsavel['telefone'] ?? '') ?>" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Senha <small class="text-muted">(deixe em branco para não alterar)</small></label>
                        <input type="password" name="senha" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-2">
                        Atualizar
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
