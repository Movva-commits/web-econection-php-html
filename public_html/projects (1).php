<?php
$page_title       = 'Proyectos — econection';
$page_description = 'Conoce los proyectos activos de econection.';
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
                <span class="eyebrow">Proyectos</span>
                <h1>Proyectos vivos en <span class="italic-accent">9 países</span> de la región.</h1>
                <p class="lead" style="margin-top: 16px;">
                    Iniciativas que conectan comunidades, organizaciones y personas alrededor de causas sociales.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--white">
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
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
