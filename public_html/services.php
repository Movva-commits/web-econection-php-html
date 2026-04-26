<?php
$page_title       = 'Programas — econection';
$page_description = 'Descubre los programas de econection: educación, restauración ambiental, fortalecimiento comunitario y voluntariado activo.';
$current_page     = 'services';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main">

    <section class="page-header">
        <div class="container">
            <div class="page-header__inner">
                <nav class="page-header__breadcrumb" aria-label="Breadcrumb">
                    <a href="/index.php">Inicio</a>
                    <span aria-hidden="true">/</span>
                    <span>Programas</span>
                </nav>
                <span class="eyebrow">Lo que hacemos</span>
                <h1>Cuatro programas, un solo <span class="italic-accent">propósito</span>.</h1>
                <p class="lead" style="margin-top: 16px;">
                    Cada programa nació de una necesidad real escuchada en territorio. Todos comparten la misma metodología: escuchar, co-diseñar, ejecutar y medir.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="container">

            <article class="service-row" id="educacion" data-animate>
                <div class="service-row__visual" role="img" aria-label="Niñas y niños en biblioteca comunitaria"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Programa 01</span>
                    <h2>Educación que <span class="italic-accent">transforma</span>.</h2>
                    <p class="lead">
                        Bibliotecas comunitarias, becas escolares y mentorías para niñas, niños y jóvenes en zonas con bajo acceso a recursos educativos.
                    </p>
                    <ul class="service-row__features">
                        <li>34 bibliotecas vivas funcionando hoy en zonas rurales y periurbanas.</li>
                        <li>Becas escolares completas para 480 estudiantes cada año.</li>
                        <li>Programa de mentoría 1 a 1 con voluntarios profesionales.</li>
                        <li>Talleres de lectura, escritura creativa y pensamiento crítico.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row service-row--reverse" id="ambiente" data-animate>
                <div class="service-row__visual" role="img" aria-label="Jornada de reforestación con voluntarios"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Programa 02</span>
                    <h2>Restauración <span class="italic-accent">ambiental</span>.</h2>
                    <p class="lead">
                        Reforestación con especies nativas, protección de cuencas hídricas y educación ambiental con escuelas y comunidades locales.
                    </p>
                    <ul class="service-row__features">
                        <li>Más de 142.000 árboles sembrados desde 2018, con seguimiento individual.</li>
                        <li>9 cuencas hídricas con planes activos de protección.</li>
                        <li>Currículo ambiental aplicado en 56 escuelas rurales.</li>
                        <li>Brigadas trimestrales abiertas a voluntarios de toda la región.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row" id="comunidades" data-animate>
                <div class="service-row__visual" role="img" aria-label="Mujeres líderes en taller comunitario"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Programa 03</span>
                    <h2>Comunidades <span class="italic-accent">fuertes</span>.</h2>
                    <p class="lead">
                        Formamos a líderes barriales con herramientas, recursos y acompañamiento para que sostengan el cambio cuando ya no estamos.
                    </p>
                    <ul class="service-row__features">
                        <li>Programa de liderazgo de 9 meses, certificado y gratuito.</li>
                        <li>Capital semilla para emprendimientos comunitarios viables.</li>
                        <li>Red activa de más de 320 lideresas y líderes egresados.</li>
                        <li>Mentoría continua después de graduarse del programa.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row service-row--reverse" id="voluntariado" data-animate>
                <div class="service-row__visual" role="img" aria-label="Voluntarios sonriendo en una jornada"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Programa 04</span>
                    <h2>Voluntariado <span class="italic-accent">activo</span>.</h2>
                    <p class="lead">
                        Programas presenciales y remotos para que tu tiempo y tus talentos lleguen a donde generan más impacto. Desde 2 horas a la semana.
                    </p>
                    <ul class="service-row__features">
                        <li>Voluntariado remoto en mentoría, diseño, traducción, datos y más.</li>
                        <li>Brigadas presenciales mensuales en los 9 países donde operamos.</li>
                        <li>Voluntariado corporativo a la medida para empresas de cualquier tamaño.</li>
                        <li>Certificación oficial de horas y áreas para tu hoja de vida.</li>
                    </ul>
                </div>
            </article>

        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">¿Cuál te llama?</span>
                    <h2>Hay un programa esperando <span class="italic-accent">por ti</span>.</h2>
                    <p>Cuéntanos qué te mueve y te ayudamos a encontrar la mejor manera de sumarte.</p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">Hablemos<span class="btn__arrow" aria-hidden="true">→</span></a>
                        <a href="/projects.php" class="btn btn--light">Ver proyectos en marcha</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
