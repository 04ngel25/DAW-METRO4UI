<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="cell-12">
        <div class="bg-white p-6 shadow border bd-default">
            
            <h1 class="text-light"><i class="fas fa-bullhorn fg-red"></i> Tablón de Anuncios</h1>
            <hr class="bg-grayLight">
            <p class="text-muted">Avisos importantes publicados por los profesores del curso:</p>

            <!-- Panel 1: Estilo Celeste (Cyan) -->
            <div data-role="panel" 
                 data-title-caption="<i class='fas fa-exclamation-triangle'></i> Aviso Importante: Examen Parcial" 
                 data-cls-panel="border bd-cyan mb-4 shadow" 
                 data-cls-header="bg-cyan fg-white font-weight-bold">
                <p class="p-2">El examen parcial se llevará a cabo el próximo lunes a las 10:00 AM. Recuerden traer sus computadoras con XAMPP configurado.</p>
                <small class="text-muted p-2">Publicado hace 2 días por el Departamento Académico</small>
            </div>

            <!-- Panel 2: Estilo Verde (Green) -->
            <div data-role="panel" 
                 data-title-caption="<i class='fas fa-tasks'></i> Recordatorio de Tarea" 
                 data-cls-panel="border bd-green shadow" 
                 data-cls-header="bg-green fg-white font-weight-bold">
                <p class="p-2">No olviden subir sus códigos en PHP utilizando los archivos <code>includes/header.php</code> antes del viernes a la medianoche.</p>
                <small class="text-muted p-2">Publicado hace 4 días por el Profesor del Curso</small>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>