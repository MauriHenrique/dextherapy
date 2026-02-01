<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Exercícios | DexTherapy</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body class="dashboard-body">

    <?php include '../components/sidebar_patient.php'; ?>

    <main class="main-content">
        
        <header class="top-bar">
            <label for="menu-toggle" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="user-info">
                Olá, <strong>Paciente</strong> 
            </div>
        </header>

        <section class="content-body">
            <h1 class="page-title">Meus Exercícios</h1>
            
            <div class="video-grid">
                    <?php
                // Mock de dados: 15 vídeos com títulos e instruções diferentes
                $videos = [
                    ["titulo" => "Mobilidade de Punho", "desc" => "3 séries de 10 repetições"],
                    ["titulo" => "Fortalecimento de Falanges", "desc" => "2 séries de 15 repetições"],
                    ["titulo" => "Alongamento de Extensores", "desc" => "Manter por 30 segundos"],
                    ["titulo" => "Pinça com Elástico", "desc" => "3 séries de 12 repetições"],
                    ["titulo" => "Desvio Ulnar Ativo", "desc" => "2 séries de 10 repetições"],
                    ["titulo" => "Exercício de Oponência", "desc" => "Repetir 15 vezes cada dedo"],
                    ["titulo" => "Mobilização de Carpo", "desc" => "Movimentos circulares suaves"],
                    ["titulo" => "Fortalecimento de Flexores", "desc" => "Usar bolinha terapêutica"],
                    ["titulo" => "Extensão Dinâmica", "desc" => "3 séries de 8 repetições"],
                    ["titulo" => "Supinação de Antebraço", "desc" => "Com peso leve, 2 séries de 10"],
                    ["titulo" => "Pronação Controlada", "desc" => "Focar na descida lenta"],
                    ["titulo" => "Alongamento de Flexores", "desc" => "Manter por 45 segundos"],
                    ["titulo" => "Estabilização de Punho", "desc" => "Isometria por 20 segundos"],
                    ["titulo" => "Coordenação Motora Fina", "desc" => "Manipular objetos pequenos"],
                    ["titulo" => "Drenagem Linfática Manual", "desc" => "Movimentos leves ascendentes"]
                ];

                // Loop para gerar os 15 cards automaticamente
                foreach ($videos as $video): ?>
                    <div class="video-card">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/wfLO5YODDxY" allowfullscreen></iframe>
                        </div>
                        <div class="video-info">
                            <h3><?php echo $video['titulo']; ?></h3>
                            <p><?php echo $video['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <script src="js/dashboard.js"></script>
</body>
</html>