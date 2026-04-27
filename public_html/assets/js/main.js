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

    /* 7. SERVICES CAROUSEL -------------------------------------------- */
    document.querySelectorAll('[data-services-carousel]').forEach(carousel => {
        const viewport = carousel.querySelector('.services-carousel__viewport');
        const track = carousel.querySelector('.services-carousel__track');
        const prevBtn = carousel.querySelector('.services-carousel__arrow--prev');
        const nextBtn = carousel.querySelector('.services-carousel__arrow--next');
        const dotsWrap = carousel.querySelector('.services-carousel__dots');
        if (!viewport || !track || !prevBtn || !nextBtn || !dotsWrap) return;

        const originals = Array.from(track.children);
        if (originals.length < 2) return;

        const firstClone = originals[0].cloneNode(true);
        const lastClone = originals[originals.length - 1].cloneNode(true);
        firstClone.setAttribute('aria-hidden', 'true');
        lastClone.setAttribute('aria-hidden', 'true');
        firstClone.querySelectorAll('a, button').forEach(el => el.setAttribute('tabindex', '-1'));
        lastClone.querySelectorAll('a, button').forEach(el => el.setAttribute('tabindex', '-1'));
        firstClone.classList.add('is-clone');
        lastClone.classList.add('is-clone');
        track.insertBefore(lastClone, originals[0]);
        track.appendChild(firstClone);

        let slides = Array.from(track.children);
        let index = 1;
        let isAnimating = false;
        let startX = 0;
        let currentX = 0;
        let dragOffset = 0;
        let isDragging = false;
        let hasDragged = false;

        const dots = originals.map((_, dotIndex) => {
            const dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'services-carousel__dot';
            dot.setAttribute('aria-label', `Ir al servicio ${dotIndex + 1}`);
            dot.addEventListener('click', () => goTo(dotIndex + 1));
            dotsWrap.appendChild(dot);
            return dot;
        });

        const realIndex = () => {
            if (index === 0) return originals.length - 1;
            if (index === slides.length - 1) return 0;
            return index - 1;
        };

        const getOffset = (slideIndex) => {
            const slide = slides[slideIndex];
            return slide.offsetLeft - ((viewport.clientWidth - slide.offsetWidth) / 2);
        };

        const setActive = () => {
            const activeReal = realIndex();
            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle('is-active', slideIndex === index);
            });
            dots.forEach((dot, dotIndex) => {
                dot.classList.toggle('is-active', dotIndex === activeReal);
                dot.setAttribute('aria-current', dotIndex === activeReal ? 'true' : 'false');
            });
        };

        const update = (withTransition = true, extraOffset = 0) => {
            carousel.classList.toggle('is-jump', !withTransition);
            track.style.transform = `translateX(${-(getOffset(index) - extraOffset)}px)`;
            setActive();
            if (!withTransition) {
                requestAnimationFrame(() => carousel.classList.remove('is-jump'));
            }
        };

        const goTo = (nextIndex) => {
            if (isAnimating) return;
            index = nextIndex;
            isAnimating = true;
            update(true);
        };

        const next = () => goTo(index + 1);
        const prev = () => goTo(index - 1);

        track.addEventListener('transitionend', () => {
            isAnimating = false;
            if (index === 0) {
                index = originals.length;
                update(false);
            } else if (index === slides.length - 1) {
                index = 1;
                update(false);
            }
        });

        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('click', prev);

        viewport.addEventListener('pointerdown', (e) => {
            if (e.pointerType === 'mouse' && e.button !== 0) return;
            isDragging = true;
            startX = e.clientX;
            currentX = startX;
            dragOffset = 0;
            carousel.classList.add('is-dragging');
            hasDragged = false;
            viewport.setPointerCapture(e.pointerId);
        });

        viewport.addEventListener('pointermove', (e) => {
            if (!isDragging) return;
            currentX = e.clientX;
            dragOffset = currentX - startX;
            if (Math.abs(dragOffset) > 8) hasDragged = true;
            update(false, dragOffset);
        });

        const endDrag = (e) => {
            if (!isDragging) return;
            isDragging = false;
            carousel.classList.remove('is-dragging');
            if (viewport.hasPointerCapture(e.pointerId)) viewport.releasePointerCapture(e.pointerId);

            const threshold = Math.min(90, viewport.clientWidth * 0.16);
            if (dragOffset < -threshold) next();
            else if (dragOffset > threshold) prev();
            else update(true);
            dragOffset = 0;
            window.setTimeout(() => { hasDragged = false; }, 0);
        };

        viewport.addEventListener('pointerup', endDrag);
        viewport.addEventListener('pointercancel', endDrag);
        carousel.addEventListener('click', (e) => {
            if (!hasDragged) return;
            e.preventDefault();
            e.stopPropagation();
        }, true);

        window.addEventListener('resize', () => update(false), { passive: true });

        requestAnimationFrame(() => update(false));
    });

})();
