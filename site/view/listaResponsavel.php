<?php
require_once __DIR__ . '/../model/Responsaveis.php';

$responsavel = new Responsaveis();
$lista = $responsavel->listar();

$baseImg = constant("URL_LOCAL_IMG");
?>

<!-- Cabeçalho padrão -->
<div class="container">
    <div class="row">
        <header>
            <img src="<?= $baseImg ?>tela/ete_logo.png" 
                 class="mx-auto d-block img-fluid">
        </header>
        <div class="bg-warning p-1"></div>
        <div class="bg-success p-1"></div>
        <div class="bg-danger p-1"></div>
    </div>

    <section class="mt-4">

        <div class="row">
            <h2 class="text-center">Lista de Responsáveis</h2>
        </div>

        <div class="row mb-3 botao-mobile">
            <a href="?pagina=responsavel-cadastro" 
               class="btn btn-success">
               Novo Cadastro
            </a>
        </div>

        <div class="table-responsive-sm">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($lista as $r): ?>
                        <tr>
                            <td><?= htmlspecialchars($r['nome']) ?></td>
                            <td><?= htmlspecialchars($r['email']) ?></td>
                            <td><?= htmlspecialchars($r['telefone']) ?></td>
                            <td class="acao-editar-deletar">

                                <!-- EDITAR -->
                                <a href="?pagina=responsavel-editar&id=<?= $r['id'] ?>" 
                                   class="btn btn-primary btn-sm">
                                   Editar
                                </a>

                                <!-- EXCLUIR (CORRIGIDO) -->
                                <a href="<?= URL_LOCAL_FORMS ?>responsaveisController.php?acao=excluir&id=<?= $r['id'] ?>" 
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </section>

    <!-- Rodapé do site -->
    <div class="row">
        <footer>
            <p class="rounded float-right p-0">
                <img src="<?= $baseImg ?>tela/rodape.png" 
                     class="mb-2 pt-2 flex-shrink-1 bd-highlight img-fluid">
            </p>
        </footer>
    </div>
</div>