/* ==========================================================================
   econection — main.js
   1. Header scroll state
   2. Menú móvil (toggle + overlay)
   3. FAQ accordion
   4. Stats counter al hacer scroll
   5. Animaciones de scroll (IntersectionObserver)
   6. Smooth scroll para anclas
   ========================================================================== */

(function () {
    'use strict';

    /* 1. HEADER SCROLL STATE -------------------------------------------- */
    const header = document.getElementById('siteHeader');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* 2. MENÚ MÓVIL ----------------------------------------------------- */
    const navToggle = document.getElementById('navToggle');
    const siteNav   = document.querySelector('.site-nav');

    if (navToggle && siteNav) {
        // Crear overlay para fondo oscuro
        const overlay = document.createElement('div');
        overlay.className = 'nav-overlay';
        document.body.appendChild(overlay);

        const closeNav = () => {
            siteNav.classList.remove('is-open');
            navToggle.classList.remove('is-active');
            overlay.classList.remove('is-active');
            navToggle.setAttribute('aria-expanded', 'false');
            navToggle.setAttribute('aria-label', 'Abrir menú');
            document.body.style.overflow = '';
        };
        const openNav = () => {
            siteNav.classList.add('is-open');
            navToggle.classList.add('is-active');
            overlay.classList.add('is-active');
            navToggle.setAttribute('aria-expanded', 'true');
            navToggle.setAttribute('aria-label', 'Cerrar menú');
            document.body.style.overflow = 'hidden';
        };

        navToggle.addEventListener('click', () => {
            siteNav.classList.contains('is-open') ? closeNav() : openNav();
        });
        overlay.addEventListener('click', closeNav);

        // Cerrar al hacer click en un enlace del menú
        siteNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeNav);
        });

        // Cerrar con tecla Esc
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && siteNav.classList.contains('is-open')) closeNav();
        });
    }

    /* 3. FAQ ACCORDION -------------------------------------------------- */
    document.querySelectorAll('.faq-item').forEach(item => {
        const btn   = item.querySelector('.faq-item__btn');
        const panel = item.querySelector('.faq-item__panel');
        if (!btn || !panel) return;

        btn.setAttribute('aria-expanded', 'false');
        panel.setAttribute('aria-hidden', 'true');

        btn.addEventListener('click', () => {
            const isOpen = item.classList.contains('is-open');

            // Cerrar otros (comportamiento de acordeón clásico).
            // Comenta este bloque si quieres permitir múltiples abiertos.
            document.querySelectorAll('.faq-item.is-open').forEach(other => {
                if (other !== item) {
                    other.classList.remove('is-open');
                    const op = other.querySelector('.faq-item__panel');
                    const ob = other.querySelector('.faq-item__btn');
                    if (op) { op.style.maxHeight = '0px'; op.setAttribute('aria-hidden', 'true'); }
                    if (ob) ob.setAttribute('aria-expanded', 'false');
                }
            });

            if (isOpen) {
                item.classList.remove('is-open');
                panel.style.maxHeight = '0px';
                panel.setAttribute('aria-hidden', 'true');
                btn.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('is-open');
                panel.style.maxHeight = panel.scrollHeight + 'px';
                panel.setAttribute('aria-hidden', 'false');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });

    /* 4. STATS COUNTER -------------------------------------------------- */
    const formatNumber = (n) => {
        // Devuelve el número con separadores de miles (es-CO usa puntos)
        return new Intl.NumberFormat('es-CO').format(Math.round(n));
    };

    const animateCount = (el) => {
        const target   = parseFloat(el.dataset.count) || 0;
        const duration = 1800;
        const start    = performance.now();

        const tick = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            // Easing easeOutQuart
            const eased = 1 - Math.pow(1 - progress, 4);
            el.textContent = formatNumber(target * eased);
            if (progress < 1) requestAnimationFrame(tick);
            else el.textContent = formatNumber(target);
        };
        requestAnimationFrame(tick);
    };

    /* 5. ANIMACIONES SCROLL + STATS — usando IntersectionObserver ------- */
    if ('IntersectionObserver' in window) {
        const animObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    animObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('[data-animate]').forEach(el => animObserver.observe(el));

        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        document.querySelectorAll('[data-count]').forEach(el => statsObserver.observe(el));
    } else {
        // Fallback sin IntersectionObserver
        document.querySelectorAll('[data-animate]').forEach(el => el.classList.add('is-visible'));
        document.querySelectorAll('[data-count]').forEach(el => {
            el.textContent = el.dataset.count;
        });
    }

    /* 6. SMOOTH SCROLL para anchors --------------------------------- */
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href.length <= 1) return;
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const offset = 80;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });

})();
