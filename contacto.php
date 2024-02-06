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
    <section class="intro-contacto" id="cuerpo1">
        <article class="cuerpo">
            <h2 class="after center">Datos de contacto</h2>
            <p class="intro">Si deseas ponerte en contacto con nosotros puedes llamarnos por teléfono, escribirnos a nuestro correo electrónico o, si lo prefieres, rellenar nuestro formulario. Cuéntanos lo que necesitas y estaremos encantados de poder ayudarte.</p>
            <div class="flexcontainer">
            <div class="cajon">
                <div class="img-izq">
                <img decoding="async" src="img/tlf.png" alt="">
                </div>
                <div class="texto-der">
                <h3>Teléfono</h3>
                <p><a href="tel:624216095" style="color: #fff;">624 21 60 95</a></p>
                </div>
            </div>
            <div class="cajon ultimo">
                <div class="img-izq">
                <img decoding="async" src="img/email.png" alt="">
                </div>
                <div class="texto-der">
                <h3>Email</h3>
                <p><a href="mailto:lacocinademeli@gmail.com" style="color: #fff;">webFutbol@gmail.com</a></p>
                </div>
            </div>
            </div>
        </article>
    </section>
    <section class="formulario">
        <article class="cuerpo">
        <h1>Formulario de contacto</h1>
        <form action="datos.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required=""><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="number" id="telefono" name="telefono" required="" pattern="[0-9]{9,15}"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required=""><br><br>

            <label for="liga">Liga favorita</label>
            <select id="liga" name="liga" required="">
                <option value="LaLiga EA Sports">LaLiga EA Sports</option>
                <option value="Premier League">Premier League</option>
                <option value="Serie A">Serie A</option>
                <option value="Bundesliga">Bundesliga</option>
                <option value="Ligue 1">Ligue 1</option>
                <option value="Saudi Pro League">Saudi Pro League</option>
            </select><br><br>

            <input type="submit" value="Enviar">
        </form>
        </article>
    </section>
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