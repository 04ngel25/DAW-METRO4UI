<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Campus Virtual - Metro 4 UI</title>
    <meta name="metro4:locale" content="es-MX">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/4.5.12/metro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/current/icons.css"/>
    <link rel="stylesheet" href="CSS/style.css">

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
                        <li><a href="calendario.php" class="fg-white">Calendario</a></li>
                        <li><a href="progreso.php" class="fg-white">Metricas</a></li>
                        <li><a href="soporte.php" class="fg-white">Soporte</a></li>
                    </ul>
                </li>

                <li><a href="nosotros.php" class="fg-white"><span class="mif-users"></span> El Equipo</a></li>
            </ul>
        </div>
    </header>

    <!-- Contenedor Principal que envuelve el contenido de cada página -->
    <main class="container" style="padding-top: 80px; min-height: 75vh;">