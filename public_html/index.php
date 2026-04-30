<?php
$page_title       = 'ECONECTION — Conexiones con Causa';
$page_description = 'Agencia de marketing social y fundraising que conecta organizaciones, personas y causas mediante campañas de captación, equipos de embajadores y comunicación directa.';
$current_page     = 'home';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main">

    <section class="hero">
        <div class="container">
            <div class="hero__inner">
                <div class="hero__content">
                    <span class="eyebrow" data-animate>Marketing social · Fundraising · Conexiones con Causa</span>
                    <h1 class="hero__title" data-animate data-animate-delay="1">
                        Conectamos personas con causas que <span class="italic-accent">transforman realidades</span>
                    </h1>
                    <p class="hero__lead lead" data-animate data-animate-delay="2">
                        En ECONECTION impulsamos campañas de fundraising y marketing social para que organizaciones con propósito puedan llegar a más personas, construir comunidades de apoyo y generar impacto sostenible.
                    </p>
                    <div class="hero__ctas" data-animate data-animate-delay="3">
                        <a href="/contact.php" class="btn btn--primary">
                            Quiero impulsar una causa
                            <span class="btn__arrow" aria-hidden="true">→</span>
                        </a>
                        <a href="/contact.php#equipo" class="btn btn--ghost">Quiero unirme al equipo</a>
                    </div>
                    <div class="hero__trust" data-animate data-animate-delay="4">
                        <div class="hero__trust-text">
                            <strong>Campañas con estrategia, campo y equipos humanos</strong>
                            <span>para organizaciones sociales, fundaciones y proyectos con propósito</span>
                        </div>
                    </div>
                </div>

                <div class="hero__visual" data-animate data-animate-delay="2">
                    <div class="hero__visual-main">
                        <picture>
                            <source
                                type="image/webp"
                                srcset="/assets/img/optimized/hero-480.webp 480w, /assets/img/optimized/hero-800.webp 800w, /assets/img/optimized/hero-1200.webp 1200w"
                                sizes="(max-width: 900px) 90vw, 42vw"
                            >
                            <img
                                class="hero__image"
                                src="/assets/img/optimized/hero-1200.jpg"
                                width="2841"
                                height="4256"
                                alt="Manos unidas representando una causa social"
                                fetchpriority="high"
                                decoding="async"
                            >
                        </picture>
                    </div>

                    <div class="hero__badge hero__badge--top" aria-hidden="true">
                        <div class="hero__badge-icon">★</div>
                        <div>
                            <strong>Social</strong>
                            <span>Marketing con propósito</span>
                        </div>
                    </div>

                    <div class="hero__badge hero__badge--bottom" aria-hidden="true">
                        <div class="hero__badge-icon hero__badge-icon--green">↗</div>
                        <div>
                            <strong>F2F</strong>
                            <span>Captación face to face</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white services-showcase">
        <div class="section-bg-logos" aria-hidden="true">
            <img class="section-bg-logo section-bg-logo--large" src="/assets/img/logo-mark.svg" alt="">
            <img class="section-bg-logo section-bg-logo--medium" src="/assets/img/logo-mark.svg" alt="">
            <img class="section-bg-logo section-bg-logo--small" src="/assets/img/logo-mark.svg" alt="">
            <img class="section-bg-logo section-bg-logo--bottom-left" src="/assets/img/logo-mark.svg" alt="">
        </div>
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Qué hacemos</span>
                <h2>Recaudación de fondos con propósito, estrategia y <span class="italic-accent">conexión humana</span></h2>
                <p class="lead" style="margin: 16px auto 0;">
                    Ayudamos a organizaciones sociales mediante campañas de captación, equipos capacitados y estrategias de comunicación directa que acercan las causas a las personas correctas.
                </p>
            </div>

            <div class="services-carousel" data-services-carousel data-animate>
                <div class="services-carousel__viewport">
                    <div class="services-carousel__track">
                        <article class="program-card services-carousel__slide">
                            <div class="program-card__icon" aria-hidden="true">↔</div>
                            <h3>Fundraising face to face</h3>
                            <p class="program-card__desc">Diseñamos y activamos campañas presenciales para conversar con personas, explicar causas y convertir interés en apoyo recurrente.</p>
                            <a href="/services.php#fundraising" class="program-card__link">Ver servicio →</a>
                        </article>
                        <article class="program-card services-carousel__slide">
                            <div class="program-card__icon" aria-hidden="true">★</div>
                            <h3>Embajadores sociales</h3>
                            <p class="program-card__desc">Formamos voceros de causa con herramientas de comunicación, liderazgo, escucha activa y representación profesional en campo.</p>
                            <a href="/services.php#embajadores" class="program-card__link">Ver servicio →</a>
                        </article>
                        <article class="program-card services-carousel__slide">
                            <div class="program-card__icon" aria-hidden="true">●</div>
                            <h3>Campañas para organizaciones</h3>
                            <p class="program-card__desc">Acompañamos a fundaciones, proyectos sociales y organizaciones con propósito en la planificación y ejecución de campañas.</p>
                            <a href="/services.php#campanas" class="program-card__link">Ver servicio →</a>
                        </article>
                        <article class="program-card services-carousel__slide">
                            <div class="program-card__icon" aria-hidden="true">↑</div>
                            <h3>Crecimiento de equipos</h3>
                            <p class="program-card__desc">Estructuramos equipos de captación con formación, seguimiento y mejora continua para sostener resultados en el tiempo.</p>
                            <a href="/services.php#equipos" class="program-card__link">Ver servicio →</a>
                        </article>
                    </div>
                </div>

                <div class="services-carousel__controls" aria-label="Controles del carrusel de servicios">
                    <button class="services-carousel__arrow services-carousel__arrow--prev" type="button" aria-label="Servicio anterior">←</button>
                    <div class="services-carousel__dots" aria-label="Indicadores del carrusel"></div>
                    <button class="services-carousel__arrow services-carousel__arrow--next" type="button" aria-label="Servicio siguiente">→</button>
                </div>
            </div>
        </div>
    </section>

    <section class="section benefits approach-collage">
        <div class="container">
            <div class="approach-collage__head" data-animate>
                <div>
                    <span class="eyebrow">Nuestro enfoque</span>
                    <h2>Conectamos causas con personas dispuestas a actuar</h2>
                </div>
                <p class="lead">
                    Para que una causa conecte, primero debe comunicarse de forma clara y llegar al contexto adecuado. En ECONECTION trabajamos desde la estrategia, la lectura del público y la formación de equipos capaces de representar cada mensaje con empatía y profesionalismo. Así acercamos las campañas a personas que pueden entender la causa, confiar en ella y decidir sumarse.
                </p>
            </div>

            <div class="approach-collage__grid">
                <article class="approach-card approach-card--featured" data-animate tabindex="0">
                    <picture>
                        <source type="image/webp" srcset="/uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-640.webp 640w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-960.webp 960w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1280.webp 1280w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1600.webp 1600w" sizes="(max-width: 900px) 100vw, 62vw">
                        <img class="approach-card__image" src="/uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1600.jpg" width="5568" height="3712" alt="Manos unidas simbolizando conexión social" decoding="async">
                    </picture>
                    <div class="approach-card__shade" aria-hidden="true"></div>
                    <div class="approach-card__content">
                        <span class="approach-card__num">01</span>
                        <h3>Conectar</h3>
                        <p>Acercamos organizaciones y personas con intereses reales en causas sociales.</p>
                    </div>
                </article>

                <article class="approach-card approach-card--talk" data-animate data-animate-delay="1" tabindex="0">
                    <picture>
                        <source type="image/webp" srcset="/uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-640.webp 640w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-960.webp 960w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-1280.webp 1280w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-1600.webp 1600w" sizes="(max-width: 900px) 100vw, 28vw">
                        <img class="approach-card__image" src="/uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-1600.jpg" width="8688" height="5792" alt="Detalle de manos representando conversación y confianza" decoding="async">
                    </picture>
                    <div class="approach-card__shade" aria-hidden="true"></div>
                    <div class="approach-card__content">
                        <span class="approach-card__num">02</span>
                        <h3>Comunicar</h3>
                        <p>Traducimos el propósito de cada organización en mensajes claros, humanos y responsables.</p>
                    </div>
                </article>

                <article class="approach-card approach-card--move" data-animate data-animate-delay="2" tabindex="0">
                    <picture>
                        <source type="image/webp" srcset="/uploads/optimized/portrait-of-schoolkids-forming-huddle-2026-01-09-09-12-06-utc-640.webp 640w, /uploads/optimized/portrait-of-schoolkids-forming-huddle-2026-01-09-09-12-06-utc-960.webp 960w, /uploads/optimized/portrait-of-schoolkids-forming-huddle-2026-01-09-09-12-06-utc-1280.webp 1280w, /uploads/optimized/portrait-of-schoolkids-forming-huddle-2026-01-09-09-12-06-utc-1600.webp 1600w" sizes="(max-width: 900px) 100vw, 38vw">
                        <img class="approach-card__image" src="/uploads/optimized/portrait-of-schoolkids-forming-huddle-2026-01-09-09-12-06-utc-1600.jpg" width="6720" height="4480" alt="Grupo de niños formando un círculo representando movilización colectiva" decoding="async">
                    </picture>
                    <div class="approach-card__shade" aria-hidden="true"></div>
                    <div class="approach-card__content">
                        <span class="approach-card__num">03</span>
                        <h3>Movilizar</h3>
                        <p>Activamos equipos y campañas para convertir conversaciones en comunidades de apoyo.</p>
                    </div>
                </article>

                <article class="approach-card approach-card--sustain" data-animate data-animate-delay="3" tabindex="0">
                    <picture>
                        <source type="image/webp" srcset="/uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-640.webp 640w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-960.webp 960w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1280.webp 1280w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1600.webp 1600w" sizes="(max-width: 900px) 100vw, 62vw">
                        <img class="approach-card__image" src="/uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1600.jpg" width="8256" height="5504" alt="Manos reunidas representando continuidad y apoyo" decoding="async">
                    </picture>
                    <div class="approach-card__shade" aria-hidden="true"></div>
                    <div class="approach-card__content">
                        <span class="approach-card__num">04</span>
                        <h3>Sostener</h3>
                        <p>Damos continuidad a las campañas mediante seguimiento, formación y mejora constante.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="about-highlight">
        <div class="container">
            <div class="about-highlight__grid">
                <div class="about-highlight__media" data-animate>
                    <div class="about-highlight__heart">
                        <img src="/assets/img/heart-survey-fundraising.png" width="1254" height="1254" alt="Captación Face to Face en un corazón">
                    </div>
                </div>

                <div class="about-highlight__content" data-animate data-animate-delay="1" data-copy-reveal>
                    <span class="about-highlight__eyebrow copy-reveal copy-reveal--1">Sobre ECONECTION</span>
                    <h2 class="about-highlight__title copy-reveal copy-reveal--2">Las grandes causas crecen cuando encuentran a las personas correctas</h2>
                    <p class="about-highlight__lead copy-reveal copy-reveal--3">
                        Nacimos para crear conexiones con sentido: entre organizaciones que trabajan por un mundo mejor y personas que quieren formar parte del cambio. Combinamos estrategia, trabajo en campo y formación de equipos para impulsar campañas sociales con impacto real.
                    </p>
                    <div class="about-highlight__mini copy-reveal copy-reveal--4">
                        <div class="about-highlight__mini-text">
                            <div>
                                <h4>Conexiones con Causa</h4>
                                <p>estrategia, equipos y comunicación directa</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-highlight__actions copy-reveal copy-reveal--5">
                        <a href="/about.php" class="about-highlight__cta"><span class="about-highlight__cta-icon">→</span>Conoce el enfoque</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white sticky-causes-section">
        <div class="container">
            <div class="section-head section-head--left" style="text-align: left; max-width: 760px; margin: 0 0 56px;">
                <span class="eyebrow">Causas que impulsamos</span>
                <h2>Áreas de impacto donde podemos acompañar <span class="italic-accent">campañas</span></h2>
                <p class="lead">Trabajamos como aliado estratégico de organizaciones. Estas son áreas donde ECONECTION puede apoyar campañas de captación y comunicación social.</p>
            </div>
        </div>
        <div class="sticky-causes">
            <div class="sticky-cause sticky-cause--1" data-sticky-cause>
                <div class="sticky-cause__content">
                    <span class="sticky-cause__tag">Impacto</span>
                    <h3 class="sticky-cause__title">Infancia y adolescencia</h3>
                    <p class="sticky-cause__desc">Campañas para proteger, educar y acompañar a nuevas generaciones.</p>
                </div>
            </div>
            <div class="sticky-cause sticky-cause--2" data-sticky-cause>
                <div class="sticky-cause__content">
                    <span class="sticky-cause__tag">Impacto</span>
                    <h3 class="sticky-cause__title">Medio ambiente</h3>
                    <p class="sticky-cause__desc">Captación para proyectos de conservación y sostenibilidad.</p>
                </div>
            </div>
            <div class="sticky-cause sticky-cause--3" data-sticky-cause>
                <div class="sticky-cause__content">
                    <span class="sticky-cause__tag">Impacto</span>
                    <h3 class="sticky-cause__title">Salud y bienestar</h3>
                    <p class="sticky-cause__desc">Comunicación para programas de cuidado, prevención y acceso.</p>
                </div>
            </div>
            <div class="sticky-cause sticky-cause--4" data-sticky-cause>
                <div class="sticky-cause__content">
                    <span class="sticky-cause__tag">Impacto</span>
                    <h3 class="sticky-cause__title">Desarrollo empresarial</h3>
                    <p class="sticky-cause__desc">Estrategias para conectar negocios, fortalecer su presencia y activar nuevas oportunidades de crecimiento.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="container">
            <div class="about-block">
                <div class="about-block__content" data-animate>
                    <span class="eyebrow">Para organizaciones</span>
                    <h2>Un aliado para hacer crecer tus <span class="italic-accent">campañas sociales</span></h2>
                    <p class="lead">
                        Ayudamos a fundaciones, organizaciones y proyectos sociales a llegar a más personas mediante campañas de captación, equipos entrenados y comunicación directa.
                    </p>
                    <a href="/contact.php" class="btn btn--primary" style="margin-top: 24px;">Hablemos de tu campaña<span class="btn__arrow" aria-hidden="true">→</span></a>
                </div>
                <div class="about-block__features" data-animate data-animate-delay="1">
                    <div class="about-block__feature"><div class="about-block__feature-icon">01</div><div><h4>Diseño de campañas de fundraising</h4><p>Estrategia, mensajes, objetivos y rutas de captación.</p></div></div>
                    <div class="about-block__feature"><div class="about-block__feature-icon">02</div><div><h4>Activación de equipos de captación</h4><p>Selección, formación y acompañamiento de embajadores.</p></div></div>
                    <div class="about-block__feature"><div class="about-block__feature-icon">03</div><div><h4>Comunicación de causa</h4><p>Relatos claros para explicar el valor social de cada proyecto.</p></div></div>
                    <div class="about-block__feature"><div class="about-block__feature-icon">04</div><div><h4>Seguimiento y mejora de resultados</h4><p>Lectura de desempeño para optimizar campañas y conversaciones.</p></div></div>
                    <div class="about-block__feature"><div class="about-block__feature-icon">05</div><div><h4>Representación profesional en campo</h4><p>Equipos que comunican con respeto, consistencia y propósito.</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section benefits" id="equipo">
        <div class="container">
            <div class="benefits__grid">
                <div data-animate>
                    <span class="eyebrow">Únete al equipo</span>
                    <h2>Trabaja conectando personas con <span class="italic-accent">causas reales</span></h2>
                    <p class="lead" style="color: rgba(247, 249, 251, 0.78); max-width: 46ch;">
                        En ECONECTION buscamos personas con energía, empatía y ganas de crecer. Ser parte del equipo significa representar causas importantes, desarrollar habilidades de comunicación y vivir una experiencia profesional con propósito.
                    </p>
                    <a href="/contact.php#equipo" class="btn btn--primary" style="margin-top: 24px;">Quiero ser parte del equipo<span class="btn__arrow" aria-hidden="true">→</span></a>
                </div>
                <ul class="benefits__list">
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Comunicación clara</h4><p>Capacidad para explicar una causa con orden y cercanía.</p></div></li>
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Actitud positiva y empatía</h4><p>Escucha real, respeto por las personas y apertura para aprender.</p></div></li>
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Trabajo en equipo</h4><p>Colaboración en campo, liderazgo sano y responsabilidad diaria.</p></div></li>
                    <li class="benefit-item"><div class="benefit-item__icon">✓</div><div><h4>Interés por causas sociales</h4><p>Ganas de crecer profesionalmente mientras representas propósitos importantes.</p></div></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section process">
        <div class="container">
            <div class="section-head" style="margin-bottom: 64px;">
                <span class="eyebrow">Cómo trabajamos</span>
                <h2>Un proceso claro para <span class="italic-accent">generar impacto</span></h2>
            </div>
            <div class="process__grid process__grid--five">
                <div class="process-step" data-animate><span class="process-step__num">01</span><h3>Entendemos la causa</h3><p>Conocemos la organización, el objetivo y el público al que necesita llegar.</p></div>
                <div class="process-step" data-animate data-animate-delay="1"><span class="process-step__num">02</span><h3>Diseñamos la campaña</h3><p>Definimos mensajes, canales, metas, estructura y recorrido de captación.</p></div>
                <div class="process-step" data-animate data-animate-delay="2"><span class="process-step__num">03</span><h3>Formamos al equipo</h3><p>Preparamos embajadores sociales con discurso, práctica y criterio de campo.</p></div>
                <div class="process-step" data-animate data-animate-delay="3"><span class="process-step__num">04</span><h3>Activamos la captación</h3><p>Salimos a campo con equipos coordinados y representación profesional.</p></div>
                <div class="process-step" data-animate data-animate-delay="4"><span class="process-step__num">05</span><h3>Medimos y optimizamos</h3><p>Revisamos aprendizajes para mejorar resultados y sostener el crecimiento.</p></div>
            </div>
        </div>
    </section>

    <section class="stats" hidden>
        <div class="container">
            <div class="stats__grid stats__grid--five">
                <div class="stat" data-animate><div class="stat__num"><small>+</small><span>X</span></div><div class="stat__label">años de experiencia</div></div>
                <div class="stat" data-animate data-animate-delay="1"><div class="stat__num"><small>+</small><span>X</span></div><div class="stat__label">embajadores capacitados</div></div>
                <div class="stat" data-animate data-animate-delay="2"><div class="stat__num"><small>+</small><span>X</span></div><div class="stat__label">campañas activadas</div></div>
                <div class="stat" data-animate data-animate-delay="3"><div class="stat__num"><small>+</small><span>X</span></div><div class="stat__label">organizaciones aliadas</div></div>
                <div class="stat" data-animate data-animate-delay="4"><div class="stat__num"><small>+</small><span>X</span></div><div class="stat__label">donantes conectados</div></div>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">Contacto</span>
                    <h2>Conversemos sobre la próxima <span class="italic-accent">conexión con causa</span></h2>
                    <p>Cuéntanos si quieres impulsar una campaña social o sumarte al equipo de embajadores.</p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">Hablemos<span class="btn__arrow" aria-hidden="true">→</span></a>
                        <a href="/services.php" class="btn btn--light">Ver servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
