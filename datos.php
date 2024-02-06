<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <section class="headerReserva">
        <article class="cuerpo">
            <div class="container">
                <div id="logo">
                    <img src="img/logo.png" alt="logoCDM">
                </div>
                <div id="enlaces">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="ligas.php">Ligas</a></li>
                        <li><a href="galeria.php">Galería</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div> 
        </article>
    </section>
    <section class="cabeceraReserva">
        <article class="cuerpo">
            <h1>CONTACTO</h1>
        </article>
    </section>
    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    /* $liga = $_POST['liga']; */

    $contenido = "Nombre: $nombre\n<br>";
    $contenido .= "Email: $email\n<br>";
    $contenido .= "Telefono: $telefono\n<br>";
    /* $contenido .= "Liga: $liga\n<br>"; */

    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre no puede estar vacío.";
    }

    if (empty($telefono) || !preg_match('/^[0-9]{9}$/', $telefono)) {
        $errores[] = "El teléfono no puede estar vacío y debe ser un número de teléfono real.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email debe ser una dirección de correo electrónico real.";
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<p>$error</p>";
        }
        exit;
    }

    try {
        $mail->isSMTP();
        $mail->Host       = 'segundodaw.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'alumno@segundodaw.com';
        $mail->Password   = 'SegundoDAW';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('alumno@segundodaw.com', 'Portfolio');
        $mail->addAddress('sergioesgon18@gmail.com', 'Sergio España');

        $mail->isHTML(true);
        $mail->Subject = 'FOOTBALL CDM';
        $mail->Body    = $contenido;
        $mail->AltBody = $contenido;

        $mail->send();
        echo '<div class="confirmacion">';
        echo '<h1>FORMULARIO ENVIADO CON ÉXITO</h1>';
        echo '<a href="index.php"><button class="button">Volver al inicio</button></a>';
        echo '</div>';
    } catch (Exception $e) {
        echo "HUBO UN ERROR AL ENVIAR EL CORREO: {$mail->ErrorInfo}";
    }
}
?>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>SOBRE NOSOTROS</h6>
            <p class="text-justify">Somos apasionados del fútbol y hemos creado este espacio virtual para compartir contigo toda la emoción, información y diversión que rodea a este apasionante deporte. En FOOTBALL CDM, encontrarás un compendio completo de datos sobre equipos, jugadores destacados, eventos, y por supuesto, un toque de humor con nuestros memes futboleros.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>LIGAS</h6>
            <ul class="footer-links">
              <li><a href="ligaEASports.php">LaLiga EA Sports</a></li>
              <li><a href="premierLeague.php">Premier League</a></li>
              <li><a href="serieA.php">Serie A</a></li>
              <li><a href="ligue1.php">Ligue 1</a></li>
              <li><a href="bundesliga.php">Bundesliga</a></li>
              <li><a href="saudiProLeague.php">Saudi Pro League</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>PÁGINAS DE INTERÉS</h6>
            <ul class="footer-links">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="ligas.php">Ligas</a></li>
              <li><a href="galeria.php">Galería</a></li>
              <li><a href="contacto.php">Contacto</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>