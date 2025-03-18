<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style_admin_layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <img src="/img/image.png" alt="Logo">
                    <span class="logo-text">GymCpic</span>
                </div>
                <nav class="menu">
                    <ul>
                        <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1): ?>
                            <li><a href="/centroFormacion/view"><i class="fas fa-building"></i><span>Centros</span></a></li>
                            <li><a href="/programaFormacion/view"><i class="fas fa-calendar-alt"></i><span>Programas</span></a></li>
                        <?php endif ?>
                        <li><a href="/rol/view"><i class="fas fa-user-shield"></i><span>Roles</span></a></li>
                        <li><a href="/actividad/view"><i class="fas fa-user-tag"></i><span>Actividad</span></a></li>
                        <li><a href="/usuario/view"><i class="fas fa-user"></i><span>Usuario</span></a></li>
                        <li><a href="/grupo/view"><i class="fas fa-users"></i><span>Grupo</span></a></li>
                        <li><a href="/tipoUsuarioGym/view"><i class="fas fa-user-circle"></i><span>Tipo Usuario</span></a></li>
                        <li><a href="/controlProgreso/view"><i class="fas fa-cogs"></i><span>Control</span></a></li>
                        <li><a href="/registroIngreso/view"><i class="fas fa-clipboard-list"></i><span>Registro</span></a></li>
                        <?php if (isset($_SESSION['nombre'])): ?>
                            <li><a href="/login/logout"><i class="fas fa-sign-out-alt"></i><span>Cerrar sesión (<?php echo $_SESSION['nombre'] ?? ""; ?>)</span></a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <button class="expand-sidebar" style="display: none;"><i class="fas fa-chevron-right"></i></button>

        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle"><i class="fas fa-bars"></i> Menu</button>
                    <h1><?php echo $title ?></h1>
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar...">
                    </div>
                    <div class="header-icons">
                        <i class="fas fa-bell"></i>
                        <i class="fas fa-user"></i>
                        <i class="fas fa-adjust"></i>
                    </div>
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>
            </div>
        </main>
    </div>

    <script src="/js/admin-functions.js"></script>
</body>

</html>