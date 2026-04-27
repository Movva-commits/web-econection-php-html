<?php
$page_title       = 'Servicios — ECONECTION';
$page_description = 'Servicios de fundraising face to face, embajadores sociales, campañas para organizaciones y crecimiento de equipos.';
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
                    <span>Servicios</span>
                </nav>
                <span class="eyebrow">Qué hacemos</span>
                <h1>Fundraising y marketing social para organizaciones con <span class="italic-accent">propósito</span></h1>
                <p class="lead" style="margin-top: 16px;">
                    Diseñamos, activamos y optimizamos campañas de captación para que las causas puedan conectar con personas, construir apoyo y crecer de forma sostenible.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="container">
            <article class="service-row" id="fundraising" data-animate>
                <div class="service-row__visual" role="img" aria-label="Fundraising face to face"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Servicio 01</span>
                    <h2>Fundraising <span class="italic-accent">face to face</span></h2>
                    <p class="lead">Activamos campañas presenciales para explicar causas, resolver dudas y convertir conversaciones en apoyo.</p>
                    <ul class="service-row__features">
                        <li>Diseño de discurso y ruta de conversación.</li>
                        <li>Captación directa en puntos estratégicos.</li>
                        <li>Representación profesional de la organización.</li>
                        <li>Seguimiento de aprendizajes del trabajo en campo.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row service-row--reverse" id="embajadores" data-animate>
                <div class="service-row__visual" role="img" aria-label="Embajadores sociales"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Servicio 02</span>
                    <h2>Formación de <span class="italic-accent">embajadores sociales</span></h2>
                    <p class="lead">Preparamos equipos para comunicar con empatía, claridad, seguridad y respeto por cada causa.</p>
                    <ul class="service-row__features">
                        <li>Entrenamiento en comunicación directa y escucha activa.</li>
                        <li>Formación en propósito, objeciones y representación.</li>
                        <li>Acompañamiento de líderes en campo.</li>
                        <li>Cultura de equipo orientada al crecimiento humano.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row" id="campanas" data-animate>
                <div class="service-row__visual" role="img" aria-label="Campañas para organizaciones sociales"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Servicio 03</span>
                    <h2>Campañas para <span class="italic-accent">organizaciones</span></h2>
                    <p class="lead">Acompañamos la planificación de campañas sociales desde el mensaje hasta la activación.</p>
                    <ul class="service-row__features">
                        <li>Definición de objetivos, públicos y propuesta de valor.</li>
                        <li>Comunicación de causa con tono claro y responsable.</li>
                        <li>Materiales base para equipos y puntos de captación.</li>
                        <li>Coordinación con fundaciones y proyectos aliados.</li>
                    </ul>
                </div>
            </article>

            <article class="service-row service-row--reverse" id="equipos" data-animate>
                <div class="service-row__visual" role="img" aria-label="Crecimiento de equipos de recaudación"></div>
                <div class="service-row__content">
                    <span class="eyebrow">Servicio 04</span>
                    <h2>Crecimiento de <span class="italic-accent">equipos</span></h2>
                    <p class="lead">Estructuramos procesos para que los equipos de captación puedan sostener calidad, motivación y resultados.</p>
                    <ul class="service-row__features">
                        <li>Roles, liderazgo y acompañamiento diario.</li>
                        <li>Rutinas de seguimiento y mejora de desempeño.</li>
                        <li>Lectura de indicadores sin perder el enfoque humano.</li>
                        <li>Escalamiento progresivo según capacidad de campaña.</li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">Para organizaciones</span>
                    <h2>Diseñemos una campaña para tu <span class="italic-accent">causa</span></h2>
                    <p>Cuéntanos qué necesita tu organización y revisamos cómo podemos acompañarte.</p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">Hablemos de tu campaña<span class="btn__arrow" aria-hidden="true">→</span></a>
                        <a href="/projects.php" class="btn btn--light">Ver áreas de impacto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
