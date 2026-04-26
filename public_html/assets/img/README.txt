═══════════════════════════════════════════════════════════════════
econection — Guía de imágenes
═══════════════════════════════════════════════════════════════════

Coloca aquí tus imágenes y reemplaza los placeholders del HTML.
Tamaños recomendados (formato JPG o WebP, ~80% calidad):

──── Home (index.php) ────────────────────────────────────────────

hero.jpg                  → 1000 × 1250 px  (4:5 vertical)
                            En index.php, busca:
                            <div class="hero__visual-main" ...>
                            y añade: style="background-image:url(/assets/img/hero.jpg)"

about.jpg                 → 900 × 1100 px (4:5 vertical)
                            En index.php, busca <div class="about-block__visual" ...>
                            y añade: style="background-image:url(/assets/img/about.jpg)"

proj-1.jpg                → 1200 × 750 px (16:10)
proj-2.jpg                → 600 × 750 px  (4:5)
proj-3.jpg                → 600 × 900 px  (2:3)
proj-4.jpg                → 1200 × 750 px (16:10)
                            Reemplaza .project-card--placeholder, --placeholder-2, etc.
                            con style="background-image:url(/assets/img/proj-N.jpg)"
                            en el div .project-card__media.

──── About (about.php) ───────────────────────────────────────────

about-story.jpg           → 900 × 1100 px (4:5)
team-1.jpg ... team-4.jpg → 600 × 800 px (3:4)
                            Reemplaza los .team-member__photo

──── Services (services.php) ────────────────────────────────────

service-educacion.jpg     → 1000 × 800 px (5:4)
service-ambiente.jpg      → 1000 × 800 px (5:4)
service-comunidades.jpg   → 1000 × 800 px (5:4)
service-voluntariado.jpg  → 1000 × 800 px (5:4)

──── Projects (projects.php) ────────────────────────────────────

project-N.jpg (×9)        → 600 × 750 px (4:5)
                            Reemplaza .project-archive__media

──── Otros ──────────────────────────────────────────────────────

favicon.svg               → Logo cuadrado en SVG (cualquier tamaño)
                            Ya existe uno minimalista; reemplázalo cuando tengas el oficial.

═══════════════════════════════════════════════════════════════════
CONSEJOS
═══════════════════════════════════════════════════════════════════

• Comprime tus imágenes antes de subir: usa squoosh.app o tinypng.com
• Para fondos siempre usa background-image en el HTML, no <img>
• Si una imagen no se ve, revisa que la ruta empiece por / (raíz)
• Mantén nombres en minúsculas, sin espacios ni acentos

═══════════════════════════════════════════════════════════════════
