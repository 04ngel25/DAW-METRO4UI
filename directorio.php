<?php $titulo = 'Directorio'; ?>
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
            <h1>Directorio</h1>
            <p class="text-muted">Docentes y compañeros del ciclo. Haz clic en "Enviar mensaje" para escribirles.</p>

            <ul data-role="listview" data-view="content">
                <li data-caption="Docentes">
                    <ul>
                        <li data-icon="IMG/directorio/jorge_ramirez.jpg"
                            data-caption="Jorge Ramírez"
                            data-content="<span class='text-muted'>Docente de Programación Web</span> · <a href='mailto:jramirez@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/lucia_torres.jpg"
                            data-caption="Lucía Torres"
                            data-content="<span class='text-muted'>Docente de Bases de Datos</span> · <a href='mailto:ltorres@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/martin_quispe.jpg"
                            data-caption="Martín Quispe"
                            data-content="<span class='text-muted'>Docente de Física I</span> · <a href='mailto:mquispe@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/rosa_huaman.jpg"
                            data-caption="Rosa Huamán"
                            data-content="<span class='text-muted'>Docente de Ingeniería de Requisitos</span> · <a href='mailto:rhuaman@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                    </ul>
                </li>
                <li data-caption="Compañeros">
                    <ul>
                        <li data-icon="IMG/directorio/ana_flores.jpg"
                            data-caption="Ana Flores"
                            data-content="<span class='text-muted'>Ingeniería de Sistemas · Ciclo III</span> · <a href='mailto:aflores@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/diego_mendoza.jpg"
                            data-caption="Diego Mendoza"
                            data-content="<span class='text-muted'>Ingeniería de Sistemas · Ciclo III</span> · <a href='mailto:dmendoza@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/valeria_rojas.jpg"
                            data-caption="Valeria Rojas"
                            data-content="<span class='text-muted'>Ingeniería de Software · Ciclo III</span> · <a href='mailto:vrojas@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                        <li data-icon="IMG/directorio/luis_campos.jpg"
                            data-caption="Luis Campos"
                            data-content="<span class='text-muted'>Ingeniería de Software · Ciclo III</span> · <a href='mailto:lcampos@campus.edu.pe'><span class='mif-mail'></span> Enviar mensaje</a>"></li>
                    </ul>
                </li>
            </ul>
        </div>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
