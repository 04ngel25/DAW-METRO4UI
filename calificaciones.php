<?php $titulo = 'Calificaciones'; ?>
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
            <h1>Historial Académico</h1>
            <p class="text-muted">Notas por semestre · Escala vigesimal, nota mínima aprobatoria 11</p>

            <h3 class="mt-6">Semestre 2026-II <small class="fg-orange">(en curso)</small></h3>
            <table class="table striped row-hover table-border cell-border">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Curso</th>
                        <th class="text-center">Créditos</th>
                        <th class="text-center">Parcial</th>
                        <th class="text-center">Final</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>INF-201</td>
                        <td>Programación Web</td>
                        <td class="text-center">4</td>
                        <td class="text-center">17</td>
                        <td class="text-center">-</td>
                        <td class="text-center fg-orange">En curso</td>
                    </tr>
                    <tr>
                        <td>INF-202</td>
                        <td>Bases de Datos</td>
                        <td class="text-center">4</td>
                        <td class="text-center">13</td>
                        <td class="text-center">-</td>
                        <td class="text-center fg-orange">En curso</td>
                    </tr>
                    <tr>
                        <td>FIS-101</td>
                        <td>Física I</td>
                        <td class="text-center">4</td>
                        <td class="text-center">12</td>
                        <td class="text-center">-</td>
                        <td class="text-center fg-orange">En curso</td>
                    </tr>
                    <tr>
                        <td>INF-203</td>
                        <td>Ingeniería de Requisitos</td>
                        <td class="text-center">3</td>
                        <td class="text-center">15</td>
                        <td class="text-center">-</td>
                        <td class="text-center fg-orange">En curso</td>
                    </tr>
                </tbody>
            </table>

            <h3 class="mt-6">Semestre 2026-I</h3>
            <table class="table striped row-hover table-border cell-border">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Curso</th>
                        <th class="text-center">Créditos</th>
                        <th class="text-center">Parcial</th>
                        <th class="text-center">Final</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MAT-101</td>
                        <td>Matemáticas Discretas</td>
                        <td class="text-center">4</td>
                        <td class="text-center">14</td>
                        <td class="text-center">15</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>INF-102</td>
                        <td>Programación Orientada a Objetos</td>
                        <td class="text-center">4</td>
                        <td class="text-center">16</td>
                        <td class="text-center">17</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>EST-101</td>
                        <td>Estadística General</td>
                        <td class="text-center">3</td>
                        <td class="text-center">12</td>
                        <td class="text-center">14</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>ADM-101</td>
                        <td>Fundamentos de Administración</td>
                        <td class="text-center">3</td>
                        <td class="text-center">15</td>
                        <td class="text-center">16</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">Promedio ponderado</th>
                        <th class="text-center">14</th>
                        <th></th>
                        <th class="text-center">15.57</th>
                        <th class="text-center">14 créditos aprobados</th>
                    </tr>
                </tfoot>
            </table>

            <h3 class="mt-6">Semestre 2025-II</h3>
            <table class="table striped row-hover table-border cell-border">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Curso</th>
                        <th class="text-center">Créditos</th>
                        <th class="text-center">Parcial</th>
                        <th class="text-center">Final</th>
                        <th class="text-center">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MAT-001</td>
                        <td>Matemática Básica</td>
                        <td class="text-center">4</td>
                        <td class="text-center">12</td>
                        <td class="text-center">13</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>COM-001</td>
                        <td>Comunicación</td>
                        <td class="text-center">3</td>
                        <td class="text-center">14</td>
                        <td class="text-center">15</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>INF-101</td>
                        <td>Introducción a la Programación</td>
                        <td class="text-center">4</td>
                        <td class="text-center">15</td>
                        <td class="text-center">16</td>
                        <td class="text-center fg-green">Aprobado</td>
                    </tr>
                    <tr>
                        <td>FIS-101</td>
                        <td>Física I</td>
                        <td class="text-center">4</td>
                        <td class="text-center">09</td>
                        <td class="text-center">10</td>
                        <td class="text-center fg-red">Desaprobado</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2">Promedio ponderado</th>
                        <th class="text-center">15</th>
                        <th></th>
                        <th class="text-center">13.40</th>
                        <th class="text-center">11 créditos aprobados</th>
                    </tr>
                </tfoot>
            </table>

            <p class="mt-4">¿Ves algún error en tus notas? Escríbele a tu docente desde el <a href="directorio.php">directorio</a> o abre un ticket en <a href="soporte.php">soporte</a>.</p>
        </div>

        <?php
        include_once 'INCLUDES/footer.php';
        ?>
    </body>

</html>
