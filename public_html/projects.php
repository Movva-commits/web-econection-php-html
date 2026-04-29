<?php
$page_title       = 'Causas — ECONECTION';
$page_description = 'Áreas de impacto donde ECONECTION puede acompañar campañas de fundraising, captación y comunicación social.';
$current_page     = 'projects';
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
                    <span>Causas</span>
                </nav>
                <span class="eyebrow">Causas</span>
                <h1>Causas donde podemos acompañar campañas de <span class="italic-accent">captación</span></h1>
                <p class="lead" style="margin-top: 16px;">
                    Trabajamos como aliado estratégico de organizaciones sociales, fundaciones y proyectos con propósito para activar campañas de captación y comunicación directa.
                </p>
            </div>
        </div>
    </section>

    <!-- Wobble Cards -->
    <section class="wobble-section">
        <div class="container">
            <div class="wobble-grid">

                <div class="wobble-card wobble-card--large wobble-card--navy" data-wobble>
                    <div class="wobble-card__overlay"></div>
                    <div class="wobble-card__inner">
                        <span class="wobble-eyebrow">Alianza estratégica</span>
                        <h2 class="wobble-card__title">Activamos campañas de captación con <em>propósito real</em></h2>
                        <p class="wobble-card__text">Somos el aliado operativo de organizaciones sociales que necesitan activar donantes, comunicar su impacto y crecer de forma sostenible.</p>
                        <a href="/contact.php" class="wobble-card__btn">Hablemos de tu campaña <span aria-hidden="true">→</span></a>
                    </div>
                </div>

                <div class="wobble-card wobble-card--blue" data-wobble>
                    <div class="wobble-card__overlay"></div>
                    <div class="wobble-card__inner">
                        <span class="wobble-eyebrow">Impacto</span>
                        <h3 class="wobble-card__title">+6 áreas de impacto social</h3>
                        <p class="wobble-card__text">Desde infancia y educación hasta medio ambiente, salud y desarrollo comunitario.</p>
                    </div>
                </div>

                <div class="wobble-card wobble-card--deep" data-wobble>
                    <div class="wobble-card__overlay"></div>
                    <div class="wobble-card__inner">
                        <span class="wobble-eyebrow">Metodología</span>
                        <h3 class="wobble-card__title">Comunicación directa que conecta y convierte</h3>
                        <p class="wobble-card__text">Mensajes diseñados para resonar con donantes reales y aliados estratégicos.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="container">
            <div class="project-archive">
                <a class="project-archive__item" href="/contact.php" data-animate>
                    <div class="project-archive__media" role="img" aria-label="Infancia y adolescencia"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Infancia y adolescencia</h3>
                    <p class="project-archive__meta">Campañas para proteger, educar y acompañar a nuevas generaciones.</p>
                </a>

                <a class="project-archive__item" href="/contact.php" data-animate data-animate-delay="1">
                    <div class="project-archive__media" role="img" aria-label="Medio ambiente"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Medio ambiente</h3>
                    <p class="project-archive__meta">Captación para proyectos de conservación y sostenibilidad.</p>
                </a>

                <a class="project-archive__item" href="/contact.php" data-animate data-animate-delay="2">
                    <div class="project-archive__media" role="img" aria-label="Salud y bienestar"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Salud y bienestar</h3>
                    <p class="project-archive__meta">Comunicación para programas de cuidado, prevención y acceso.</p>
                </a>

                <a class="project-archive__item" href="/contact.php" data-animate>
                    <div class="project-archive__media" role="img" aria-label="Desarrollo comunitario"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Desarrollo comunitario</h3>
                    <p class="project-archive__meta">Movilización de apoyo para iniciativas locales y territoriales.</p>
                </a>

                <a class="project-archive__item" href="/contact.php" data-animate data-animate-delay="1">
                    <div class="project-archive__media" role="img" aria-label="Educación"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Educación</h3>
                    <p class="project-archive__meta">Campañas para programas de acceso, permanencia y aprendizaje.</p>
                </a>

                <a class="project-archive__item" href="/contact.php" data-animate data-animate-delay="2">
                    <div class="project-archive__media" role="img" aria-label="Cultura y comunidad"></div>
                    <span class="project-archive__tag">Impacto</span>
                    <h3 class="project-archive__title">Cultura y comunidad</h3>
                    <p class="project-archive__meta">Comunicación para iniciativas que fortalecen tejido social.</p>
                </a>
            </div>
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
                        <a href="/services.php" class="btn btn--light">Ver servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
