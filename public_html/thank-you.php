<?php
$page_title       = 'Gracias — ECONECTION';
$page_description = 'Hemos recibido tu mensaje. El equipo de ECONECTION te responderá pronto.';
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
                Una persona del equipo está leyendo tu mensaje y te responderá pronto. Mientras tanto, puedes revisar nuestros servicios de fundraising y marketing social.
            </p>
            <div class="thank-you__ctas">
                <a href="/services.php" class="btn btn--primary">Ver servicios<span class="btn__arrow" aria-hidden="true">→</span></a>
                <a href="/index.php" class="btn btn--ghost">Volver al inicio</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
