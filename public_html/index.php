<?php
$page_title       = 'econection — Conectando personas con causas que importan';
$page_description = 'econection impulsa proyectos sociales y ambientales con impacto real. Únete a nuestra red de voluntarios, aliados y comunidades que están transformando Latinoamérica.';
$current_page     = 'home';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main">

    <!-- ============== HERO ============== -->
    <section class="hero">
        <div class="container">
            <div class="hero__inner">
                <div class="hero__content">
                    <span class="eyebrow" data-animate>Organización sin fines de lucro · Desde 2014</span>
                    <h1 class="hero__title" data-animate data-animate-delay="1">
                        Pequeñas acciones, <span class="italic-accent">grandes</span> transformaciones.
                    </h1>
                    <p class="hero__lead lead" data-animate data-animate-delay="2">
                        Conectamos comunidades, voluntarios y aliados estratégicos para hacer realidad proyectos que cuidan el planeta y mejoran la vida de las personas. Cada gesto suma.
                    </p>
                    <div class="hero__ctas" data-animate data-animate-delay="3">
                        <a href="/contact.php" class="btn btn--primary">
                            Únete al movimiento
                            <span class="btn__arrow" aria-hidden="true">→</span>
                        </a>
                        <a href="/projects.php" class="btn btn--ghost">Ver proyectos</a>
                    </div>
                    <div class="hero__trust" data-animate data-animate-delay="4">
                        <div class="hero__avatars" aria-hidden="true">
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <div class="hero__trust-text">
                            <strong>+12.400 voluntarios activos</strong>
                            <span>en 9 países de Latinoamérica</span>
                        </div>
                    </div>
                </div>

                <div class="hero__visual" data-animate data-animate-delay="2">
                    <!-- REEMPLAZA: añade style="background-image:url(/assets/img/hero.jpg)" cuando tengas la foto -->
                    <div class="hero__visual-main" role="img" aria-label="Personas trabajando en un proyecto comunitario">
                        <span class="hero__visual-placeholder">[ Imagen hero — reemplazar en /assets/img/hero.jpg ]</span>
                    </div>

                    <div class="hero__badge hero__badge--top" aria-hidden="true">
                        <div class="hero__badge-icon">★</div>
                        <div>
                            <strong>4.9 / 5</strong>
                            <span>Valoración de aliados</span>
                        </div>
                    </div>

                    <div class="hero__badge hero__badge--bottom" aria-hidden="true">
                        <div class="hero__badge-icon hero__badge-icon--green">↗</div>
                        <div>
                            <strong>+86%</strong>
                            <span>Impacto comunitario</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== STATS ============== -->
    <section class="stats">
        <div class="container">
            <div class="stats__grid">
                <div class="stat" data-animate>
                    <div class="stat__num"><span data-count="187">0</span><small>+</small></div>
                    <div class="stat__label">Proyectos completados en comunidades vulnerables</div>
                </div>
                <div class="stat" data-animate data-animate-delay="1">
                    <div class="stat__num"><span data-count="12400">0</span><small>+</small></div>
                    <div class="stat__label">Voluntarios activos en toda la región</div>
                </div>
                <div class="stat" data-animate data-animate-delay="2">
                    <div class="stat__num"><span data-count="64">0</span></div>
                    <div class="stat__label">Aliados estratégicos y empresas comprometidas</div>
                </div>
                <div class="stat" data-animate data-animate-delay="3">
                    <div class="stat__num"><span data-count="9">0</span></div>
                    <div class="stat__label">Países latinoamericanos con presencia activa</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== ABOUT ============== -->
    <section class="section section--cream">
        <div class="container">
            <div class="about-block">
                <div class="about-block__visual" data-animate
                     role="img" aria-label="Equipo de econection trabajando en campo">
                    <!-- REEMPLAZA: style="background-image:url(/assets/img/about.jpg)" -->
                    <div class="about-block__visual-tag">
                        <div class="about-block__visual-tag-icon" aria-hidden="true">♥</div>
                        <p>
                            <strong>11 años</strong>
                            sumando manos, ideas y propósito
                        </p>
                    </div>
                </div>

                <div class="about-block__content" data-animate data-animate-delay="1">
                    <span class="eyebrow">Sobre nosotros</span>
                    <h2>Creemos que el cambio empieza por <span class="italic-accent">conectar</span>.</h2>
                    <p class="lead">
                        econection nació con una idea sencilla: cuando las personas que quieren ayudar encuentran a las comunidades que necesitan apoyo, lo imposible se vuelve cotidiano. Hoy somos una red activa que une voluntad, recursos y conocimiento.
                    </p>

                    <div class="about-block__features">
                        <div class="about-block__feature">
                            <div class="about-block__feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-12V5l-8-3-8 3v5c0 8 8 12 8 12z"/></svg>
                            </div>
                            <div>
                                <h4>Transparencia total</h4>
                                <p>Cada peso se rinde y se publica. Ver para creer, y para confiar.</p>
                            </div>
                        </div>
                        <div class="about-block__feature">
                            <div class="about-block__feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"/></svg>
                            </div>
                            <div>
                                <h4>Impacto medible</h4>
                                <p>Medimos cada acción con indicadores claros, públicos y auditables.</p>
                            </div>
                        </div>
                        <div class="about-block__feature">
                            <div class="about-block__feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                            </div>
                            <div>
                                <h4>Comunidad primero</h4>
                                <p>No vamos a "ayudar", vamos a escuchar y construir junto a las comunidades.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/about.php" class="btn btn--ghost" style="margin-top: 36px;">Conoce nuestra historia</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== PROGRAMAS ============== -->
    <section class="section section--white">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Nuestros programas</span>
                <h2>Cuatro frentes, una misma <span class="italic-accent">misión</span>.</h2>
                <p class="lead" style="margin: 16px auto 0;">
                    Trabajamos donde más se necesita: educación, ambiente, fortalecimiento comunitario y voluntariado corporativo.
                </p>
            </div>

            <div class="programs__grid">
                <article class="program-card" data-animate>
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5-10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                    </div>
                    <h3>Educación que transforma</h3>
                    <p class="program-card__desc">
                        Bibliotecas, becas y mentorías para niñas, niños y jóvenes en zonas con bajo acceso a recursos educativos.
                    </p>
                    <a href="/services.php#educacion" class="program-card__link">Conocer más →</a>
                </article>

                <article class="program-card program-card--featured" data-animate data-animate-delay="1">
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z"/><path d="M2 12h20M12 2a15 15 0 010 20 15 15 0 010-20z"/></svg>
                    </div>
                    <h3>Restauración ambiental</h3>
                    <p class="program-card__desc">
                        Reforestación con especies nativas, protección de cuencas y educación ambiental con escuelas locales.
                    </p>
                    <a href="/services.php#ambiente" class="program-card__link">Conocer más →</a>
                </article>

                <article class="program-card" data-animate data-animate-delay="2">
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg>
                    </div>
                    <h3>Comunidades fuertes</h3>
                    <p class="program-card__desc">
                        Acompañamos a líderes barriales con formación, recursos y herramientas para sostener el cambio en el tiempo.
                    </p>
                    <a href="/services.php#comunidades" class="program-card__link">Conocer más →</a>
                </article>

                <article class="program-card" data-animate data-animate-delay="3">
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 11h-6M19 8v6"/></svg>
                    </div>
                    <h3>Voluntariado activo</h3>
                    <p class="program-card__desc">
                        Programas presenciales y remotos para que tu tiempo y tus talentos lleguen donde más impacto generan.
                    </p>
                    <a href="/services.php#voluntariado" class="program-card__link">Conocer más →</a>
                </article>

                <article class="program-card" data-animate data-animate-delay="2">
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16 8l-8 8M8 8l8 8"/></svg>
                    </div>
                    <h3>Aliados corporativos</h3>
                    <p class="program-card__desc">
                        Diseñamos programas de voluntariado e impacto a la medida de tu empresa, con métricas claras y reportes anuales.
                    </p>
                    <a href="/services.php" class="program-card__link">Conocer más →</a>
                </article>

                <article class="program-card" data-animate data-animate-delay="3">
                    <div class="program-card__icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a4 4 0 01-4 4H7l-4 4V5a4 4 0 014-4h10a4 4 0 014 4z"/></svg>
                    </div>
                    <h3>Apadrina una causa</h3>
                    <p class="program-card__desc">
                        Aporta mensualmente al proyecto que más resuene contigo. Recibe reportes y conoce a las personas detrás.
                    </p>
                    <a href="/contact.php" class="program-card__link">Empezar a apadrinar →</a>
                </article>
            </div>
        </div>
    </section>

    <!-- ============== PROYECTOS DESTACADOS ============== -->
    <section class="section section--cream">
        <div class="container">
            <div class="section-head section-head--left" style="text-align: left; max-width: 760px; margin: 0 0 56px;">
                <span class="eyebrow">Proyectos destacados</span>
                <h2>Historias que <span class="italic-accent">cambian</span> realidades.</h2>
            </div>

            <div class="projects__grid">
                <article class="project-card project-card--placeholder" data-animate>
                    <!-- REEMPLAZA: style="background-image:url(/assets/img/proj-1.jpg)" -->
                    <div class="project-card__media"></div>
                    <div class="project-card__body">
                        <span class="project-card__tag">Ambiente</span>
                        <h3 class="project-card__title">Sembrando la cuenca del río Otún</h3>
                        <p class="project-card__meta">Risaralda, Colombia · 2024</p>
                    </div>
                </article>

                <article class="project-card project-card--placeholder-2" data-animate data-animate-delay="1">
                    <div class="project-card__media"></div>
                    <div class="project-card__body">
                        <span class="project-card__tag">Educación</span>
                        <h3 class="project-card__title">Bibliotecas vivas</h3>
                        <p class="project-card__meta">Quito, Ecuador</p>
                    </div>
                </article>
            </div>

            <div class="projects__grid-row-2">
                <article class="project-card project-card--placeholder-3" data-animate data-animate-delay="1">
                    <div class="project-card__media"></div>
                    <div class="project-card__body">
                        <span class="project-card__tag">Comunidades</span>
                        <h3 class="project-card__title">Mujeres que tejen futuro</h3>
                        <p class="project-card__meta">Cusco, Perú</p>
                    </div>
                </article>

                <article class="project-card project-card--placeholder-4" data-animate>
                    <div class="project-card__media"></div>
                    <div class="project-card__body">
                        <span class="project-card__tag">Voluntariado</span>
                        <h3 class="project-card__title">Brigadas urbanas de invierno</h3>
                        <p class="project-card__meta">Santiago, Chile</p>
                    </div>
                </article>
            </div>

            <div style="text-align: center; margin-top: 56px;">
                <a href="/projects.php" class="btn btn--secondary">
                    Ver todos los proyectos
                    <span class="btn__arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ============== PROCESO ============== -->
    <section class="section process">
        <div class="container">
            <div class="section-head" style="margin-bottom: 64px;">
                <span class="eyebrow">Cómo trabajamos</span>
                <h2>Un proceso transparente, <span class="italic-accent">de principio a fin</span>.</h2>
            </div>

            <div class="process__grid">
                <div class="process-step" data-animate>
                    <span class="process-step__num">01</span>
                    <h3>Escuchar</h3>
                    <p>Llegamos al territorio, conversamos con líderes, entendemos las necesidades reales.</p>
                </div>
                <div class="process-step" data-animate data-animate-delay="1">
                    <span class="process-step__num">02</span>
                    <h3>Diseñar</h3>
                    <p>Co-creamos un plan junto a la comunidad, con tiempos, responsables e indicadores.</p>
                </div>
                <div class="process-step" data-animate data-animate-delay="2">
                    <span class="process-step__num">03</span>
                    <h3>Activar</h3>
                    <p>Convocamos voluntarios y aliados, y empezamos a ejecutar paso a paso.</p>
                </div>
                <div class="process-step" data-animate data-animate-delay="3">
                    <span class="process-step__num">04</span>
                    <h3>Medir</h3>
                    <p>Reportamos resultados con datos abiertos. Ajustamos lo que haga falta.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== BENEFICIOS ============== -->
    <section class="section benefits">
        <div class="container">
            <div class="benefits__grid">
                <div data-animate>
                    <span class="eyebrow">Por qué unirte</span>
                    <h2>Más que ayudar: <span class="italic-accent">pertenecer</span>.</h2>
                    <p class="lead" style="color: rgba(247, 249, 251, 0.78); max-width: 42ch;">
                        Cuando entras a econection no eres un donante anónimo: eres parte de una comunidad activa que se acompaña, aprende y celebra los logros junta.
                    </p>
                </div>

                <ul class="benefits__list">
                    <li class="benefit-item" data-animate>
                        <div class="benefit-item__icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                        </div>
                        <div>
                            <h4>Reportes mensuales con resultados reales</h4>
                            <p>Sabes exactamente a dónde llega cada aporte y qué cambia gracias a él.</p>
                        </div>
                    </li>
                    <li class="benefit-item" data-animate data-animate-delay="1">
                        <div class="benefit-item__icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        </div>
                        <div>
                            <h4>Voluntariado flexible, presencial o remoto</h4>
                            <p>Aporta desde donde estés, en el horario que se ajuste a tu vida.</p>
                        </div>
                    </li>
                    <li class="benefit-item" data-animate data-animate-delay="2">
                        <div class="benefit-item__icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                        </div>
                        <div>
                            <h4>Encuentros, talleres y formación continua</h4>
                            <p>Acceso a charlas, capacitaciones y una red de personas con valores afines.</p>
                        </div>
                    </li>
                    <li class="benefit-item" data-animate data-animate-delay="3">
                        <div class="benefit-item__icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15 8.5 22 9.3 17 14 18.2 21 12 17.8 5.8 21 7 14 2 9.3 9 8.5 12 2"/></svg>
                        </div>
                        <div>
                            <h4>Reconocimiento y certificaciones</h4>
                            <p>Tu participación queda registrada y certificada para tu hoja de vida o tu marca.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============== TESTIMONIOS ============== -->
    <section class="section section--white">
        <div class="container">
            <div class="section-head">
                <span class="eyebrow">Testimonios</span>
                <h2>Voces de quienes ya son <span class="italic-accent">parte</span>.</h2>
            </div>

            <div class="testimonials__grid">
                <article class="testimonial" data-animate>
                    <div class="testimonial__stars" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="testimonial__quote">
                        "Llevo tres años acompañando los proyectos de educación. Lo que más me sorprende es que cada peso se ve reflejado en las niñas y niños. La transparencia es real."
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar" aria-hidden="true"></div>
                        <div>
                            <strong>Lucía Mendoza</strong>
                            <span>Voluntaria · Bogotá</span>
                        </div>
                    </div>
                </article>

                <article class="testimonial" data-animate data-animate-delay="1">
                    <div class="testimonial__stars" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="testimonial__quote">
                        "Como empresa buscábamos un aliado serio para nuestro voluntariado corporativo. econection nos sorprendió por el rigor en la medición y el cariño con que tratan a las comunidades."
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar" aria-hidden="true"></div>
                        <div>
                            <strong>Andrés Caballero</strong>
                            <span>Director de sostenibilidad, Gruposol</span>
                        </div>
                    </div>
                </article>

                <article class="testimonial" data-animate data-animate-delay="2">
                    <div class="testimonial__stars" aria-label="5 de 5 estrellas">★★★★★</div>
                    <p class="testimonial__quote">
                        "Llegaron a nuestro barrio sin promesas grandes. Escucharon, propusieron, hicieron. Hoy tenemos un huerto comunitario que da de comer a 40 familias."
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar" aria-hidden="true"></div>
                        <div>
                            <strong>Doña Marta Rincón</strong>
                            <span>Líder comunitaria · Soacha</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ============== FAQ ============== -->
    <section class="section section--cream">
        <div class="container">
            <div class="faq__layout">
                <div class="faq__intro" data-animate>
                    <span class="eyebrow">Preguntas frecuentes</span>
                    <h2>Lo que <span class="italic-accent">probablemente</span> te estás preguntando.</h2>
                    <p class="lead">¿No encuentras tu respuesta? Escríbenos y un humano te responde, no un bot.</p>
                    <a href="/contact.php" class="btn btn--ghost" style="margin-top: 16px;">Hablemos</a>
                </div>

                <div class="faq__list">
                    <div class="faq-item" data-animate>
                        <button class="faq-item__btn" type="button">
                            <span>¿Cómo se utilizan exactamente las donaciones?</span>
                            <span class="faq-item__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-item__panel">
                            <div class="faq-item__panel-inner">
                                Cada peso se asigna a un proyecto específico que tú eliges al momento de donar. El 88% va directo a la operación en territorio, el 8% a medición de impacto y el 4% a sostenibilidad de la organización. Publicamos reportes mensuales auditables.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-animate data-animate-delay="1">
                        <button class="faq-item__btn" type="button">
                            <span>¿Puedo ser voluntario si vivo fuera de Colombia?</span>
                            <span class="faq-item__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-item__panel">
                            <div class="faq-item__panel-inner">
                                Sí. Tenemos programas remotos en mentoría, traducción, diseño, contenido, gestión de datos y más. También coordinamos brigadas presenciales en los 9 países donde trabajamos.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-animate data-animate-delay="2">
                        <button class="faq-item__btn" type="button">
                            <span>¿Mi empresa puede sumarse como aliado?</span>
                            <span class="faq-item__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-item__panel">
                            <div class="faq-item__panel-inner">
                                Por supuesto. Diseñamos programas a la medida que combinan voluntariado corporativo, donaciones y comunicación de impacto. Escríbenos a aliados@econection.org y te enviamos una propuesta inicial en 5 días hábiles.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-animate data-animate-delay="3">
                        <button class="faq-item__btn" type="button">
                            <span>¿Cómo eligen los proyectos a los que apoyan?</span>
                            <span class="faq-item__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-item__panel">
                            <div class="faq-item__panel-inner">
                                Trabajamos con un comité que evalúa propuestas presentadas por organizaciones locales y líderes comunitarios. Los criterios principales son: necesidad real, viabilidad, impacto medible y sostenibilidad en el tiempo.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item" data-animate data-animate-delay="4">
                        <button class="faq-item__btn" type="button">
                            <span>¿Las donaciones son deducibles de impuestos?</span>
                            <span class="faq-item__icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-item__panel">
                            <div class="faq-item__panel-inner">
                                Sí. econection es una entidad sin ánimo de lucro registrada y tus donaciones son deducibles según la legislación de cada país. Te enviamos los certificados correspondientes al cierre del año fiscal.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============== CTA FINAL ============== -->
    <section class="cta-final">
        <div class="container">
            <div class="cta-final__inner" data-animate>
                <div class="cta-final__content">
                    <span class="eyebrow" style="color: var(--color-primary);">Es tu momento</span>
                    <h2>El cambio empieza con un <span class="italic-accent">"sí"</span>.</h2>
                    <p>
                        Tu tiempo, tu talento o tu aporte pueden ser el empujón que una comunidad necesita hoy. Escríbenos y empecemos juntos.
                    </p>
                    <div class="cta-final__ctas">
                        <a href="/contact.php" class="btn btn--primary">
                            Quiero unirme
                            <span class="btn__arrow" aria-hidden="true">→</span>
                        </a>
                        <a href="/projects.php" class="btn btn--light">Ver proyectos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
