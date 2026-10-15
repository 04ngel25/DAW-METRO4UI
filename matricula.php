<?php include 'includes/header.php'; ?>

<div class="bg-amber fg-white p-6 shadow-2 mb-6">
    <h1>
        <span class="mif-file-text icon"></span>
        Preselección de Matrícula
    </h1>
    <p class="text-leader">
        Organiza tus asignaturas para el periodo académico 2026-II.
    </p>
</div>

<div class="container mb-8">

    <div class="bg-white p-5 shadow-2 mb-2">
        <h3 class="fg-green">
            <span class="mif-checkmark"></span>
            Preselección de asignaturas
        </h3>
        <p>
            Selecciona el ciclo y los cursos que deseas llevar.
        </p>
        <p class="text-muted">
            Esta página es una demostración visual y no registra una matrícula oficial.
        </p>
    </div>

    <div class="row">

        <div class="cell-4">
            <div class="bg-white p-5 shadow-2 mb-4">
                <h3>
                    <span class="mif-user fg-amber"></span>
                    Datos académicos
                </h3>

                <label for="codigo">Código de estudiante</label>
                <input type="text" id="codigo" data-role="input" value="2026-00001" readonly>

                <label for="ciclo">Ciclo de estudios</label>
                <select id="ciclo" data-role="select">
                    <option value="VII">VII ciclo</option>
                    <option value="VIII">VIII ciclo</option>
                    <option value="IX" selected>IX ciclo</option>
                    <option value="X">X ciclo</option>
                </select>

                <div class="bg-light p-3 mt-4">
                    <strong>
                        <span class="mif-info"></span>
                        Importante
                    </strong>
                    <p>
                        Esta página simula una preselección y no confirma una matrícula oficial.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="cell-8">
            <div class="bg-white p-5 shadow-2 mb-4">
                <h3>
                    <span class="mif-book fg-cyan"></span>
                    Asignaturas disponibles
                </h3>
                <p class="text-muted">
                    Marca los cursos que deseas llevar.
                </p>

                <form>
                    <div class="border p-3 mb-2">
                        <label>
                            <input type="checkbox" name="cursos[]" value="BD">
                            <strong>Bases de Datos Avanzadas</strong>
                        </label>
                        <span class="place-right">4 créditos</span>
                    </div>

                    <div class="border p-3 mb-2">
                        <label>
                            <input type="checkbox" name="cursos[]" value="WEB">
                            <strong>Desarrollo Web</strong>
                        </label>
                        <span class="place-right">3 créditos</span>
                    </div>

                    <div class="border p-3 mb-2">
                        <label>
                            <input type="checkbox" name="cursos[]" value="SEG">
                            <strong>Seguridad Informática</strong>
                        </label>
                        <span class="place-right">3 créditos</span>
                    </div>

                    <div class="border p-3 mb-2">
                        <label>
                            <input type="checkbox" name="cursos[]" value="IA">
                            <strong>Sistemas Inteligentes</strong>
                        </label>
                        <span class="place-right">4 créditos</span>
                    </div>

                    <div class="border p-3 mb-4">
                        <label>
                            <input type="checkbox" name="cursos[]" value="TI">
                            <strong>Gestión de TI</strong>
                        </label>
                        <span class="place-right">3 créditos</span>
                    </div>

                    <button type="button" class="button success">
                        <span class="mif-checkmark"></span>
                        Calcular preselección
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>