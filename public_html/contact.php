<?php
$page_title       = 'Contacto — econection';
$page_description = 'Escríbenos. Estamos para resolver dudas, recibir propuestas y conectar con quien quiera sumarse a una causa que importa.';
$current_page     = 'contact';

// Mantiene los valores escritos si el formulario fue rechazado por validación
session_start();
$old    = $_SESSION['form_old']    ?? [];
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_old'], $_SESSION['form_errors']);

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/nav.php';
?>

<main id="main">

    <section class="page-header">
        <div class="container">
            <div class="page-header__inner">
                <nav class="page-header__breadcrumb" aria-label="Breadcrumb">
                    <a href="/index.php">Inicio</a>
                    <span aria-hidden="true">/</span>
                    <span>Contacto</span>
                </nav>
                <span class="eyebrow">Hablemos</span>
                <h1>Cuéntanos qué te trae aquí. Te <span class="italic-accent">respondemos</span> en 48 horas.</h1>
                <p class="lead" style="margin-top: 16px;">
                    Sin formularios eternos ni respuestas automáticas. Una persona del equipo te lee y te escribe de vuelta.
                </p>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="container">
            <div class="contact-layout">

                <aside class="contact-info" data-animate>
                    <div class="contact-info__card">
                        <h4>Escríbenos</h4>
                        <p><a href="mailto:hola@econection.org">hola@econection.org</a></p>
                    </div>
                    <div class="contact-info__card">
                        <h4>Llámanos</h4>
                        <p><a href="tel:+5715550142">+57 (1) 555 0142</a></p>
                    </div>
                    <div class="contact-info__card">
                        <h4>Visítanos</h4>
                        <p>Calle 93 # 11-23<br>Bogotá, Colombia</p>
                    </div>
                    <div class="contact-info__card">
                        <h4>Aliados corporativos</h4>
                        <p><a href="mailto:aliados@econection.org">aliados@econection.org</a></p>
                    </div>
                </aside>

                <form class="contact-form" action="/contact-handler.php" method="POST" novalidate data-animate data-animate-delay="1">
                    <div class="contact-form__grid">

                        <?php if (!empty($errors['general'])): ?>
                            <div class="form-banner" role="alert">
                                <?php echo htmlspecialchars($errors['general']); ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-field <?php echo isset($errors['name']) ? 'form-field--error' : ''; ?>">
                            <label for="name">Nombre completo *</label>
                            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" required>
                            <?php if (!empty($errors['name'])): ?>
                                <p class="form-error"><?php echo htmlspecialchars($errors['name']); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-field <?php echo isset($errors['email']) ? 'form-field--error' : ''; ?>">
                            <label for="email">Correo electrónico *</label>
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" required>
                            <?php if (!empty($errors['email'])): ?>
                                <p class="form-error"><?php echo htmlspecialchars($errors['email']); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="form-field">
                            <label for="phone">Teléfono (opcional)</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($old['phone'] ?? ''); ?>">
                        </div>

                        <div class="form-field">
                            <label for="reason">¿En qué te ayudamos? *</label>
                            <select id="reason" name="reason" required>
                                <?php
                                $reasons = [
                                    ''                      => 'Selecciona una opción',
                                    'voluntariado'          => 'Quiero ser voluntario/a',
                                    'donacion'              => 'Quiero donar o apadrinar',
                                    'aliado-corporativo'    => 'Quiero ser aliado corporativo',
                                    'proponer-proyecto'     => 'Quiero proponer un proyecto',
                                    'prensa'                => 'Soy de medios / prensa',
                                    'otro'                  => 'Otra cosa',
                                ];
                                $sel = $old['reason'] ?? '';
                                foreach ($reasons as $val => $label) {
                                    $selected = ($val === $sel) ? ' selected' : '';
                                    echo '<option value="' . htmlspecialchars($val) . '"' . $selected . '>' . htmlspecialchars($label) . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-field form-field--full <?php echo isset($errors['message']) ? 'form-field--error' : ''; ?>">
                            <label for="message">Cuéntanos un poco más *</label>
                            <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($old['message'] ?? ''); ?></textarea>
                            <?php if (!empty($errors['message'])): ?>
                                <p class="form-error"><?php echo htmlspecialchars($errors['message']); ?></p>
                            <?php endif; ?>
                        </div>

                        <!-- Honeypot anti-spam: NO lo edites visualmente. Si se llena, se descarta el envío. -->
                        <div style="position:absolute;left:-9999px;" aria-hidden="true">
                            <label for="website">No llenar</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-actions">
                            <p class="form-disclaimer">
                                Al enviar este formulario aceptas nuestra política de privacidad. No compartimos tus datos.
                            </p>
                            <button type="submit" class="btn btn--primary">
                                Enviar mensaje
                                <span class="btn__arrow" aria-hidden="true">→</span>
                            </button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
