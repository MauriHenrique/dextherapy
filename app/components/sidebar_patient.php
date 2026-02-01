<input type="checkbox" id="menu-toggle" class="menu-checkbox">

<aside class="sidebar">
    <div class="sidebar-header">
        <img src="../assets/images/logo.png" alt="Logo">
    </div>
    
    <nav class="sidebar-nav">
        <?php $atual = basename($_SERVER['PHP_SELF']); ?>
        
        <a href="../pacient/dashboard.php" class="nav-item <?= ($atual == '../pacient/dashboard.php') ? 'active' : '' ?>">Início</a>
        <a href="../pacient/exercises.php" class="nav-item <?= ($atual == '../pacient/exercises.php') ? 'active' : '' ?>">Meus Exercícios</a>
        <a href="../pacient/profile.php" class="nav-item <?= ($atual == '../pacient/profile.php') ? 'active' : '' ?>">Meu Perfil</a>
        <a href="https://wa.me/5521985571239" target="_blank" class="nav-item">Contato</a>
    </nav>

    <div class="sidebar-footer">
        <button class="btn-logout" onclick="window.location.href='/app/login.php'">Sair</button>
    </div>
</aside>

<label for="menu-toggle" class="menu-overlay"></label>