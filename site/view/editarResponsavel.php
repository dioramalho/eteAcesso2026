<?php
require_once __DIR__ . '/../model/Responsaveis.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    die('ID inválido');
}

$responsavel = new Responsaveis();
$dado = $responsavel->buscar($id);

if (!$dado) {
    die('Responsável não encontrado');
}

$baseImg = constant("URL_LOCAL_IMG");
$baseUrl = constant("URL_LOCAL_SITE");
?>

<div class="container">

    <!-- Cabeçalho -->
    <div class="row mb-3">
        <header>
            <img src="<?= $baseImg ?>tela/ete_logo.png" class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1"></div>
        <div class="bg-success p-1"></div>
        <div class="bg-danger p-1"></div>
    </div>

    <!-- Título -->
    <div class="row mb-4">
        <h1 class="text-center">Editar Responsável</h1>
    </div>

    <!-- Formulário -->
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">

    <form method="POST" action="<?= URL_LOCAL_FORMS ?>responsaveisController.php">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="id" value="<?= $dado['id'] ?>">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control"
                               value="<?= htmlspecialchars($dado['nome']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                               value="<?= htmlspecialchars($dado['email']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control"
                               value="<?= htmlspecialchars($dado['telefone']) ?>" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Atualizar
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

    <!-- Rodapé -->
    <div class="row mt-4">
        <footer class="text-end">
            <img src="<?= $baseImg ?>tela/rodape.png" class="img-fluid">
        </footer>
    </div>

</div>

<style>
.card {
    border-radius: 15px;
    transition: 0.3s;
}
.card:hover {
    transform: scale(1.02);
}
body {
    background: #f5f7fa;
}
</style>