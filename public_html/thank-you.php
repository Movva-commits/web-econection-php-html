<?php
$page_title       = '¡Gracias! — econection';
$page_description = 'Hemos recibido tu mensaje. Te responderemos en menos de 48 horas.';
$current_page     = '';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main">
    <section class="thank-you">
        <div class="thank-you__inner">
            <div class="thank-you__icon" aria-hidden="true">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
            </div>
            <span class="eyebrow">Mensaje recibido</span>
            <h1>¡Gracias por <span class="italic-accent">escribirnos</span>!</h1>
            <p>
                Una persona del equipo está leyendo tu mensaje y te responderá en menos de 48 horas hábiles. Mientras tanto, te invitamos a conocer lo que estamos haciendo.
            </p>
            <div class="thank-you__ctas">
                <a href="/projects.php" class="btn btn--primary">Ver proyectos<span class="btn__arrow" aria-hidden="true">→</span></a>
                <a href="/index.php" class="btn btn--ghost">Volver al inicio</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
