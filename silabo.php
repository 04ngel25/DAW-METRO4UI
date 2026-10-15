<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="cell-12">
        <div class="bg-white p-6 shadow border bd-default">
            
            <h1 class="text-light"><i class="fas fa-book-reader fg-blue"></i> Sílabo del Curso</h1>
            <hr class="bg-grayLight">
            <p class="text-muted">Selecciona una unidad para ver los detalles académicos correspondientes:</p>

            <!-- Pestañas horizontales -->
            <ul data-role="tabs" data-expand="true" class="tabs-list">
                <li><a href="#unidad1"><i class="fas fa-bookmark"></i> Unidad 1</a></li>
                <li><a href="#unidad2"><i class="fas fa-bookmark"></i> Unidad 2</a></li>
                <li><a href="#unidad3"><i class="fas fa-bookmark"></i> Unidad 3</a></li>
            </ul>

            <!-- Contenedor donde cambia el texto según la pestaña -->
            <div class="border bd-default p-5 bg-light">
                <div id="unidad1">
                    <h3><i class="fas fa-laptop-code fg-cyan"></i> Fundamentos de Diseño Web</h3>
                    <p class="mt-2">Conceptos básicos sobre estructuras estáticas, maquetación y la filosofía de diseño plano (*flat design*).</p>
                </div>
                <div id="unidad2">
                    <h3><i class="fas fa-th-large fg-green"></i> Sistemas de Cuadrícula (Grid)</h3>
                    <p class="mt-2">Cómo organizar filas y celdas para que la información se adapte perfectamente a computadoras y teléfonos móviles.</p>
                </div>
                <div id="unidad3">
                    <h3><i class="fas fa-users-cog fg-orange"></i> Proyecto Final y Ensamblaje</h3>
                    <p class="mt-2">Integración de vistas modulares en PHP y unificación del trabajo en equipo mediante Git y GitHub.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>