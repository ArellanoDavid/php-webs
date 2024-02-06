<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/plantilla.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="js/script.js"></script>
  <title>Football CDM</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <section class="cabecera">
    <div class="container-fluid">
      <div id="upper">
        <img src="img/logo.png" alt="">
        <a href="login/login.php"><div id="user">
        <img src="img/usuario.png" alt="">
        </div>
        </a>
      </div>
    </div>
    <nav class="container-fluid">
      <ul>
        <li class="main left"><span><a href="index.php">INICIO</a></span></li>
        <li class="main"><span><a href="ligas.php">LIGAS</a></span></li>
        <li class="main"><span><a href="galeria.php">GALERÍA</a></span></li>
        <li class="right"><span><a href="contacto.php">CONTACTO</a></span></li>
      </ul>
    </nav>
  </section>

  <section class="principal" >
    <article class="cuerpo">
      <div class="flexcontainer">
        <div class="izq">
          <h1>FOOTBALL<span style="color:red">CDM</span></h1>
        </div>
        <div class="der">
          <img src="img/balonPrincipal.png" alt="">
        </div>
      </div>
      <a href="#cuerpo1" class="flechabajar"><img decoding="async" src="img/flechabajar.png" alt=""></a>
    </article>
  </section>

  <section class="creaTuCarta" id="cuerpo1">
    <article class="cuerpo">
      <div class="flexcontainer">
        <div class="izq">
          <h2>CREA TU CARTA</h2>
          <p>Experimenta la emoción de tener tu propia carta personalizada de FIFA con nuestro generador en línea. Crea
            y personaliza tu jugador virtual con estadísticas, posición en el campo y detalles visuales únicos.</p>
          <a href="creaTuCarta.php" class="btn">Ver más</a>
        </div>
        <div class="der">
          <div id="card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 267.3 427.3">
              <clipPath id="svgPath">
                <path fill="#000"
                  d="M265.3 53.9a33.3 33.3 0 0 1-17.8-5.5 32 32 0 0 1-13.7-22.9c-.2-1.1-.4-2.3-.4-3.4 0-1.3-1-1.5-1.8-1.9a163 163 0 0 0-31-11.6A257.3 257.3 0 0 0 133.7 0a254.9 254.9 0 0 0-67.1 8.7 170 170 0 0 0-31 11.6c-.8.4-1.8.6-1.8 1.9 0 1.1-.2 2.3-.4 3.4a32.4 32.4 0 0 1-13.7 22.9A33.8 33.8 0 0 1 2 53.9c-1.5.1-2.1.4-2 2v293.9c0 3.3 0 6.6.4 9.9a22 22 0 0 0 7.9 14.4c3.8 3.2 8.3 5.3 13 6.8 12.4 3.9 24.8 7.5 37.2 11.5a388.7 388.7 0 0 1 50 19.4 88.7 88.7 0 0 1 25 15.5v.1-.1c7.2-7 16.1-11.3 25-15.5a427 427 0 0 1 50-19.4l37.2-11.5c4.7-1.5 9.1-3.5 13-6.8 4.5-3.8 7.2-8.5 7.9-14.4.4-3.3.4-6.6.4-9.9V231.6 60.5v-4.6c.4-1.6-.3-1.9-1.7-2z" />
              </clipPath>
            </svg>
            <div id="card-inner">
              <div id="card-top">

                <div class="info">
                  <div class="value">94</div>
                  <div class="position">st</div>
                  <div class="country">
                    <div></div>
                  </div>
                  <div class="club">
                    <div></div>
                  </div>
                </div>
                <div class="image"></div>
                <div class="backfont">FUT19</div>
              </div>
              <div id="card-bottom">
                <div class="name">ronaldo</div>
                <div class="stats">
                  <div>
                    <ul>
                      <li><span>89</span><span>pac</span></li>
                      <li><span>94</span><span>sho</span></li>
                      <li><span>81</span><span>pas</span></li>
                    </ul>
                  </div>
                  <div>
                    <ul>
                      <li><span>90</span><span>dri</span></li>
                      <li><span>33</span><span>def</span></li>
                      <li><span>83</span><span>phy</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </section>

  <section class="fantasy">
    <article class="cuerpo">
      <div class="flexcontainer">
        <div class="izq">
          <img style="width:475px;" src="img/jug.jpg" alt="">
        </div>
        <div class="der">
          <h2>NOTICIAS</h2>
          <p>Bienvenido al emocionante mundo de las noticias de fútbol, donde cada día trae consigo nuevas historias apasionantes, giros inesperados y momentos que quedarán grabados en la memoria de los amantes de este deporte. Desde los campos de juego hasta los titulares de los periódicos, nuestro apartado de noticias te mantiene al día con los acontecimientos más destacados del fútbol mundial. Echa un vistazo a las historias más recientes que están dando de qué hablar.</p>
          <a href="galeria.php" class="btn">Ver más</a>
        </div>
      </div>
    </article>
  </section>

  <section class="ligas">
    <article class="cuerpo">
      <h2>LIGAS</h2>
      <p>Bienvenido a nuestro rincón dedicado a las ligas de fútbol más destacadas a nivel global. Sumérgete en la
        pasión y la emoción de los terrenos de juego de todo el mundo mientras exploras detalladamente las ligas que han
        dejado una huella imborrable en la historia del deporte rey. Desde los icónicos encuentros de la Premier League
        en Inglaterra hasta la intensidad táctica de la Serie A italiana, este espacio te invita a descubrir los
        secretos, las rivalidades y los momentos históricos que han forjado el carácter único de cada liga. Ya seas un
        apasionado seguidor de La Liga española, la Bundesliga alemana, la Ligue 1 francesa o cualquier otra</p>
      <a href="ligas.php" class="btn">Ver más</a>

      <div class="container">
        <div class="foto_ligas">
          <img src="img/epl.png" alt="">
        </div>
        <div class="foto_ligas">
          <img src="img/laligasan.png" alt="">
        </div>
        <div class="foto_ligas">
          <img src="img/seriea.png" alt="">
        </div>
        <div class="foto_ligas">
          <img src="img/bundes.png" alt="">
        </div>
        <div class="foto_ligas" id="ligue1">
          <img src="img/ligue1.png" alt="">
        </div>
        <div class="foto_ligas">
          <img src="img/saudi.png" alt="">
        </div>
      </div>
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