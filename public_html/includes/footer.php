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
                    <img class="brand__logo" src="/assets/img/logo-econection-light.svg" alt="ECONECTION — Conexiones con Causa">
                </a>
                <p class="site-footer__tagline">
                    Agencia de marketing social y fundraising. Conectamos organizaciones, personas y causas a través de campañas con estrategia, equipos y propósito.
                </p>
            </div>

            <div class="site-footer__cols">

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Explora</h4>
                    <ul class="site-footer__list">
                        <li><a href="/about.php">Sobre nosotros</a></li>
                        <li><a href="/services.php">Servicios</a></li>
                        <li><a href="/projects.php">Causas</a></li>
                        <li><a href="/contact.php">Contacto</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Servicios</h4>
                    <ul class="site-footer__list">
                        <li><a href="/services.php#fundraising">Fundraising face to face</a></li>
                        <li><a href="/services.php#embajadores">Embajadores sociales</a></li>
                        <li><a href="/services.php#campanas">Campañas para organizaciones</a></li>
                        <li><a href="/services.php#equipos">Crecimiento de equipos</a></li>
                    </ul>
                </div>

                <div class="site-footer__col">
                    <h4 class="site-footer__title">Contacto</h4>
                    <ul class="site-footer__list site-footer__list--plain">
                        <li>hola@econection.org</li>
                        <li>Campañas de fundraising</li>
                        <li>Formación de embajadores sociales</li>
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
