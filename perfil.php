<?php include 'includes/header.php'; ?>

<div class="bg-steel fg-white p-6 shadow-2 mb-6">
    <h1>
        <span class="mif-user"></span>
        Mi perfil académico
    </h1>
    <p class="text-leader">
        Consulta tu información y configura tus preferencias.
    </p>
</div>

<div class="container mb-8">

    <div class="row">

        <div class="cell-5">
            <div class="bg-white p-5 shadow-2 mb-4">

                <div class="text-center mb-4">
                    <span class="mif-user mif-4x fg-steel"></span>
                    <h3>Estudiante</h3>
                    <p class="text-muted">
                        Información de ejemplo
                    </p>
                </div>

                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" data-role="input" value="Estudiante de ejemplo" readonly>

                <label for="codigo">Código de estudiante</label>
                <input type="text" id="codigo" data-role="input" value="1234567890" readonly>

                <label for="ciclo">Ciclo académico</label>
                <input type="text" id="ciclo" data-role="input" value="IX ciclo" readonly>

            </div>
        </div>

        <div class="cell-7">
            <div class="bg-white p-5 shadow-2 mb-4">

                <h3>
                    <span class="mif-cogs fg-steel"></span>
                    Preferencias
                </h3>

                <p class="text-muted">
                    Activa o desactiva las opciones que prefieras.
                </p>

                <form>

                    <div class="border p-4 mb-3">
                        <label>
                            <strong>Notificaciones</strong>
                            <p class="text-muted">
                                Recibir avisos sobre actividades académicas.
                            </p>
                            <input
                                type="checkbox"
                                name="notificaciones"
                                data-role="switch"
                                data-caption=" "
                                checked
                            >
                        </label>
                    </div>

                    <div class="border p-4 mb-3">
                        <label>
                            <strong>Resumen académico</strong>
                            <p class="text-muted">
                                Consultar un resumen de tus actividades.
                            </p>
                            <input
                                type="checkbox"
                                name="resumen"
                                data-role="switch"
                                data-caption=" "
                            >
                        </label>
                    </div>

                    <div class="border p-4 mb-4">
                        <label>
                            <strong>Perfil público</strong>
                            <p class="text-muted">
                                Preferencia de visibilidad del perfil.
                            </p>
                            <input
                                type="checkbox"
                                name="publico"
                                data-role="switch"
                                data-caption=" "
                            >
                        </label>
                    </div>

                    <button type="button" class="button success">
                        <span class="mif-checkmark"></span>
                        Guardar preferencias
                    </button>

                </form>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>