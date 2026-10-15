<?php include 'includes/header.php'; ?>

<div class="bg-teal fg-white p-6 shadow-2 mb-6">
    <div class="container">
        <h1><i class="fas fa-gauge-high"></i> Mi Tablero Académico</h1>
        <p class="text-leader">Bienvenid@. Selecciona un módulo para gestionar tu ciclo universitario:</p>
    </div>
</div>

<div class="container mb-8">
    <h3 class="text-light mb-4"><i class="fas fa-graduation-cap fg-blue"></i> Mis Asignaturas Activas</h3>

    <div class="d-flex flex-row flex-wrap gap-4 mb-8 align-items-start">
        <!-- Tile Large 1 -->
        <a href="silabo.php" data-role="tile" data-size="large" class="bg-cobalt fg-white shadow-2 m-0">
            <span class="mif-code icon"></span>
            <span class="branding-bar">Programación Web</span>
            <span class="badge-top">Ciclo 2026-II</span>
        </a>

        <!-- Tile Large 2 (Bases de Datos) -->
        <a href="material.php" data-role="tile" data-size="large" class="bg-emerald fg-white shadow-2 m-0">
            <span class="mif-database icon"></span>
            <span class="branding-bar">Bases de Datos</span>
            <span class="badge-top">Ciclo 2026-II</span>
        </a>

        <!-- Columna Vertical con los 2 Wide -->
        <div class="d-flex flex-column m-0">
            <a href="anuncios_curso.php" data-role="tile" data-size="wide" class="bg-crimson fg-white shadow-2 m-0" style="height: 155px;">
                <span class="mif-volume-high icon"></span>
                <span class="branding-bar">Avisos de Profesores</span>
                <span class="badge-bottom bg-yellow fg-black">2 Pendientes</span>
            </a>
            <a href="anuncios_curso.php" data-role="tile" data-size="wide" class="bg-green fg-white shadow-2 m-0" style="height: 155px;">
                <span class="mif-books icon"></span>
                <span class="branding-bar">Biblioteca Virtual</span>
                <span class="badge-top">+100 recursos</span>
            </a>
        </div>
    </div>

    <h3 class="text-light mb-4"><i class="fas fa-sliders fg-orange"></i> Servicios y Herramientas</h3>

    <div class="d-flex flex-wrap gap-4">
        <a href="matricula.php" data-role="tile" data-size="medium" class="bg-amber fg-white shadow-1">
            <span class="mif-file-text icon"></span>
            <span class="branding-bar">Matrícula</span>
        </a>

        <a href="calificaciones.php" data-role="tile" data-size="medium" class="bg-cyan fg-white shadow-1">
            <span class="mif-table icon"></span>
            <span class="branding-bar">Notas</span>
        </a>

        <a href="encuesta.php" data-role="tile" data-size="medium" class="bg-violet fg-white shadow-1">
            <span class="mif-clipboard icon"></span>
            <span class="branding-bar">Encuestas</span>
        </a>

        <a href="perfil.php" data-role="tile" data-size="medium" class="bg-steel fg-white shadow-1">
            <span class="mif-cog icon"></span>
            <span class="branding-bar">Ajustes</span>
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>