<?php
    session_start();
    date_default_timezone_set('America/Lima');
    $titulo = 'Soporte';

    $cursos = array('Programación Web', 'Bases de Datos', 'Física I', 'Ingeniería de Requisitos');
    $prioridades = array('Baja', 'Media', 'Alta');
    $colores_estado = array('Pendiente' => 'fg-cyan', 'En atención' => 'fg-orange', 'Resuelto' => 'fg-green');
    $colores_prioridad = array('Baja' => 'bg-gray', 'Media' => 'bg-orange', 'Alta' => 'bg-red');
    $bordes_estado = array('Pendiente' => 'borde-cyan', 'En atención' => 'borde-orange', 'Resuelto' => 'borde-green');

    // tickets de ejemplo (se guardan en la sesion mientras el navegador este abierto)
    if (!isset($_SESSION['tickets']) || isset($_GET['reiniciar'])) {
        $_SESSION['tickets'] = array(
            1021 => array('tipo' => 'Académico', 'curso' => 'Bases de Datos', 'prioridad' => 'Media', 'fecha' => '02/10/2026',
                          'asunto' => 'No puedo ver el sílabo del curso', 'detalle' => 'Al entrar a la sección del curso no aparece el sílabo.',
                          'estado' => 'Resuelto', 'respuesta' => 'El sílabo ya fue publicado por la docente. Puedes verlo desde la sección de material del curso.'),
            1034 => array('tipo' => 'Técnico', 'curso' => '', 'prioridad' => 'Alta', 'fecha' => '12/10/2026',
                          'asunto' => 'Error al subir mi tarea', 'detalle' => 'Me sale error cuando intento subir un PDF de 8 MB.',
                          'estado' => 'En atención', 'respuesta' => 'Estamos revisando el problema. El plazo de entrega se amplió 24 horas para los alumnos afectados.')
        );
        if (isset($_GET['reiniciar'])) {
            header('Location: soporte.php');
            exit;
        }
    }

    $tickets =& $_SESSION['tickets'];

    $abrir_nuevo = '';     // Técnico o Académico
    $ver = 0;              // ticket a mostrar
    $cerrar = 0;           // ticket a confirmar
    $ayuda = isset($_GET['ayuda']);
    $error = '';
    $datos = array('asunto' => '', 'curso' => '', 'prioridad' => 'Media', 'detalle' => '');

    if (isset($_GET['nuevo'])) {
        $abrir_nuevo = $_GET['nuevo'] == 'academico' ? 'Académico' : 'Técnico';
    }
    if (isset($_GET['ver']) && isset($tickets[(int) $_GET['ver']])) {
        $ver = (int) $_GET['ver'];
    }
    if (isset($_GET['cerrar']) && isset($tickets[(int) $_GET['cerrar']])) {
        $cerrar = (int) $_GET['cerrar'];
    }

    // formularios enviados
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

        if ($accion == 'crear') {
            $tipo = $_POST['tipo'] == 'Académico' ? 'Académico' : 'Técnico';
            $datos = array(
                'asunto'    => trim($_POST['asunto']),
                'curso'     => isset($_POST['curso']) && in_array($_POST['curso'], $cursos) ? $_POST['curso'] : '',
                'prioridad' => in_array($_POST['prioridad'], $prioridades) ? $_POST['prioridad'] : 'Media',
                'detalle'   => trim($_POST['detalle'])
            );

            if ($datos['asunto'] == '') {
                $error = 'Escribe el asunto del ticket.';
            } elseif ($tipo == 'Académico' && $datos['curso'] == '') {
                $error = 'Selecciona el curso de tu consulta.';
            }

            if ($error != '') {
                $abrir_nuevo = $tipo;   // se vuelve a mostrar el formulario con lo que escribio
            } else {
                $numero = max(array_keys($tickets)) + 1;
                $tickets[$numero] = array(
                    'tipo' => $tipo,
                    'curso' => $datos['curso'],
                    'prioridad' => $datos['prioridad'],
                    'fecha' => date('d/m/Y'),
                    'asunto' => $datos['asunto'],
                    'detalle' => $datos['detalle'],
                    'estado' => 'Pendiente',
                    'respuesta' => 'Tu ticket fue recibido. Te responderemos en un máximo de 48 horas.'
                );
                header('Location: soporte.php?aviso=creado&n=' . $numero);
                exit;
            }
        }

        if ($accion == 'cerrar' && isset($tickets[(int) $_POST['numero']])) {
            $numero = (int) $_POST['numero'];
            $tickets[$numero]['estado'] = 'Resuelto';
            $tickets[$numero]['respuesta'] = 'Marcaste este ticket como resuelto.';
            header('Location: soporte.php?aviso=cerrado&n=' . $numero);
            exit;
        }
    }

    // toast segun lo que paso
    $aviso = '';
    $aviso_clase = '';
    if ($error != '') {
        $aviso = $error;
        $aviso_clase = 'alert';
    } elseif (isset($_GET['aviso']) && isset($_GET['n'])) {
        $n = (int) $_GET['n'];
        if ($_GET['aviso'] == 'creado') {
            $aviso = 'Ticket N.° ' . $n . ' enviado correctamente';
            $aviso_clase = 'success';
        } elseif ($_GET['aviso'] == 'cerrado') {
            $aviso = 'Ticket N.° ' . $n . ' marcado como resuelto';
            $aviso_clase = 'info';
        }
    }

    // resumen y filtro
    $total = array('Pendiente' => 0, 'En atención' => 0, 'Resuelto' => 0);
    foreach ($tickets as $t) {
        $total[$t['estado']]++;
    }

    $filtros = array('todos' => 'Todos', 'Pendiente' => 'Pendientes', 'En atención' => 'En atención', 'Resuelto' => 'Resueltos');
    $filtro = isset($_GET['filtro']) && isset($filtros[$_GET['filtro']]) ? $_GET['filtro'] : 'todos';

    function e($texto) {
        return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
    }
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
            <div class="d-flex flex-justify-between flex-align-center flex-wrap">
                <div>
                    <h1>Centro de Ayuda</h1>
                    <p class="text-muted">Abre un ticket o revisa el estado de tus consultas.</p>
                </div>
                <a href="soporte.php?ayuda=1" class="button outline"><span class="mif-question mr-2"></span>Ayuda rápida</a>
            </div>

            <div class="row mb-4">
                <div class="cell-4">
                    <div class="resumen borde-cyan">
                        <span class="h2 fg-cyan"><?php echo $total['Pendiente']; ?></span>
                        <span>Pendientes</span>
                    </div>
                </div>
                <div class="cell-4">
                    <div class="resumen borde-orange">
                        <span class="h2 fg-orange"><?php echo $total['En atención']; ?></span>
                        <span>En atención</span>
                    </div>
                </div>
                <div class="cell-4">
                    <div class="resumen borde-green">
                        <span class="h2 fg-green"><?php echo $total['Resuelto']; ?></span>
                        <span>Resueltos</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="cell-md-6 mb-4">
                    <div class="border bd-default p-4 h-100">
                        <h4><span class="mif-cogs fg-cyan mr-2"></span>Soporte técnico</h4>
                        <p class="text-muted">Problemas para ingresar, subir archivos o ver contenido de la plataforma.</p>
                        <a href="soporte.php?nuevo=tecnico" class="button primary">Abrir ticket técnico</a>
                    </div>
                </div>
                <div class="cell-md-6 mb-4">
                    <div class="border bd-default p-4 h-100">
                        <h4><span class="mif-books fg-orange mr-2"></span>Soporte académico</h4>
                        <p class="text-muted">Consultas sobre notas, matrícula, horarios o sílabos de un curso.</p>
                        <a href="soporte.php?nuevo=academico" class="button warning">Abrir ticket académico</a>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-justify-between flex-align-center flex-wrap mt-4">
                <h4 class="m-0">Mis tickets</h4>
                <div class="filtros">
                    <?php foreach ($filtros as $clave => $nombre) { ?>
                    <a href="soporte.php?filtro=<?php echo urlencode($clave); ?>"
                       class="button small <?php echo $filtro == $clave ? 'primary' : ''; ?>"><?php echo $nombre; ?></a>
                    <?php } ?>
                </div>
            </div>

            <?php
                $mostrados = 0;
                foreach (array_reverse($tickets, true) as $numero => $t) {
                    if ($filtro != 'todos' && $t['estado'] != $filtro) {
                        continue;
                    }
                    $mostrados++;
            ?>
            <div class="ticket <?php echo $bordes_estado[$t['estado']]; ?>">
                <div class="d-flex flex-justify-between flex-wrap">
                    <div>
                        <b>N.° <?php echo $numero; ?></b>
                        <span class="etiqueta <?php echo $colores_prioridad[$t['prioridad']]; ?> fg-white">Prioridad <?php echo strtolower($t['prioridad']); ?></span>
                        <span class="<?php echo $colores_estado[$t['estado']]; ?> ml-2"><?php echo $t['estado']; ?></span>
                    </div>
                    <span class="text-muted"><?php echo $t['fecha']; ?></span>
                </div>
                <p class="mt-1 mb-1"><?php echo e($t['asunto']); ?></p>
                <small class="text-muted">
                    <?php echo $t['tipo']; ?><?php echo $t['curso'] != '' ? ' · ' . $t['curso'] : ''; ?>
                </small>
                <div class="mt-2">
                    <a href="soporte.php?ver=<?php echo $numero; ?>" class="button small">Ver detalle</a>
                    <?php if ($t['estado'] != 'Resuelto') { ?>
                    <a href="soporte.php?cerrar=<?php echo $numero; ?>" class="button small success">Marcar como resuelto</a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>

            <?php if ($mostrados == 0) { ?>
            <p class="text-muted mt-4">No tienes tickets en este estado.</p>
            <?php } ?>

            <p class="mt-6"><a href="soporte.php?reiniciar=1" class="text-muted"><small>Restablecer tickets de ejemplo</small></a></p>
        </div>

        <?php if ($abrir_nuevo != '') { ?>
        <!-- ventana: nuevo ticket -->
        <div class="dialog" data-role="dialog" data-show="true" data-width="560">
            <form method="post" action="soporte.php">
                <div class="dialog-title">Nuevo ticket <?php echo strtolower($abrir_nuevo); ?></div>
                <div class="dialog-content">
                    <input type="hidden" name="accion" value="crear">
                    <input type="hidden" name="tipo" value="<?php echo $abrir_nuevo; ?>">

                    <?php if ($error != '') { ?>
                    <p class="fg-red"><span class="mif-warning mr-1"></span><?php echo $error; ?></p>
                    <?php } ?>

                    <label>Asunto *</label>
                    <input type="text" name="asunto" maxlength="80" class="campo" value="<?php echo e($datos['asunto']); ?>">

                    <?php if ($abrir_nuevo == 'Académico') { ?>
                    <label>Curso *</label>
                    <select name="curso" class="campo">
                        <option value="">Selecciona un curso</option>
                        <?php foreach ($cursos as $c) { ?>
                        <option <?php echo $datos['curso'] == $c ? 'selected' : ''; ?>><?php echo $c; ?></option>
                        <?php } ?>
                    </select>
                    <?php } ?>

                    <label>Prioridad</label>
                    <select name="prioridad" class="campo">
                        <?php foreach ($prioridades as $p) { ?>
                        <option <?php echo $datos['prioridad'] == $p ? 'selected' : ''; ?>><?php echo $p; ?></option>
                        <?php } ?>
                    </select>

                    <label>Detalle</label>
                    <textarea name="detalle" rows="4" class="campo"><?php echo e($datos['detalle']); ?></textarea>
                </div>
                <div class="dialog-actions">
                    <a href="soporte.php" class="button">Cancelar</a>
                    <button type="submit" class="button primary">Enviar ticket</button>
                </div>
            </form>
        </div>
        <?php } ?>

        <?php if ($ver != 0) { $t = $tickets[$ver]; ?>
        <!-- ventana: detalle del ticket -->
        <div class="dialog" data-role="dialog" data-show="true" data-width="560">
            <div class="dialog-title">Ticket N.° <?php echo $ver; ?></div>
            <div class="dialog-content">
                <p class="m-0"><b><?php echo e($t['asunto']); ?></b></p>
                <p class="text-muted mt-0">
                    <?php echo $t['tipo']; ?><?php echo $t['curso'] != '' ? ' · ' . $t['curso'] : ''; ?>
                    · <?php echo $t['fecha']; ?> ·
                    <span class="<?php echo $colores_estado[$t['estado']]; ?>"><?php echo $t['estado']; ?></span>
                </p>
                <?php if ($t['detalle'] != '') { ?>
                <p><?php echo nl2br(e($t['detalle'])); ?></p>
                <?php } ?>
                <div class="respuesta">
                    <b>Respuesta de soporte</b><br>
                    <?php echo $t['respuesta']; ?>
                </div>
            </div>
            <div class="dialog-actions">
                <a href="soporte.php" class="button primary">Cerrar</a>
            </div>
        </div>
        <?php } ?>

        <?php if ($cerrar != 0) { ?>
        <!-- ventana: confirmar -->
        <div class="dialog" data-role="dialog" data-show="true">
            <form method="post" action="soporte.php">
                <div class="dialog-title">¿Marcar como resuelto?</div>
                <div class="dialog-content">
                    <input type="hidden" name="accion" value="cerrar">
                    <input type="hidden" name="numero" value="<?php echo $cerrar; ?>">
                    El ticket N.° <?php echo $cerrar; ?> "<?php echo e($tickets[$cerrar]['asunto']); ?>" pasará a resuelto.
                </div>
                <div class="dialog-actions">
                    <a href="soporte.php" class="button">No, volver</a>
                    <button type="submit" class="button success">Sí, marcar resuelto</button>
                </div>
            </form>
        </div>
        <?php } ?>

        <?php if ($ayuda) { ?>
        <!-- ventana: ayuda rapida -->
        <div class="dialog" data-role="dialog" data-show="true" data-width="600">
            <div class="dialog-title"><span class="mif-question mr-2"></span>Ayuda rápida</div>
            <div class="dialog-content">
                <p><b>Olvidé mi contraseña</b><br>
                Entra a <a href="perfil.php">Mi Perfil</a> y usa la opción para cambiarla.</p>
                <p><b>No aparece mi nota</b><br>
                Las notas se publican hasta 7 días después de la evaluación. Revisa tu <a href="calificaciones.php">historial</a>.</p>
                <p><b>¿Cuándo son los exámenes?</b><br>
                Todas las fechas están en el <a href="calendario.php">calendario académico</a>.</p>
                <p><b>Quiero hablar con mi docente</b><br>
                Búscalo en el <a href="directorio.php">directorio</a> y envíale un mensaje.</p>
            </div>
            <div class="dialog-actions">
                <a href="soporte.php?nuevo=tecnico" class="button">Aún necesito ayuda</a>
                <a href="soporte.php" class="button primary">Entendido</a>
            </div>
        </div>
        <?php } ?>

        <?php if ($aviso != '') { ?>
        <div class="toast <?php echo $aviso_clase; ?> aviso"><?php echo $aviso; ?></div>
        <?php } ?>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
