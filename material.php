<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="cell-12">
        <!-- Tarjeta contenedora blanca con sombra y borde -->
        <div class="bg-white p-6 shadow border bd-default">
            
            <h1 class="text-light"><i class="fas fa-folder-open fg-cyan"></i> Material de Estudio</h1>
            <hr class="bg-grayLight">
            <p class="text-muted">Explora las carpetas y descarga los documentos oficiales de clase:</p>
            
            <!-- Caja contenedora gris claro para el árbol -->
            <div class="p-4 bg-light border bd-system">
                <ul data-role="treeview">
                    <li>
                        <span class="node-toggle"></span>
                        <span class="node-title font-weight-bold"><i class="fas fa-folder fg-amber"></i> Unidad 1: Introducción al Desarrollo Web</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-file-pdf fg-red"></i> Semana 1 - Diapositivas.pdf</a></li>
                            <li><a href="#"><i class="fas fa-file-word fg-blue"></i> Semana 2 - Lectura obligatoria.docx</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="node-toggle"></span>
                        <span class="node-title font-weight-bold"><i class="fas fa-folder fg-amber"></i> Unidad 2: Componentes de Metro 4 UI</span>
                        <ul>
                            <li><a href="#"><i class="fas fa-file-video fg-violet"></i> Video tutorial de instalación.mp4</a></li>
                            <li><a href="#"><i class="fas fa-file-code fg-emerald"></i> Código fuente base.zip</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>