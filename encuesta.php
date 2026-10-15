```php
<?php include 'includes/header.php'; ?>

<!-- Encabezado -->
<div class="bg-violet fg-white p-6 shadow-2 mb-6">
    <h1>
        <span class="mif-clipboard"></span>
        Encuesta de satisfacción
    </h1>
    <p class="text-leader">
        Comparte tu opinión sobre los servicios académicos.
    </p>
</div>

<div class="container mb-8">

    <div class="bg-white p-5 shadow-2">

        <h3>Evaluación del servicio académico</h3>
        <p class="text-muted">
            Completa los siguientes pasos.
        </p>

        <form>
            <div
                data-role="wizard"
                data-finish="2"
                data-button-mode="button"
                data-button-outline="false"
                style="width: 100%; max-width: 100%; box-sizing: border-box;"
            >

                <!-- PASO 1 -->
                <section>
                    <div class="page-content p-4">

                        <h4>
                            <span class="mif-star-full fg-orange"></span>
                            Evaluación general
                        </h4>

                        <fieldset class="mb-4">
                            <legend>
                                ¿Cómo calificas el campus virtual?
                            </legend>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="experiencia" value="Excelente">
                                    Excelente
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="experiencia" value="Bueno">
                                    Bueno
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="experiencia" value="Regular">
                                    Regular
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="experiencia" value="Malo">
                                    Malo
                                </label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>
                                ¿Cómo calificas los materiales académicos?
                            </legend>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="materiales" value="Excelente">
                                    Excelente
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="materiales" value="Bueno">
                                    Bueno
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="materiales" value="Regular">
                                    Regular
                                </label>
                            </div>

                            <div class="mb-2">
                                <label>
                                    <input type="radio" name="materiales" value="Malo">
                                    Malo
                                </label>
                            </div>
                        </fieldset>

                    </div>
                </section>

                <!-- PASO 2 -->
                <section>
                    <div class="page-content p-4">

                        <h4>
                            <span class="mif-comment fg-cyan"></span>
                            Comentarios
                        </h4>

                        <label for="comentario">
                            ¿Qué aspecto mejorarías?
                        </label>

                        <textarea
                            id="comentario"
                            name="comentario"
                            data-role="textarea"
                            placeholder="Escribe tu opinión aquí..."
                            rows="4"
                            style="display: block; width: 100%; max-width: 100%; box-sizing: border-box;"
                        ></textarea>

                        <div class="bg-light p-3 mt-4">
                            <span class="mif-info"></span>
                            Tu comentario es opcional.
                        </div>

                        <p class="mt-4">
                            Gracias por participar en esta encuesta.
                        </p>

                    </div>
                </section>

            </div>
        </form>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
```