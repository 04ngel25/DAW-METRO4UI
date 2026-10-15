<?php
    $titulo = 'Calendario';

    $eventos = array(
        '2026-10-20' => array('tipo' => 'entrega', 'texto' => 'Trabajo 1 - Programación Web'),
        '2026-10-28' => array('tipo' => 'entrega', 'texto' => 'Informe de requisitos - Ingeniería de Requisitos'),
        '2026-11-06' => array('tipo' => 'evento',  'texto' => 'Feria de proyectos'),
        '2026-11-13' => array('tipo' => 'entrega', 'texto' => 'Proyecto final - Bases de Datos'),
        '2026-11-20' => array('tipo' => 'evento',  'texto' => 'Charla de ciberseguridad (auditorio)'),
        '2026-11-30' => array('tipo' => 'evento',  'texto' => 'Cierre de la encuesta docente'),
        '2026-12-07' => array('tipo' => 'examen',  'texto' => 'Examen final - Programación Web'),
        '2026-12-09' => array('tipo' => 'examen',  'texto' => 'Examen final - Bases de Datos'),
        '2026-12-11' => array('tipo' => 'examen',  'texto' => 'Examen final - Física I'),
        '2026-12-14' => array('tipo' => 'examen',  'texto' => 'Examen final - Ingeniería de Requisitos')
    );

    $colores = array('examen' => '#e51400', 'entrega' => '#fa6800', 'evento' => '#1ba1e2');
    $clases  = array('examen' => 'fg-red', 'entrega' => 'fg-orange', 'evento' => 'fg-cyan');
    $nombres = array('examen' => 'Examen', 'entrega' => 'Entrega de trabajo', 'evento' => 'Evento institucional');

    $meses = array('', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
                   'agosto', 'setiembre', 'octubre', 'noviembre', 'diciembre');

    function fecha_texto($fecha) {
        global $meses;
        $p = explode('-', $fecha);
        return (int) $p[2] . ' de ' . $meses[(int) $p[1]];
    }

    // dia elegido desde la lista (calendario.php?dia=2026-10-20)
    $dia = isset($_GET['dia']) && isset($eventos[$_GET['dia']]) ? $_GET['dia'] : '';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once 'INCLUDES/head.php';
        ?>
        <style>
            /* pinta en el calendario cada fecha con evento */
            <?php foreach ($eventos as $fecha => $ev) { ?>
            .calendar .day[data-day="<?php echo $fecha; ?>"] {
                background-color: <?php echo $colores[$ev['tipo']]; ?>;
                color: #fff;
            }
            <?php } ?>
        </style>
    </head>
    <body>
        <?php
        include_once 'INCLUDES/header.php';
        ?>

        <div class="container pagina">
            <h1>Calendario Académico</h1>
            <p class="text-muted">Semestre 2026-II. Elige una fecha de la lista para ver su detalle.</p>

            <p class="leyenda">
                <span class="bg-red"></span>Exámenes &nbsp;&nbsp;
                <span class="bg-orange"></span>Entrega de trabajos &nbsp;&nbsp;
                <span class="bg-cyan"></span>Eventos institucionales
            </p>

            <div class="row">
                <div class="cell-md-6 mb-4">
                    <div data-role="calendar"
                         data-locale="es-MX"
                         data-week-start="1"
                         data-show-header="false"
                         data-show-footer="false"
                         <?php if ($dia != '') { ?>
                         data-show="<?php echo $dia; ?>"
                         <?php } ?>></div>

                    <?php if ($dia != '') { ?>
                    <div class="border bd-default p-4 mt-4">
                        <h5 class="m-0"><?php echo fecha_texto($dia); ?></h5>
                        <p class="<?php echo $clases[$eventos[$dia]['tipo']]; ?> m-0"><?php echo $nombres[$eventos[$dia]['tipo']]; ?></p>
                        <p><?php echo $eventos[$dia]['texto']; ?></p>
                    </div>
                    <?php } ?>
                </div>

                <div class="cell-md-6">
                    <h4>Próximas fechas</h4>
                    <ul class="unstyled-list">
                        <?php foreach ($eventos as $fecha => $ev) { ?>
                        <li class="mb-2">
                            <span class="mif-calendar mr-2 <?php echo $clases[$ev['tipo']]; ?>"></span>
                            <a href="calendario.php?dia=<?php echo $fecha; ?>"><b><?php echo fecha_texto($fecha); ?></b></a>
                            - <?php echo $ev['texto']; ?>
                        </li>
                        <?php } ?>
                    </ul>
                    <a href="progreso.php" class="button">Ver mi progreso</a>
                </div>
            </div>
        </div>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
