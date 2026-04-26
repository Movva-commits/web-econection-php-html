<?php
/**
 * Footer global del sitio + cierre del documento HTML.
 */
?>
<footer class="site-footer">
    <div class="container">

        <div class="site-footer__top">
            <div class="site-footer__brand">
                <a href="/index.php" class="brand brand--light">
                    <span class="brand__mark" aria-hidden="true">
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
                <p class="site-footer__tagline">
                    Tejemos puentes entre comunidades, ideas y recursos para que las causas que importan ocurran de verdad.
                </p>
            </div>

            <div class="site-footer__cols">

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Explora</h4>
                    <ul class="site-footer__list">
                        <li><a href="/about.php">Sobre nosotros</a></li>
                        <li><a href="/services.php">Programas</a></li>
                        <li><a href="/projects.php">Proyectos</a></li>
                        <li><a href="/contact.php">Contacto</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Causas</h4>
                    <ul class="site-footer__list">
                        <li><a href="/services.php#educacion">Educación</a></li>
                        <li><a href="/services.php#ambiente">Ambiente</a></li>
                        <li><a href="/services.php#comunidades">Comunidades</a></li>
                        <li><a href="/services.php#voluntariado">Voluntariado</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Contacto</h4>
                    <ul class="site-footer__list site-footer__list--plain">
                        <li>hola@econection.org</li>
                        <li>+57 (1) 555 0142</li>
                        <li>Calle 93 # 11-23, Bogotá</li>
                    </ul>
                    <div class="site-footer__social" aria-label="Redes sociales">
                        <a href="#" aria-label="Instagram">IG</a>
                        <a href="#" aria-label="LinkedIn">in</a>
                        <a href="#" aria-label="YouTube">YT</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-footer__bottom">
            <p>© <?php echo date('Y'); ?> econection. Todos los derechos reservados.</p>
            <p>
                <a href="#">Política de privacidad</a>
                <span aria-hidden="true">·</span>
                <a href="#">Términos</a>
            </p>
        </div>
    </div>
</footer>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
