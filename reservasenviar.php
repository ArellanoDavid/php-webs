

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$reserva = $_POST['reserva'];
$descripcion = $_POST['descripcion'];


$contenido = "Nombre: $nombre\n";

$contenido .= "Email: $email\n";
$contenido .= "Telefono: $telefono\n";
$contenido .= "Reserva: $reserva\n";

$contenido .= "Descripcion: $descripcion\n";




$errores = [];

// Validar que el campo nombre no esté vacío
if (empty($nombre)) {
    $errores[] = "El  nombre no puede estar vacío.";
}

// Validar que el campo teléfono no esté vacío y sea real
if (empty($telefono) || !preg_match('/^[0-9]{9}$/', $telefono)) {
    $errores[] = "El teléfono no puede estar vacío y debe ser un número de teléfono real.";
}

// Validar que el campo email sea real
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El  email debe ser una dirección de correo electrónico real.";
}

// Validar que la fecha de reserva no sea anterior al día actual y no sea superior a 4 semanas respecto al día actual
$fechaReserva = new DateTime($reserva);
$fechaActual = new DateTime();
$fechaMaxima = (clone $fechaActual)->modify('+4 weeks');

if ($fechaReserva < $fechaActual) {
    $errores[] = " ERRORRR introdujiste mal la la fecha (revisa el formulario) = La fecha de reserva no puede ser anterior al día actual.";
} elseif ($fechaReserva > $fechaMaxima) {
    $errores[] = "ERRROR No cogemos reservas a a vista de 4 semanas =Las reservas aún no están abiertas para fechas superiores a 4 semanas respecto al día actual.";
}





// Si hay errores, mostrarlos
if (!empty($errores)) {
    foreach ($errores as $error) {
        echo "<p>$error</p>";
    }
    exit;
}

// Aquí va el resto del código para enviar el correo...


try {
    $mail->isSMTP();
    $mail->Host       = 'segundodaw.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alumno@segundodaw.com';
    $mail->Password   = 'SegundoDAW';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('alumno@segundodaw.com', 'tensuko food basuko');
    $mail->addAddress($email,$nombre);

    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $contenido;
    $mail->AltBody = $contenido;

    $mail->send();
    echo 'RESERVA REALIZADA CON EXITO';
} catch (Exception $e) {
    echo "HUBO UN ERROR AL ENVIAR EL CORREO: {$mail->ErrorInfo}";
}
?>