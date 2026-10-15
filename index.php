<?php include 'includes/header.php'; ?>

<div class="bg-cyan fg-white p-8 text-center shadow-2">
    <h1 class="text-light mb-2"><i class="fas fa-university"></i> Bienvenid@ al Campus Virtual</h1>
    <p class="text-leader">Tu plataforma integral de aprendizaje y gestión académica en línea.</p>
</div>

<div data-role="carousel" 
     data-height="360" 
     data-cls-bullet="bullet-style" 
     data-auto-start="true" 
     data-period="4000" 
     class="mt-4 border-none shadow-2">
     
    <div class="slide p-8 bg-darkPink fg-white text-center">
        <i class="fas fa-laptop-code fa-4x mb-4"></i>
        <h2>Aprende a tu Propio Ritmo</h2>
        <p class="text-leader">Accede a tus materiales de clase, videos y sílabos las 24 horas del día.</p>
    </div>

    <div class="slide p-8 bg-darkEmerald fg-white text-center flex-column flex-justify-center flex-align-center">
        <i class="fas fa-users-line fa-4x mb-4"></i>
        <h2>Comunidad Interactiva</h2>
        <p class="text-leader">Conéctate con tus docentes y compañeros a través de nuestro directorio oficial.</p>
    </div>

    <div class="slide p-8 bg-darkCrimson fg-white text-center flex-column flex-justify-center flex-align-center">
        <i class="fas fa-chart-line fa-4x mb-4"></i>
        <h2>Monitorea tu Rendimiento</h2>
        <p class="text-leader">Revisa tus calificaciones y avances académicos en tiempo real de forma segura.</p>
    </div>

</div>

<div class="container mt-6 mb-6">
    <div class="row">
        <div class="cell-md-4">
            <div class="p-5 border bd-blue bg-white shadow-2 text-center border-radius-4">
                <i class="fas fa-right-to-bracket fa-3x fg-blue mb-3"></i>
                <h5>Acceso a Mi Tablero</h5>
                <p class="text-muted">Ingresa directamente a tus cursos matriculados y avisos.</p>
                <a href="dashboard.php" class="button primary small mt-3"><i class="fas fa-arrow-right"></i> Ir al Tablero</a>
            </div>
        </div>
        <div class="cell-md-4">
            <div class="p-5 border bd-green bg-white shadow-2 text-center border-radius-4">
                <i class="fas fa-user-plus fa-3x fg-green mb-3"></i>
                <h5>Matrícula en Línea</h5>
                <p class="text-muted">Inscríbete en las asignaturas del nuevo ciclo académico.</p>
                <a href="matricula.php" class="button success small mt-3"><i class="fas fa-arrow-right"></i> Matricularse</a>
            </div>
        </div>
        <div class="cell-md-4">
            <div class="p-5 border bd-orange bg-white shadow-2 text-center border-radius-4">
                <i class="fas fa-circle-info fa-3x fg-orange mb-3"></i>
                <h5>Sobre el Equipo</h5>
                <p class="text-muted">Conoce a los desarrolladores de este proyecto.</p>
                <a href="nosotros.php" class="button warning small mt-3"><i class="fas fa-arrow-right"></i> Ver Equipo</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>