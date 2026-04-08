<!-- Dashboard de Navegação -->
<div class="container-fluid">
    

    <section class="dashboard-section">
        <div class="container mt-5">
            <!-- Titulo do Dashboard -->
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="dashboard-title">Painel de Controle</h1>
                    <p class="dashboard-subtitle">Bem-vindo! Escolha uma opção para continuar.</p>
                </div>
            </div>

            <!-- Cards de Navegação -->
            <div class="row g-4 justify-content-center">
                <!-- Card 1: Monitor de Acessos (Coordenação) -->
                <div class="col-md-6 col-lg-5">
                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=coordenacao" class="text-decoration-none text-dark">
                        <div class="card h-100 border rounded-3 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 64px; width: 64px; border-radius: 50%; background: #eff2f7;">
                                    <span style="font-size: 1.6rem;">📊</span>
                                </div>
                                <h5 class="card-title">Monitor de Acessos</h5>
                                <p class="text-b ">Visualize estatísticas e informações gerais de acessos dos alunos em tempo real.</p>
                                <div class="mt-auto">
                                    <small class="badge bg-secondary">Dashboard</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2: Cadastro de Coordenação -->
                <div class="col-md-6 col-lg-5">
                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=cadastro-coordenacao" class="text-decoration-none text-dark">
                        <div class="card h-100 border rounded-3 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 64px; width: 64px; border-radius: 50%; background: #eff2f7;">
                                    <span style="font-size: 1.6rem;">👥</span>
                                </div>
                                <h5 class="card-title">Cadastro de Coordenação</h5>
                                <p class="text-b ">Gerencie informações e dados relacionados à coordenação acadêmica.</p>
                                <div class="mt-auto">
                                    <small class="badge bg-secondary">Cadastro</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3: Histórico de Alunos -->
                <div class="col-md-6 col-lg-5">
                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=historico" class="text-decoration-none text-dark">
                        <div class="card h-100 border rounded-3 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 64px; width: 64px; border-radius: 50%; background: #eff2f7;">
                                    <span style="font-size: 1.6rem;">📚</span>
                                </div>
                                <h5 class="card-title">Histórico de Alunos</h5>
                                <p class="text-b ">Consulte o histórico de acessos e atividades de cada aluno.</p>
                                <div class="mt-auto">
                                    <small class="badge bg-secondary">Visualização</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 4: Lista de Alunos -->
                <div class="col-md-6 col-lg-5">
                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=lista-aluno" class="text-decoration-none text-dark">
                        <div class="card h-100 border rounded-3 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="mb-3 d-flex align-items-center justify-content-center" style="height: 64px; width: 64px; border-radius: 50%; background: #eff2f7;">
                                    <span style="font-size: 1.6rem;">📋</span>
                                </div>
                                <h5 class="card-title">Lista de Alunos</h5>
                                <p class="text-b ">Visualize a lista completa de alunos cadastrados no sistema.</p>
                                <div class="mt-auto">
                                    <small class="badge bg-secondary">Listagem</small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Botão de Sair -->
            <div class="row mt-5 justify-content-center">
                <div class="col-12 text-center">
                    <a href="<?= constant("URL_LOCAL_SITE") ?>?pagina=secretaria&logout=true" class="btn-logout">
                        <span class="logout-icon">🚪</span> Sair do Sistema
                    </a>
                </div>
            </div>

        </div>
    </section>
</div>
