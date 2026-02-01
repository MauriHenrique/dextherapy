<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil | DexTherapy</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body class="dashboard-body">

    <?php include '../components/sidebar_patient.php'; ?>

    <main class="main-content">
        <header class="top-bar">
            <label for="menu-toggle" class="hamburger">
                <span></span><span></span><span></span>
            </label>
            <div class="user-info">Olá, <strong>Paciente</strong></div>
        </header>

        <section class="content-body">
            <div class="profile-wrapper">
                
                <div class="profile-hero">
                    <div class="avatar-generic"></div> 
                    
                    <div class="hero-text">
                        <h1>João Silva</h1>
                        <span class="status-tag">Paciente Ativo</span>
                    </div>
                </div>

                <div class="profile-grid">
                    <div class="profile-section">
                        <div class="section-header">
                            <h3>Dados Pessoais</h3>
                        </div>
                        <div class="readonly-group">
                            <div class="info-item">
                                <label>E-mail</label>
                                <p>joao.silva@email.com</p>
                            </div>
                            <div class="info-item">
                                <label>Data de Início</label>
                                <p>15 de Janeiro de 2026</p>
                            </div>
                            <div class="info-item">
                                <label>Validade do plano</label>
                                <p>15 de Março de 2026</p>
                            </div>
                        </div>
                    </div>

                    <div class="profile-section">
                        <div class="section-header">
                            <h3>Segurança</h3>
                        </div>
                        <form action="api/update_password.php" method="POST" class="password-form">
                            <div class="field-group">
                                <label for="current_pass">Senha Atual</label>
                                <input type="password" id="current_pass" placeholder="••••••••">
                            </div>
                            <div class="field-group">
                                <label for="new_pass">Nova Senha</label>
                                <input type="password" id="new_pass" placeholder="Nova senha">
                            </div>

                            <div class="field-group">
                                <label for="confirm_new_pass">Confirmar Nova Senha</label>
                                <input type="password" id="confirm_new_pass" placeholder="Confirmar nova senha">
                            </div>
                            
                            <button type="submit" class="btn-save">Salvar Nova Senha</button>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>
</html>