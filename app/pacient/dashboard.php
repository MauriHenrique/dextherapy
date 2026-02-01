<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início | DexTherapy</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body class="dashboard-body">

    <?php include '../components/sidebar_patient.php'; ?>

    <main class="main-content">
        <header class="top-bar">
            <label for="menu-toggle" class="hamburger">
                <span></span><span></span><span></span>
            </label>
            <div class="user-info">Olá, <strong>João Silva</strong></div>
        </header>

        <section class="content-body">
            <div class="welcome-section">
                <div class="welcome-text">
                    <h1>Sua Central de Reabilitação</h1>
                    <p>Veja como está o progresso do seu tratamento hoje.</p>
                </div>
            </div>

            <div class="stats-grid">
                
                <div class="stat-card">
                    <div class="stat-icon icon-green">🔑</div>
                    <div class="stat-info">
                        <span class="stat-label">Status da Conta</span>
                        <span class="stat-value text-green">Acesso Ativo</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon icon-purple">📅</div>
                    <div class="stat-info">
                        <span class="stat-label">Validade do Plano</span>
                        <span class="stat-value">15 Mar 2026</span>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon icon-blue">💪</div>
                    <div class="stat-info">
                        <span class="stat-label">Sessões Prontas</span>
                        <span class="stat-value">08 Exercícios</span>
                    </div>
                </div>

            </div>

            <!-- <div class="main-action-card">
                <div class="action-content">
                    <div class="action-text">
                        <h2>Pronto para começar?</h2>
                        <p>Sua fisioterapeuta preparou uma nova sequência de exercícios para o fortalecimento das suas articulações.</p>
                    </div>
                    <a href="exercises.php" class="btn-primary-action">
                        Iniciar Sessão Agora
                    </a>
                </div>
                <div class="action-illustration">
                    <div class="pulse-circle"></div>
                </div>
            </div> -->

            <!-- <div class="support-mini-card">
                <p>Dúvidas sobre os exercícios? <a href="https://wa.me/5521985571239">Entre em contato conosco</a></p>
            </div> -->
        </section>
    </main>
</body>
</html>