<?php
  include "includes/conexion.php";
?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premier League</title>
  <link rel="stylesheet" href="css/plantilla.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/premierLeague.css">
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
  <section class="cabeceraLiga">
    <article class="cuerpo">
      <h1>Premier League</h1>
    </article>
  </section>
  <section class="principalLiga">
    
<div class="container text-center p-2">
    <div class="row">
  <?php
$sql = "SELECT * FROM equipos where liga='Premier League'";
$resultado = mysqli_query($mysqli, $sql);
if(mysqli_num_rows($resultado)){
  while($fila = mysqli_fetch_assoc($resultado)){ 
       // Imprimir el inicio de una columna Bootstrap
      echo '<div class="col-md-3 mb-4">';
      // Imprimir una tarjeta Bootstrap con ancho completo
      echo '<div class="col-12 col-lg-4 col-xl-3 border" style="width: 100%;">';
      //imprimir el nombre
      echo '<h4 class="pt-3">'. $fila["nombre"] .'</h4>';
      // Imprimir la imagen del personaje con la etiqueta de la parte superior de la tarjeta
      echo '<img src="login/img/' . $fila['imagen'] . '" class="p-3 img-fluid rounded" alt="' . $fila['nombre'] . '">';
      echo '<div class="anio"><strong>Año Fundación</strong></div>';
      echo '<div class="anio">'.$fila["ano"].'</div>';
      echo '<div class="anio"><strong>Títulos</strong></div>';
      echo '<div class="anio">'.$fila["titulos"].'</div>';
      //enlace a equipo
      echo '<div class="d-grid gap-2">
          <br>
          <a href="equipo.php?nombre='.$fila["nombre"].'" class="btn btn-primary mb-3">Leer más</a>
      </div>';
      // Imprimir el cuerpo de la tarjeta con el título y la especie del personaje
      echo '<div class="card-body">';
      // Cerrar la etiqueta del cuerpo de la tarjeta
      echo '</div>';
      // Cerrar la etiqueta de la tarjeta
      echo '</div>';
      // Cerrar la etiqueta de la columna Bootstrap
      echo '</div>';
    }
  }
    ?>
    </div>
  </section>
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Somos apasionados del fútbol y hemos creado este espacio virtual para compartir contigo toda la emoción, información y diversión que rodea a este apasionante deporte. En FOOTBALL CDM, encontrarás un compendio completo de datos sobre equipos, jugadores destacados, eventos, y por supuesto, un toque de humor con nuestros memes futboleros.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
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
            <h6>Quick Links</h6>
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
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
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