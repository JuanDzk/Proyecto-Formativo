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
                    <img src="/images/image.png" alt="Logo">
                    <span class="logo-text">Gestion Guias</span>
                </div>
                <nav class="menu">
                    <ul>

                        <li><a href="/competencia/view"><i class="fas fa-trophy"></i><span>Competencia</span></a></li>
                        <li><a href="/especialidad/view"><i class="fas fa-user-graduate"></i><span>Especialidad</span></a></li>
                        <li><a href="/guia/view"><i class="fas fa-book-open"></i><span>Guia</span></a></li>
                        <li><a href="/instructor/view"><i class="fas fa-chalkboard-teacher"></i><span>Instructores</span></a></li>
                        <li><a href="/momentosAprendizaje/view"><i class="fas fa-lightbulb"></i><span>Momentos de Aprendizaje</span></a></li>
                        <li><a href="/programaFormacion/view"><i class="fas fa-graduation-cap"></i><span>Programas</span></a></li>
                        <li><a href="/resultado/view"><i class="fas fa-chart-line"></i><span>Resultado</span></a></li>
                        <li><a href="/tecnicasDidacticas/view"><i class="fas fa-tools"></i><span>Tecnicas Didacticas</span></a></li>


                        <!-- <?php if (isset($_SESSION['nombre'])): ?>
                            <li><a href="/login/logout"><i class="fas fa-sign-out-alt"></i><span>Cerrar sesión (<?php echo $_SESSION['nombre'] ?? ""; ?>)</span></a></li>
                        <?php endif; ?> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <button class="expand-sidebar" style="display: none;"><i class="fas fa-chevron-right"></i></button>

        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle"><i class="fas fa-bars"></i></button>
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