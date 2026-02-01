<input type="checkbox" id="menu-toggle" class="menu-checkbox">

<aside class="sidebar" style="background-color: #4d2c5a;">
    <div class="sidebar-header">
        <img src="../assets/images/logo.png" alt="Logo">
    </div>
    
    <nav class="sidebar-nav">
        <?php $atual = basename($_SERVER['PHP_SELF']); ?>
        
        <a href="dashboard.php" class="nav-item <?= ($atual == 'dashboard.php') ? 'active' : '' ?>">📊 Painel Geral</a>
        <a href="patient_list.php" class="nav-item <?= ($atual == 'patient_list.php') ? 'active' : '' ?>">👥 Lista de Pacientes</a>
        <a href="video_library.php" class="nav-item <?= ($atual == 'video_library.php') ? 'active' : '' ?>">📽️ Biblioteca de Vídeos</a>
        <a href="../profile.php" class="nav-item">⚙️ Configurações</a>
    </nav>

    <div class="sidebar-footer">
        <button class="btn-logout" onclick="window.location.href='../index.php'">Sair</button>
    </div>
</aside>

<label for="menu-toggle" class="menu-overlay"></label>