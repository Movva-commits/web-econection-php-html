<?php
/**
 * ============================================================================
 * econection — Contact form handler
 * ============================================================================
 *
 * 👉 PARA CAMBIAR EL CORREO RECEPTOR:
 *    Edita la constante RECIPIENT_EMAIL más abajo.
 *
 *    En Hostinger, asegúrate de que ese correo exista como cuenta dentro de tu
 *    dominio (por ejemplo hola@tudominio.com creado en hPanel → Correos).
 *    Si usas un correo externo (gmail, etc.) puede que llegue a SPAM.
 * ============================================================================
 */

session_start();

// ---- CONFIGURACIÓN -----------------------------------------------------
const RECIPIENT_EMAIL = 'hola@econection.org';   // ← CAMBIA ESTE CORREO
const RECIPIENT_NAME  = 'econection';
const SUBJECT_PREFIX  = '[Web econection] ';

// ------------------------------------------------------------------------

// 1. Solo aceptamos POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact.php');
    exit;
}

// 2. Honeypot: si el campo oculto "website" viene lleno, es un bot
if (!empty($_POST['website'] ?? '')) {
    // Fingimos éxito para no revelar el truco
    header('Location: /thank-you.php');
    exit;
}

// 3. Recoger y limpiar inputs
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$reason  = trim($_POST['reason']  ?? '');
$message = trim($_POST['message'] ?? '');

// 4. Validación
$errors = [];

if ($name === '') {
    $errors['name'] = 'Por favor cuéntanos cómo te llamas.';
} elseif (mb_strlen($name) < 2) {
    $errors['name'] = 'El nombre parece muy corto.';
} elseif (mb_strlen($name) > 120) {
    $errors['name'] = 'El nombre es demasiado largo.';
}

if ($email === '') {
    $errors['email'] = 'Necesitamos un correo para responderte.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Ese correo no parece válido. Revisa la escritura.';
}

if ($message === '') {
    $errors['message'] = 'Cuéntanos un poco más, aunque sea breve.';
} elseif (mb_strlen($message) < 10) {
    $errors['message'] = 'Necesitamos al menos 10 caracteres para entender tu solicitud.';
} elseif (mb_strlen($message) > 5000) {
    $errors['message'] = 'El mensaje es demasiado largo (máx. 5000 caracteres).';
}

// 5. Si hay errores, volver al formulario manteniendo los datos
if (!empty($errors)) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_old']    = [
        'name'    => $name,
        'email'   => $email,
        'phone'   => $phone,
        'reason'  => $reason,
        'message' => $message,
    ];
    header('Location: /contact.php#main');
    exit;
}

// 6. Construir el correo
$reasons_human = [
    'voluntariado'        => 'Quiero ser voluntario/a',
    'donacion'            => 'Quiero donar o apadrinar',
    'aliado-corporativo'  => 'Quiero ser aliado corporativo',
    'proponer-proyecto'   => 'Quiero proponer un proyecto',
    'prensa'              => 'Soy de medios / prensa',
    'otro'                => 'Otra cosa',
];
$reason_label = $reasons_human[$reason] ?? 'No especificado';

$subject = SUBJECT_PREFIX . 'Nuevo mensaje de ' . $name;

$body  = "Has recibido un nuevo mensaje desde el formulario de contacto.\n";
$body .= "------------------------------------------------------------\n";
$body .= "Nombre:   $name\n";
$body .= "Correo:   $email\n";
$body .= "Teléfono: " . ($phone !== '' ? $phone : '— no proporcionado —') . "\n";
$body .= "Motivo:   $reason_label\n";
$body .= "------------------------------------------------------------\n";
$body .= "Mensaje:\n$message\n";
$body .= "------------------------------------------------------------\n";
$body .= "Enviado el: " . date('Y-m-d H:i:s') . "\n";
$body .= "IP origen:  " . ($_SERVER['REMOTE_ADDR'] ?? 'desconocida') . "\n";

// 7. Headers — sin saltos de línea inyectados (anti header injection)
$cleanName  = preg_replace('/[\r\n]+/', ' ', $name);
$cleanEmail = preg_replace('/[\r\n]+/', '', $email);

$headers   = [];
$headers[] = 'From: ' . RECIPIENT_NAME . ' <' . RECIPIENT_EMAIL . '>';
$headers[] = 'Reply-To: ' . $cleanName . ' <' . $cleanEmail . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

// 8. Enviar — silenciamos errores de mail() para no romper el flujo del usuario
$sent = @mail(RECIPIENT_EMAIL, $subject, $body, implode("\r\n", $headers));

// (Opcional) si quieres registrar fallos en un log para depurar:
// if (!$sent) {
//     error_log('[econection] mail() falló para ' . $email . ' a las ' . date('c'));
// }

// 9. Redirigir siempre a la página de gracias (mejor UX que mostrar errores SMTP)
header('Location: /thank-you.php');
exit;
