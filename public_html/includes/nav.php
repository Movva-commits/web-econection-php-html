<?php
/**
 * Navegación principal.
 * Resalta el enlace activo según $current_page (definida en cada página antes del header).
 */
$nav_items = [
    'home'     => ['label' => 'Inicio',     'href' => '/'],
    'about'    => ['label' => 'Nosotros',   'href' => '/about.php'],
    'services' => ['label' => 'Servicios',  'href' => '/services.php'],
    'projects' => ['label' => 'Causas',     'href' => '/projects.php'],
    'contact'  => ['label' => 'Contacto',   'href' => '/contact.php'],
];
$current_page = $current_page ?? '';
?>
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">

        <a href="/" class="brand" aria-label="econection — ir al inicio">
            <img class="brand__logo" src="/assets/img/logo-econection.svg" alt="ECONECTION — Conexiones con Causa">
        </a>

        <nav class="site-nav" aria-label="Navegación principal">
            <ul class="site-nav__list" id="siteNavList">
                <?php foreach ($nav_items as $key => $item): ?>
                    <li>
                        <a
                            href="<?php echo $item['href']; ?>"
                            class="site-nav__link <?php echo $current_page === $key ? 'is-active' : ''; ?>"
                            <?php if ($current_page === $key) echo 'aria-current="page"'; ?>
                        >
                            <?php echo $item['label']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="site-header__cta">
            <a href="/contact.php" class="btn btn--primary btn--sm">Hablemos</a>
        </div>

        <button
            class="nav-toggle"
            id="navToggle"
            aria-label="Abrir menú"
            aria-controls="siteNavList"
            aria-expanded="false"
        >
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
