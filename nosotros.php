<?php $titulo = 'El Equipo'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once 'INCLUDES/head.php';
        ?>
    </head>
    <body>
        <?php
        include_once 'INCLUDES/header.php';
        ?>

        <div class="container pagina">
            <h1>Acerca del Equipo</h1>
            <p class="text-muted">Integrantes del proyecto y las páginas que desarrolló cada uno.</p>

            <div class="row">
                <div class="cell-md-6 cell-lg-3 mb-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="IMG/integrante1.jpg" alt="Integrante 1" class="foto-integrante">
                        </div>
                        <div class="card-content p-3">
                            <h5 class="m-0">Nombre Integrante 1</h5>
                            <p class="text-muted">El Estructurador</p>
                        </div>
                        <div class="card-footer d-flex flex-column">
                            <a href="index.php" class="button mb-1">Inicio</a>
                            <a href="dashboard.php" class="button mb-1">Mi Tablero</a>
                            <a href="novedades.php" class="button">Novedades</a>
                        </div>
                    </div>
                </div>

                <div class="cell-md-6 cell-lg-3 mb-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="IMG/integrante2.jpg" alt="Integrante 2" class="foto-integrante">
                        </div>
                        <div class="card-content p-3">
                            <h5 class="m-0">Nombre Integrante 2</h5>
                            <p class="text-muted">El Analista de Datos</p>
                        </div>
                        <div class="card-footer d-flex flex-column">
                            <a href="nosotros.php" class="button mb-1">El Equipo</a>
                            <a href="calificaciones.php" class="button mb-1">Calificaciones</a>
                            <a href="directorio.php" class="button">Directorio</a>
                        </div>
                    </div>
                </div>

                <div class="cell-md-6 cell-lg-3 mb-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="IMG/integrante3.jpg" alt="Integrante 3" class="foto-integrante">
                        </div>
                        <div class="card-content p-3">
                            <h5 class="m-0">Nombre Integrante 3</h5>
                            <p class="text-muted">El Interactivo</p>
                        </div>
                        <div class="card-footer d-flex flex-column">
                            <a href="matricula.php" class="button mb-1">Matrícula</a>
                            <a href="encuesta.php" class="button mb-1">Encuesta Docente</a>
                            <a href="perfil.php" class="button">Mi Perfil</a>
                        </div>
                    </div>
                </div>

                <div class="cell-md-6 cell-lg-3 mb-4">
                    <div class="card">
                        <div class="card-header p-0">
                            <img src="IMG/integrante4.jpg" alt="Integrante 4" class="foto-integrante">
                        </div>
                        <div class="card-content p-3">
                            <h5 class="m-0">Nombre Integrante 4</h5>
                            <p class="text-muted">El Gestor de Utilidades e Interactividad</p>
                        </div>
                        <div class="card-footer d-flex flex-column">
                            <a href="calendario.php" class="button mb-1">Calendario</a>
                            <a href="progreso.php" class="button mb-1">Mi Progreso</a>
                            <a href="soporte.php" class="button">Soporte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
