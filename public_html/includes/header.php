<?php
/**
 * Header global del sitio.
 * Espera las variables $page_title y $page_description definidas en cada página antes de incluirlo.
 * Si no se definen, usa valores por defecto.
 */
$page_title       = $page_title       ?? 'econection — Conectando personas con causas que importan';
$page_description = $page_description ?? 'econection es una organización dedicada a impulsar proyectos sociales y ambientales con impacto real en comunidades de toda Latinoamérica.';
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

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body data-page="<?php echo htmlspecialchars($current_page); ?>">

<a class="skip-link" href="#main">Saltar al contenido principal</a>
