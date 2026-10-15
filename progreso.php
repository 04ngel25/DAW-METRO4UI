<?php
    $titulo = 'Mi Progreso';

    $cursos = array(
        array('nombre' => 'Programación Web',         'avance' => 60, 'color' => 'bg-cyan'),
        array('nombre' => 'Bases de Datos',           'avance' => 55, 'color' => 'bg-green'),
        array('nombre' => 'Física I',                 'avance' => 50, 'color' => 'bg-orange'),
        array('nombre' => 'Ingeniería de Requisitos', 'avance' => 65, 'color' => 'bg-violet')
    );

    $creditos_aprobados = 25;
    $creditos_carrera = 200;
    $avance_carrera = round($creditos_aprobados * 100 / $creditos_carrera);
?>
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
            <h1>Métricas de Rendimiento</h1>
            <p class="text-muted">Semestre 2026-II · Ingeniería de Sistemas</p>

            <div class="row mb-4">
                <div class="cell-6 cell-md-3 mb-2">
                    <div class="dato bg-cyan">
                        <div class="h1" data-role="counter" data-value="<?php echo $creditos_aprobados; ?>">0</div>
                        Créditos aprobados
                    </div>
                </div>
                <div class="cell-6 cell-md-3 mb-2">
                    <div class="dato bg-green">
                        <div class="h1" data-role="counter" data-value="<?php echo count($cursos); ?>">0</div>
                        Cursos en curso
                    </div>
                </div>
                <div class="cell-6 cell-md-3 mb-2">
                    <div class="dato bg-orange">
                        <div class="h1" data-role="counter" data-value="18">0</div>
                        Tareas entregadas
                    </div>
                </div>
                <div class="cell-6 cell-md-3 mb-2">
                    <div class="dato bg-violet">
                        <div class="h1" data-role="counter" data-value="92" data-suffix="%">0</div>
                        Asistencia
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="cell-md-4 text-center mb-4">
                    <h4>Avance de la carrera</h4>
                    <div data-role="donut" data-value="<?php echo $avance_carrera; ?>" data-size="160" data-fill="#1ba1e2" data-animate="15" class="mx-auto"></div>
                    <p class="text-muted"><?php echo $creditos_aprobados; ?> de <?php echo $creditos_carrera; ?> créditos</p>
                    <a href="calificaciones.php" class="button">Ver mis notas</a>
                </div>

                <div class="cell-md-8">
                    <h4>Avance de cursos en curso</h4>

                    <?php foreach ($cursos as $curso) { ?>
                    <p class="mb-1"><?php echo $curso['nombre']; ?> <span class="place-right"><?php echo $curso['avance']; ?>%</span></p>
                    <div data-role="progress" data-value="<?php echo $curso['avance']; ?>" data-cls-bar="<?php echo $curso['color']; ?>" class="mb-4"></div>
                    <?php } ?>

                    <a href="calendario.php" class="button">Ver próximas fechas</a>
                </div>
            </div>
        </div>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
