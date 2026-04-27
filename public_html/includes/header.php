<?php
/**
 * Header global del sitio.
 * Espera las variables $page_title y $page_description definidas en cada página antes de incluirlo.
 * Si no se definen, usa valores por defecto.
 */
$page_title       = $page_title       ?? 'ECONECTION — Conexiones con Causa';
$page_description = $page_description ?? 'ECONECTION es una agencia de marketing social y fundraising que conecta organizaciones, personas y causas mediante campañas de captación y equipos de embajadores.';
$current_page     = $current_page     ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

    <!-- SEO básico / Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#0E2747">

    <!-- Favicon (reemplaza /assets/img/favicon.svg cuando tengas tu logo) -->
    <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">

    <!-- Tipografías -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php if ($current_page === 'home'): ?>
    <link rel="preload" as="image" type="image/webp" href="/assets/img/optimized/hero-800.webp" imagesrcset="/assets/img/optimized/hero-480.webp 480w, /assets/img/optimized/hero-800.webp 800w, /assets/img/optimized/hero-1200.webp 1200w" imagesizes="(max-width: 900px) 90vw, 42vw" fetchpriority="high">
    <link rel="preload" as="image" type="image/webp" href="/uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1280.webp" imagesrcset="/uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-640.webp 640w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-960.webp 960w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1280.webp 1280w, /uploads/optimized/football-players-jubilant-and-hugging-on-pitch-2026-01-09-09-07-52-utc-1600.webp 1600w" imagesizes="(max-width: 900px) 100vw, 62vw">
    <link rel="preload" as="image" type="image/webp" href="/uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-960.webp" imagesrcset="/uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-640.webp 640w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-960.webp 960w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-1280.webp 1280w, /uploads/optimized/girl-telling-a-secret-in-the-ear-of-her-friend-2026-01-11-10-30-44-utc-1600.webp 1600w" imagesizes="(max-width: 900px) 100vw, 28vw">
    <link rel="preload" as="image" type="image/webp" href="/uploads/optimized/group-of-children-holding-hands-together-2026-03-26-04-10-20-utc-960.webp" imagesrcset="/uploads/optimized/group-of-children-holding-hands-together-2026-03-26-04-10-20-utc-640.webp 640w, /uploads/optimized/group-of-children-holding-hands-together-2026-03-26-04-10-20-utc-960.webp 960w, /uploads/optimized/group-of-children-holding-hands-together-2026-03-26-04-10-20-utc-1280.webp 1280w, /uploads/optimized/group-of-children-holding-hands-together-2026-03-26-04-10-20-utc-1600.webp 1600w" imagesizes="(max-width: 900px) 100vw, 38vw">
    <link rel="preload" as="image" type="image/webp" href="/uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1280.webp" imagesrcset="/uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-640.webp 640w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-960.webp 960w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1280.webp 1280w, /uploads/optimized/happy-volunteers-putting-hands-together-wearing-gloves-2026-03-25-08-20-09-utc-1600.webp 1600w" imagesizes="(max-width: 900px) 100vw, 62vw">
    <?php endif; ?>

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body data-page="<?php echo htmlspecialchars($current_page); ?>">

<a class="skip-link" href="#main">Saltar al contenido principal</a>
