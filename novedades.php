<?php include 'includes/header.php'; ?>

<!-- Encabezado superior completo -->
<div class="bg-darkCrimson fg-white p-6 shadow-2 mb-6">
    <div class="container">
        <h1><i class="fas fa-newspaper"></i> Novedades e Información General</h1>
        <p class="text-leader">Consulta los comunicados oficiales más recientes emitidos por la institución:</p>
    </div>
</div>

<div class="container mb-8">
    <div data-role="accordion" 
         data-one-frame="true" 
         data-show-number="false" 
         class="shadow-2 border bd-system">

        <!-- Marco / Frame 1 -->
        <div class="frame active">
            <!-- Agregamos pl-8 para dar espacio suficiente a la flecha desplegable nativa de Metro 4 -->
            <div class="heading bg-darkBlue fg-white p-3 pl-8 font-weight-bold">
                <i class="fas fa-bullhorn ml-2 mr-2"></i> Inicio del Proceso de Matrícula 2026-II
            </div>
            <div class="content p-5 bg-white">
                <h4>Proceso de Matrícula Regular</h4>
                <p>Se informa a toda la comunidad estudiantil que la fecha límite para el registro regular de asignaturas en el sistema estará habilitada hasta este fin de mes.</p>
                <p>Revisen el módulo de <a href="matricula.php" class="fg-blue font-weight-bold">Matrícula</a> para verificar la disponibilidad de sus horarios asignados.</p>
                <hr>
                <small class="text-muted"><i class="fas fa-clock"></i> Publicado: Hace 1 día por Dirección Académica</small>
            </div>
        </div>

        <!-- Marco / Frame 2 -->
        <div class="frame">
            <div class="heading bg-darkCyan fg-white p-3 pl-8 font-weight-bold">
                <i class="fas fa-wrench ml-2 mr-2"></i> Mantenimiento Programado de la Plataforma
            </div>
            <div class="content p-5 bg-white">
                <h4>Optimización de Servidores</h4>
                <p>El próximo domingo de 02:00 AM a 06:00 AM se llevarán a cabo labores de mantenimiento en la base de datos central.</p>
                <p>Se sugiere a los estudiantes guardar sus avances antes del horario fijado para evitar inconvenientes.</p>
                <hr>
                <small class="text-muted"><i class="fas fa-clock"></i> Publicado: Hace 3 días por Soporte Técnico</small>
            </div>
        </div>

        <!-- Marco / Frame 3 -->
        <div class="frame">
            <div class="heading bg-darkEmerald fg-white p-3 pl-8 font-weight-bold">
                <i class="fas fa-trophy ml-2 mr-2"></i> Convocatoria para Proyectos de Innovación
            </div>
            <div class="content p-5 bg-white">
                <h4>Feria de Tecnología 2026</h4>
                <p>Queda abierta la recepción de propuestas para la Feria de Innovación Educativa. Se otorgarán becas de reconocimiento a los mejores proyectos estáticos y dinámicos.</p>
                <p>Para más detalles, pónganse en contacto a través de la sección <a href="directorio.php" class="fg-green font-weight-bold">Directorio de Contactos</a>.</p>
                <hr>
                <small class="text-muted"><i class="fas fa-clock"></i> Publicado: Hace 5 días por Coordinación de Investigación</small>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>