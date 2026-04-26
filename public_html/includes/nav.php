<?php
/**
 * Navegación principal.
 * Resalta el enlace activo según $current_page (definida en cada página antes del header).
 */
$nav_items = [
    'home'     => ['label' => 'Inicio',     'href' => '/index.php'],
    'about'    => ['label' => 'Nosotros',   'href' => '/about.php'],
    'services' => ['label' => 'Programas',  'href' => '/services.php'],
    'projects' => ['label' => 'Proyectos',  'href' => '/projects.php'],
    'contact'  => ['label' => 'Contacto',   'href' => '/contact.php'],
];
$current_page = $current_page ?? '';
?>
<header class="site-header" id="siteHeader">
    <div class="container site-header__inner">

        <a href="/index.php" class="brand" aria-label="econection — ir al inicio">
            <span class="brand__mark" aria-hidden="true">
                <!-- Marca SVG simple (reemplaza por tu logo real cuando lo tengas) -->
                <svg viewBox="0 0 40 40" width="36" height="36" fill="none" aria-hidden="true">
  <defs>
    <linearGradient id="ec-mark-b" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#1BA7D7"/><stop offset="1" stop-color="#0C63C9"/></linearGradient>
    <linearGradient id="ec-mark-g" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#8CCB2A"/><stop offset="1" stop-color="#3E9E22"/></linearGradient>
  </defs>
  <path d="M20 4 C 19 14, 14 19, 4 20 C 14 21, 19 26, 20 36 Z" fill="url(#ec-mark-b)"/>
  <path d="M20 4 C 21 14, 26 19, 36 20 C 26 21, 21 26, 20 36 Z" fill="url(#ec-mark-g)"/>
</svg>
            </span>
            <span class="brand__name">
        <span class="brand__name-main">ECONECTION</span>
        <span class="brand__name-tag">Conexiones con Causa</span>
      </span>
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
            <a href="/contact.php" class="btn btn--primary btn--sm">Únete ahora</a>
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
