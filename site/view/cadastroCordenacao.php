
<main class="container mt-4 mb-4">

    <div class="row">
        <div class="col-sm-12">
            <h2 class="mb-3">Painel da Coordenação</h2>
            <p>.</p>
            <?php if (!empty($msgAlert)): ?>
                <div class="alert alert-info" role="alert"><?php echo htmlspecialchars($msgAlert); ?></div>
            <?php endif; ?>
        </div>
    </div>
    <!-- ================= FORMULÁRIO ================= -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-3 mb-4">

                <h4>Cadastrar / Editar Usuário</h4>

                <form method="POST" action="">
                    <input type="hidden" name="id" id="id" value="<?= isset($id) ? intval($id) : '' ?>">

                    <div class="row">
                        <div class="col-sm-4">
                            <label>Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required value="<?= htmlspecialchars($nome ?? '') ?>">
                        </div>

                        <div class="col-sm-4">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required value="<?= htmlspecialchars($email ?? '') ?>">
                        </div>

                        <div class="col-sm-4">
                            <label>Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" autocomplete="new-password">
                            <small class="form-text text-muted">Deixe em branco para manter a senha atual.</small>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-4">
                            <label>Permissão</label>
                            <select name="permissao" id="permissao" class="form-control">
                                <?php $sel = $permissao ?? 'coordenador'; ?>
                                <option value="aluno" <?= $sel === 'aluno' ? 'selected' : '' ?>>Aluno</option>
                                <option value="professor" <?= $sel === 'professor' ? 'selected' : '' ?>>Professor</option>
                                <option value="coordenador" <?= $sel === 'coordenador' ? 'selected' : '' ?>>Coordenador</option>
                                <option value="admin" <?= $sel === 'admin' ? 'selected' : '' ?>>Admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <button type="submit" name="action" value="create" class="btn btn-success">
                                Cadastrar
                            </button>

                            <button type="submit" name="action" value="update" class="btn btn-warning">
                                Atualizar
                            </button>

                            <button type="reset" class="btn btn-secondary">
                                Limpar
                            </button>

                            <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=dashboard" class="btn btn-outline-secondary ms-2">
                                Voltar ao Dashboard
                            </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- ================= LISTAGEM ================= -->
    <div class="row">
        <div class="col-sm-12">

            <div class="card p-3">

                <h4>Usuários Cadastrados</h4>

                <div class="table-responsive-sm">
                    <table class="table table-bordered table-hover">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Permissão</th>
                                <th>Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (!empty($usuarios)) : ?>
                                <?php foreach ($usuarios as $usuario) : ?>
                                    <?php $perm = isset($usuario['permissao']) ? $usuario['permissao'] : 'coordenador'; ?>
                                    <tr>
                                        <td><?= intval($usuario['id']) ?></td>
                                        <td><?= htmlspecialchars($usuario['nome']) ?></td>
                                        <td><?= htmlspecialchars($usuario['email']) ?></td>
                                        <td><?= htmlspecialchars(ucfirst($perm)) ?></td>
                                        <td>
                                            <button 
                                                class="btn btn-primary btn-sm"
                                                onclick="editarUsuario('<?= intval($usuario['id']) ?>', '<?= addslashes($usuario['nome']) ?>', '<?= addslashes($usuario['email']) ?>', '<?= addslashes($perm) ?>')">
                                                Editar
                                            </button>

                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="id" value="<?= intval($usuario['id']) ?>">
                                                <button 
                                                    type="submit" 
                                                    name="action" 
                                                    value="delete"
                                                    class="btn btn-danger btn-sm">
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum usuário cadastrado.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>

</main>

<script>
function editarUsuario(id, nome, email, permissao) {
    document.getElementById('id').value = id;
    document.getElementById('nome').value = nome;
    document.getElementById('email').value = email;
    document.getElementById('senha').value = '';
    document.getElementById('permissao').value = permissao;

    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
