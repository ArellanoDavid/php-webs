<!-- HE CAMBIADO UNA LINEA EN EL CODIGO BOOTSTRAP, EL .col-md-6 pr-0 HE CAMBIADO EL VALOR DE PADDING-LEFT DE 15PX A 2PX -->


<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <title>Galeria FutbolCDM</title>
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
    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
            <nav class="navbar">
        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="img/marca.jpg" alt="Foto del marca" height="662px" width="100%">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>NOTICIAS</p>
                        <hr />
                        <h2>HABLAMOS DE LAS NOTICIAS</h2>
                        <a href="https://www.marca.com" class="btn" target="_blank">LEER MÁS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pr-0">
                <div class="card" >
                    <img class="card-img" src="img/erlingo.jpg" alt="Foto de meme de futbol" height="662px" >
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <p>MEMES</p>
                        <hr />
                        <h2>PARA QUE TE RIAS</h2>
                        <a href="https://es.memedroid.com/memes/tag/futbol" class="btn" target="_blank">LEER MÁS</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pr-0 first">
                <div class="card">
                    <img class="card-img" src="img/messi.jpg" alt="Foto de messi con los balones de oro" height="450px">
                    <div class="card-img-overlay">
                        <h5>MESSI</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="img/cr.jpg" alt="Foto de Cristiano Ronaldo" height="450px">
                    <div class="card-img-overlay">
                        <h5>CRISTIANO</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="img/neymar.jpg" alt="Foto de Neymar" height="450px">
                    <div class="card-img-overlay">
                        <h5>NEYMAR</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 last">
                <div class="card">
                    <img class="card-img" src="img/BELI.jpg" alt="Foto de Bellingham" height="450px">
                    <div class="card-img-overlay">
                        <h5>BELINGHAM</h5>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="container-fluid video-player">
        <div class="container">
            <div class="screen embed-responsive embed-responsive-16by9">
                <iframe id="mainVideo" width="560" height="215" src="https://www.youtube.com/embed/Z0eKXieepCg?si=CWwR16n7cpiUQp1Q&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card" onclick="changeVideo('https://www.youtube.com/embed/CpWK_Dh_68c?si=KGFLNFe3NkWYkW5f&amp;controls=0')">
                        <img class="card-img" src="img/entradadura.jpg" alt="La mano de Dios" height="220">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" onclick="changeVideo('https://www.youtube.com/embed/VEg4MO9xMbI?si=vFatZ5zBiDQ7lCm7&amp;controls=0')">
                        <img class="card-img" src="img/llorando.jpg" alt="El mundial de España" height="220">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" onclick="changeVideo('https://www.youtube.com/embed/Z0eKXieepCg?si=CWwR16n7cpiUQp1Q&amp;controls=0')">
                        <img class="card-img" src="img/ronal.jpg" alt="Mejores Goles del Futbol" height="220">
                    </div>
                </div>
            </div>
            <script>
                function changeVideo(videoSrc) {
                    document.getElementById("mainVideo").src = videoSrc;
                }
            </script>
            <hr>



            <div class="row vr-gallery">
                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md maradona">
                            <img src="img/mao.jpg" alt="La mano de Dios">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>junio 22, 1986</small></p>
                            <h3>La mano
                                de Dios</h3>
                            <p>
                                Todos recordareís el gol que marco historia siendo apodado como "La mano de Dios",
                                el gol del excelentisimo Diego Maradona que consigió meter un gol con la mano en el mundial
                                del 1986 ante el Inglaterra.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <iframe width="356" height="330" src="https://www.youtube.com/embed/p-QOLsypsnQ?si=lvjnhyAtfl18FvvH&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-8 mb-4 pr-0 pd-md">
                    <div class="card">
                        <img class="card-img h-100" src="img/alemania.jpg" alt="El 7-1 de Alemania a Brasil">
                        <div class="card-img-overlay">
                            <div class="contact-box">
                                <p><small>julio 8, 2014</small></p>
                                <h3>7-1 de Alemania a Barsil</h3>
                                <p>
                                    Nos remontamos a las semifinales de la copa del mundo del 2014, donde el 8 de julio se enfrentaría,
                                    la gran Brasil contra Alemania y sería historicamente humillada con un resultado de 7 goles a 1 a favor
                                    de la selección Alemana.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="img/descarga.jpg" alt="El mundial de España">
                        <div class="card-body bg-gray cus-pd2 cus-arrow-up">
                            <p><small>julio 11, 2010</small></p>
                            <h3>El mundial
                                de España</h3>

                            <p>
                                Creo que no hace falta recordar aquel caluroso dia del 2010, y sobre todo el enfrentamiento
                                de España y Paises Bajos por la copa del mundo donde Andresito Iniesta con un derechazo en el
                                minuto 116 pondría a todo el país de pie.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 mb-4">
                    <div class="row">
                        <div class="col-md-12 col-lg-7 pr-0 pd-md cabezazo">
                            <img src="img/cabezazo.jpg" alt="Cabezazo de Zidane">
                        </div>
                        <div class="col-md-12 col-lg-5 light-bg cus-pd cus-arrow-left">
                            <p><small>julio 9, 2006</small></p>
                            <h3>El cabezazo</h3>
                            <p>
                                La cosa va de mundiales, remontamos al 9 de julio del 2006, donde se disputaba un partido
                                trnaquilo entre Italia y Francia, un partido con algo de tensión donde en una franja del 
                                encuentro Zinedine Zidan le dió un cabezazo a Marco Materazzi en el pecho, siendo expulsado
                                del partido.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pl-4 mb-4">
                    <div class="card">
                        <iframe width="356" height="255" src="https://www.youtube.com/embed/LQcePXrqTDQ?si=oTqZ_z6uBXg3Ybmt&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <a href="https://www.expressvpn.com/es/blog/los-15-momentos-mas-impresionantes-de-la-historia-de-los-mundiales/" class="btn" target="_blank">LEER MÁS</a>

                </div>
            </div>

        </div>
    </div>


    
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