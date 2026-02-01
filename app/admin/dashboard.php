<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | DexTherapy</title>
    <link rel="stylesheet" href="../style/styles.css"> </head>
<body class="dashboard-body">

    <?php include '../components/sidebar_admin.php'; ?>

    <main class="main-content">
        <header class="top-bar">
            <label for="menu-toggle" class="hamburger">
                <span></span><span></span><span></span>
            </label>
            <div class="user-info">Painel do <strong>Fisioterapeuta</strong></div>
        </header>

        <section class="content-body">
            <h1 class="page-title">Gestão da Clínica</h1>
            
            <div class="video-grid"> <div class="video-card" style="padding: 20px; text-align: center;">
                    <h3>Pacientes Ativos</h3>
                    <p style="font-size: 2rem; color: var(--verde-destaque);">24</p>
                </div>
                <div class="video-card" style="padding: 20px; text-align: center;">
                    <h3>Acessos Expirando</h3>
                    <p style="font-size: 2rem; color: var(--erro);">3</p>
                </div>
            </div>

            <div style="margin-top: 30px;">
                <a href="patient_list.php" class="btn-submit" style="text-decoration:none; display:inline-block; width:auto; padding: 15px 30px;">Gerenciar Pacientes</a>
            </div>
        </section>
    </main>
</body>
</html>