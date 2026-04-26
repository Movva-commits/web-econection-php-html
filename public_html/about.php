<?php
$page_title       = 'Sobre nosotros — econection';
$page_description = 'Conoce la historia, valores y equipo detrás de econection: 11 años conectando comunidades, voluntarios y aliados en toda Latinoamérica.';
$current_page     = 'about';
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
                    <span>Nosotros</span>
                </nav>
                <span class="eyebrow">Nuestra historia</span>
                <h1>Once años tejiendo redes que <span class="italic-accent">sostienen</span> el cambio.</h1>
                <p class="lead" style="margin-top: 16px;">
                    Lo que empezó como un grupo de amigos repartiendo libros en una vereda hoy es una organización con presencia en 9 países y más de 12.000 voluntarios.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="container">
            <div class="about-block">
                <div class="about-block__visual" data-animate role="img" aria-label="Fundadores de econection en una jornada comunitaria">
                    <!-- REEMPLAZA: style="background-image:url(/assets/img/about-story.jpg)" -->
                </div>
                <div class="about-block__content" data-animate data-animate-delay="1">
                    <span class="eyebrow">Cómo empezamos</span>
                    <h2>De un proyecto pequeño a una <span class="italic-accent">red regional</span>.</h2>
                    <p class="lead">
                        En 2014, un grupo de seis personas decidió que ya no podían seguir esperando a que alguien hiciera algo. Empezaron por una biblioteca de barrio, luego un huerto, luego una jornada de reforestación.
                    </p>
                    <p>
                        Hoy, una década después, econection es una organización registrada que acompaña a más de 80 comunidades en 9 países, mantiene relaciones de largo plazo con aliados corporativos y forma anualmente a cientos de líderes locales. Pero seguimos creyendo en lo mismo: el cambio empieza por sentarse a escuchar.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Nuestros valores</span>
                <h2>Lo que nos guía cuando <span class="italic-accent">nadie</span> está mirando.</h2>
            </div>

            <div class="values__grid">
                <article class="value-card" data-animate>
                    <span class="value-card__num">01 / Transparencia</span>
                    <h3>Cuentas claras, siempre.</h3>
                    <p>Publicamos reportes mensuales con cifras auditadas. Si algo no salió como planeamos, también lo contamos.</p>
                </article>
                <article class="value-card" data-animate data-animate-delay="1">
                    <span class="value-card__num">02 / Escucha</span>
                    <h3>Las comunidades primero.</h3>
                    <p>Antes de proponer, preguntamos. Cada proyecto se diseña con quienes van a vivir sus resultados.</p>
                </article>
                <article class="value-card" data-animate data-animate-delay="2">
                    <span class="value-card__num">03 / Constancia</span>
                    <h3>No vamos de paso.</h3>
                    <p>Nos quedamos. Acompañamos a las comunidades durante años, no semanas, hasta que el cambio se sostiene solo.</p>
                </article>
                <article class="value-card" data-animate>
                    <span class="value-card__num">04 / Cuidado</span>
                    <h3>Las personas no son métricas.</h3>
                    <p>Cuidamos a quienes trabajan con y para nosotros. Sueldos justos, descansos reales, salud mental.</p>
                </article>
                <article class="value-card" data-animate data-animate-delay="1">
                    <span class="value-card__num">05 / Curiosidad</span>
                    <h3>Aprendemos en voz alta.</h3>
                    <p>Compartimos lo que funciona y lo que no. Estamos abiertos a aliarnos con quien sume al objetivo.</p>
                </article>
                <article class="value-card" data-animate data-animate-delay="2">
                    <span class="value-card__num">06 / Esperanza</span>
                    <h3>Optimismo con los pies en la tierra.</h3>
                    <p>Creemos que se puede. Y trabajamos para demostrarlo, dato por dato, comunidad por comunidad.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Equipo</span>
                <h2>Las personas detrás de <span class="italic-accent">econection</span>.</h2>
            </div>

            <div class="team__grid">
                <article class="team-member" data-animate>
                    <div class="team-member__photo" aria-hidden="true"></div>
                    <h4>Camila Restrepo</h4>
                    <p>Directora ejecutiva</p>
                </article>
                <article class="team-member" data-animate data-animate-delay="1">
                    <div class="team-member__photo" aria-hidden="true"></div>
                    <h4>Joaquín Vergara</h4>
                    <p>Director de programas</p>
                </article>
                <article class="team-member" data-animate data-animate-delay="2">
                    <div class="team-member__photo" aria-hidden="true"></div>
                    <h4>Salomé Ríos</h4>
                    <p>Coordinadora ambiental</p>
                </article>
                <article class="team-member" data-animate data-animate-delay="3">
                    <div class="team-member__photo" aria-hidden="true"></div>
                    <h4>Mateo Quintero</h4>
                    <p>Alianzas estratégicas</p>
                </article>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">Te invitamos</span>
                    <h2>¿Quieres trabajar con <span class="italic-accent">nosotros</span>?</h2>
                    <p>Buscamos personas curiosas, comprometidas y con ganas de hacer. Escríbenos contándonos quién eres.</p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">Postula tu CV<span class="btn__arrow" aria-hidden="true">→</span></a>
                        <a href="/projects.php" class="btn btn--light">Ver lo que hacemos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
