<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Campus Virtual - Metro 4 UI</title>

    <!-- CSS de Metro 4 UI (CDN Oficial) -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <!-- Enlace a FontAwesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-white">

    <!-- Barra de Navegación Superior (App-bar) -->
    <header>
        <div data-role="appbar" class="bg-dark fg-white" data-expand-point="md">
            <!-- Logo / Marca -->
            <a href="index.php" class="brand fg-white no-hover pl-4 pr-4">
                <span class="mif-school mif-2x"></span>
                <span class="pl-2 font-weight-bold">CAMPUS VIRTUAL</span>
            </a>

            <!-- Menú de Enlaces Principal -->
            <ul class="app-bar-menu ml-auto">
                <li><a href="index.php" class="fg-white"><span class="mif-home"></span> Inicio</a></li>
                <li><a href="dashboard.php" class="fg-white"><span class="mif-dashboard"></span> Mi Tablero</a></li>

                <!-- Menú Desplegable de Servicios y Académicos -->
                <li>
                    <a href="#" class="dropdown-toggle fg-white"><span class="mif-books"></span> Secciones</a>
                    <ul class="d-menu bg-dark fg-white" data-role="dropdown">
                        <li><a href="novedades.php" class="fg-white">Novedades</a></li>
                        <li><a href="calificaciones.php" class="fg-white">Calificaciones</a></li>
                        <li><a href="directorio.php" class="fg-white">Directorio</a></li>
                        <li><a href="matricula.php" class="fg-white">Matrícula</a></li>
                        <li><a href="encuesta.php" class="fg-white">Encuesta / Wizard</a></li>
                        <li><a href="perfil.php" class="fg-white">Perfil</a></li>
                        <li><a href="material.php" class="fg-white">Material (TreeView)</a></li>
                        <li><a href="silabo.php" class="fg-white">Sílabo (Tabs)</a></li>
                        <li><a href="anuncios_curso.php" class="fg-white">Anuncios (Panels)</a></li>
                    </ul>
                </li>

                <li><a href="nosotros.php" class="fg-white"><span class="mif-users"></span> El Equipo</a></li>
            </ul>
        </div>
    </header>

    <!-- Contenedor Principal que envuelve el contenido de cada página -->
    <main class="container" style="padding-top: 80px; min-height: 75vh;">