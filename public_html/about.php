<?php
$page_title       = 'Nosotros — ECONECTION';
$page_description = 'Conoce el enfoque de ECONECTION: una agencia de marketing social y fundraising que crea conexiones con causa entre organizaciones, equipos y personas.';
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
                <span class="eyebrow">Sobre ECONECTION</span>
                <h1>Somos una agencia de fundraising que crea <span class="italic-accent">conexiones con causa</span></h1>
                <p class="lead" style="margin-top: 16px;">
                    Acompañamos a organizaciones sociales, fundaciones y proyectos con propósito para que puedan comunicar mejor su causa, llegar a más personas y desarrollar campañas de captación sostenibles.
                </p>
            </div>
        </div>
    </section>

    <section class="about-highlight">
        <div class="container">
            <div class="about-highlight__grid">
                <div class="about-highlight__media" data-animate aria-hidden="true">
                    <svg class="about-highlight__brush" viewBox="0 0 300 160" fill="none">
                        <path d="M18 112C67 26 183 14 280 52C218 81 167 124 90 135C58 140 34 131 18 112Z" fill="#8CCB2A" opacity=".22"/>
                    </svg>
                    <div class="about-highlight__heart">
                        <svg viewBox="0 0 520 500">
                            <defs>
                                <linearGradient id="aboutHeartBrand" x1="70" y1="60" x2="440" y2="440" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#1BA7D7"/>
                                    <stop offset=".52" stop-color="#0C63C9"/>
                                    <stop offset="1" stop-color="#59B52E"/>
                                </linearGradient>
                            </defs>
                            <path d="M260 448C120 326 50 252 50 158C50 86 104 42 168 42C208 42 239 62 260 96C281 62 312 42 352 42C416 42 470 86 470 158C470 252 400 326 260 448Z" fill="url(#aboutHeartBrand)"/>
                            <path d="M148 260C207 312 312 312 372 260" stroke="rgba(255,255,255,.34)" stroke-width="18" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="about-highlight__years"><strong>F2F</strong><span>campo humano</span></div>
                    <div class="about-highlight__chip">360</div>
                </div>

                <div class="about-highlight__content" data-animate data-animate-delay="1">
                    <span class="about-highlight__eyebrow">Nuestro propósito</span>
                    <h2 class="about-highlight__title">Las grandes causas crecen cuando encuentran a las personas correctas</h2>
                    <p class="about-highlight__lead">
                        Nacimos para crear conexiones con sentido: entre organizaciones que trabajan por un mundo mejor y personas que quieren formar parte del cambio. Combinamos estrategia, trabajo en campo y formación de equipos para impulsar campañas sociales con impacto real.
                    </p>
                    <div class="about-highlight__mini">
                        <div class="about-highlight__mini-text">
                            <div class="about-highlight__mini-icon" aria-hidden="true">↗</div>
                            <div>
                                <h4>Conexiones con Causa</h4>
                                <p>marketing social, fundraising y equipos</p>
                            </div>
                        </div>
                        <div class="about-highlight__avatars" aria-hidden="true">
                            <span></span><span></span><span></span><span></span><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Cómo entendemos el trabajo</span>
                <h2>Una agencia seria, con enfoque humano y <span class="italic-accent">propósito social</span></h2>
            </div>
            <div class="values__grid">
                <article class="value-card" data-animate><span class="value-card__num">01 / Estrategia</span><h3>Campañas con dirección.</h3><p>Partimos de objetivos claros, mensajes responsables y una ruta de captación viable.</p></article>
                <article class="value-card" data-animate data-animate-delay="1"><span class="value-card__num">02 / Campo</span><h3>Conversaciones reales.</h3><p>Creemos en el face to face como un espacio de escucha, explicación y confianza.</p></article>
                <article class="value-card" data-animate data-animate-delay="2"><span class="value-card__num">03 / Formación</span><h3>Embajadores preparados.</h3><p>Desarrollamos habilidades de comunicación, liderazgo y representación de causa.</p></article>
                <article class="value-card" data-animate><span class="value-card__num">04 / Cuidado</span><h3>Personas antes que presión.</h3><p>Cuidamos la experiencia de donantes, organizaciones y equipos en campo.</p></article>
                <article class="value-card" data-animate data-animate-delay="1"><span class="value-card__num">05 / Mejora</span><h3>Aprender para crecer.</h3><p>Medimos, escuchamos y ajustamos campañas para sostener mejores resultados.</p></article>
                <article class="value-card" data-animate data-animate-delay="2"><span class="value-card__num">06 / Propósito</span><h3>Comunicar con respeto.</h3><p>Evitamos mensajes dramáticos y priorizamos claridad, dignidad y conexión humana.</p></article>
            </div>
        </div>
    </section>

    <section class="section benefits">
        <div class="container">
            <div class="benefits__grid">
                <div data-animate>
                    <span class="eyebrow">Equipo ECONECTION</span>
                    <h2>Formamos personas que representan causas con <span class="italic-accent">claridad</span></h2>
                    <p class="lead" style="color: rgba(247, 249, 251, 0.78);">
                        Nuestro equipo combina entrenamiento, acompañamiento y trabajo en campo para que cada campaña sea profesional, humana y consistente.
                    </p>
                </div>
                <ul class="benefits__list">
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Comunicación directa</h4><p>Conversaciones claras, respetuosas y orientadas a construir confianza.</p></div></li>
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Liderazgo y crecimiento humano</h4><p>Equipos que aprenden, se acompañan y desarrollan habilidades profesionales.</p></div></li>
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Representación profesional</h4><p>Cada embajador entiende la causa, el contexto y la responsabilidad de comunicarla.</p></div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">Conversemos</span>
                    <h2>Tu causa puede llegar a más <span class="italic-accent">personas</span></h2>
                    <p>Hablemos de estrategia, equipos y campañas para tu organización.</p>
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
