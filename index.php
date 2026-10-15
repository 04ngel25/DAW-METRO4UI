<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="cell-12">
        <!-- Tarjeta blanca con sombra -->
        <div class="bg-white p-6 shadow border bd-default">
            
            <div class="text-center mb-6">
                <h1 class="text-light"><i class="fas fa-university fg-blue"></i> Bienvenid@ al Campus Virtual</h1>
                <p class="text-muted">Tu plataforma integral de aprendizaje y gestión académica en línea.</p>
            </div>

            <!-- Componente Carousel de Metro 4 UI -->
            <div data-role="carousel" 
                 data-height="380" 
                 data-cls-bullet="bullet-style" 
                 data-auto-start="true" 
                 data-period="4000" 
                 class="mb-6 shadow border bd-system">
                 
                <!-- Diapositiva 1 -->
                <div class="slide p-8 bg-darkCyan fg-white text-center flex-column flex-justify-center flex-align-center">
                    <i class="fas fa-laptop-code fa-4x mb-4"></i>
                    <h2>Aprende a tu Propio Ritmo</h2>
                    <p class="text-leader">Accede a tus materiales de clase, videos y sílabos las 24 horas del día.</p>
                </div>

                <!-- Diapositiva 2 -->
                <div class="slide p-8 bg-darkBlue fg-white text-center flex-column flex-justify-center flex-align-center">
                    <i class="fas fa-users-line fa-4x mb-4"></i>
                    <h2>Comunidad Interactiva</h2>
                    <p class="text-leader">Conéctate con tus docentes y compañeros a través de nuestro directorio oficial.</p>
                </div>

                <!-- Diapositiva 3 -->
                <div class="slide p-8 bg-darkCrimson fg-white text-center flex-column flex-justify-center flex-align-center">
                    <i class="fas fa-chart-line fa-4x mb-4"></i>
                    <h2>Monitorea tu Rendimiento</h2>
                    <p class="text-leader">Revisa tus calificaciones y avances académicos en tiempo real de forma segura.</p>
                </div>
            </div>

            <!-- Accesos rápidos destacados -->
            <div class="row mt-4">
                <div class="cell-md-4">
                    <div class="p-4 border bd-blue bg-light text-center border-radius-4">
                        <i class="fas fa-right-to-bracket fa-2x fg-blue mb-2"></i>
                        <h5>Acceso a Mi Tablero</h5>
                        <p class="text-small">Ingresa directamente a tus cursos matriculados.</p>
                        <a href="dashboard.php" class="button primary small mt-2"><i class="fas fa-arrow-right"></i> Ir al Tablero</a>
                    </div>
                </div>
                <div class="cell-md-4">
                    <div class="p-4 border bd-green bg-light text-center border-radius-4">
                        <i class="fas fa-user-plus fa-2x fg-green mb-2"></i>
                        <h5>Matrícula en Línea</h5>
                        <p class="text-small">Inscríbete en las asignaturas del nuevo ciclo.</p>
                        <a href="matricula.php" class="button success small mt-2"><i class="fas fa-arrow-right"></i> Matricularse</a>
                    </div>
                </div>
                <div class="cell-md-4">
                    <div class="p-4 border bd-orange bg-light text-center border-radius-4">
                        <i class="fas fa-circle-info fa-2x fg-orange mb-2"></i>
                        <h5>Sobre el Equipo</h5>
                        <p class="text-small">Conoce a los desarrolladores de este proyecto.</p>
                        <a href="nosotros.php" class="button warning small mt-2"><i class="fas fa-arrow-right"></i> Ver Equipo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>