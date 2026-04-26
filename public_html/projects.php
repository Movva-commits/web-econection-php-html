<?php
$page_title       = 'Proyectos — econection';
$page_description = 'Conoce los proyectos activos de econection en Colombia, Ecuador, Perú, Chile y otros países de Latinoamérica.';
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
                    <span>Proyectos</span>
                </nav>
                <span class="eyebrow">Lo que está pasando ahora</span>
                <h1>Proyectos vivos en <span class="italic-accent">9 países</span> de la región.</h1>
                <p class="lead" style="margin-top: 16px;">
                    Cada uno nació de una conversación con la comunidad. Cada uno tiene un equipo local liderándolo. Cada uno publica resultados reales mes a mes.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="container">
            <div class="project-archive">

                <a class="project-archive__item" href="#" data-animate>
                    <div class="project-archive__media" role="img" aria-label="Sembrando la cuenca del río Otún"></div>
                    <span class="project-archive__tag">Ambiente</span>
                    <h3 class="project-archive__title">Sembrando la cuenca del río Otún</h3>
                    <p class="project-archive__meta">Risaralda, Colombia · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="1">
                    <div class="project-archive__media" role="img" aria-label="Bibliotecas vivas en Quito"></div>
                    <span class="project-archive__tag">Educación</span>
                    <h3 class="project-archive__title">Bibliotecas vivas</h3>
                    <p class="project-archive__meta">Quito, Ecuador · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="2">
                    <div class="project-archive__media" role="img" aria-label="Mujeres que tejen futuro"></div>
                    <span class="project-archive__tag">Comunidades</span>
                    <h3 class="project-archive__title">Mujeres que tejen futuro</h3>
                    <p class="project-archive__meta">Cusco, Perú · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate>
                    <div class="project-archive__media" role="img" aria-label="Brigadas urbanas de invierno"></div>
                    <span class="project-archive__tag">Voluntariado</span>
                    <h3 class="project-archive__title">Brigadas urbanas de invierno</h3>
                    <p class="project-archive__meta">Santiago, Chile · Anual</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="1">
                    <div class="project-archive__media" role="img" aria-label="Huertos urbanos de Soacha"></div>
                    <span class="project-archive__tag">Comunidades</span>
                    <h3 class="project-archive__title">Huertos urbanos de Soacha</h3>
                    <p class="project-archive__meta">Cundinamarca, Colombia · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="2">
                    <div class="project-archive__media" role="img" aria-label="Aula móvil del Pacífico"></div>
                    <span class="project-archive__tag">Educación</span>
                    <h3 class="project-archive__title">Aula móvil del Pacífico</h3>
                    <p class="project-archive__meta">Chocó, Colombia · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate>
                    <div class="project-archive__media" role="img" aria-label="Reserva nativa Yasuní"></div>
                    <span class="project-archive__tag">Ambiente</span>
                    <h3 class="project-archive__title">Reserva nativa Yasuní</h3>
                    <p class="project-archive__meta">Orellana, Ecuador · En curso</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="1">
                    <div class="project-archive__media" role="img" aria-label="Becas Raíz para jóvenes rurales"></div>
                    <span class="project-archive__tag">Educación</span>
                    <h3 class="project-archive__title">Becas Raíz para jóvenes rurales</h3>
                    <p class="project-archive__meta">Regional · Convocatoria abierta</p>
                </a>

                <a class="project-archive__item" href="#" data-animate data-animate-delay="2">
                    <div class="project-archive__media" role="img" aria-label="Voluntariado corporativo Gruposol"></div>
                    <span class="project-archive__tag">Voluntariado</span>
                    <h3 class="project-archive__title">Voluntariado corporativo Gruposol</h3>
                    <p class="project-archive__meta">Multipaís · Tercer año</p>
                </a>

            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">¿Tienes un proyecto?</span>
                    <h2>Si conoces una causa que merece <span class="italic-accent">apoyo</span>, queremos saberlo.</h2>
                    <p>Recibimos propuestas de líderes comunitarios y organizaciones locales todo el año.</p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">Proponer un proyecto<span class="btn__arrow" aria-hidden="true">→</span></a>
                        <a href="/services.php" class="btn btn--light">Ver nuestros programas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
