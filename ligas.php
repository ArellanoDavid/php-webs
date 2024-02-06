<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Ligas</title>
  <link rel="stylesheet" href="css/plantilla.css">
  <link rel="stylesheet" href="css/ligas.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

</head>

<body>

  <div class="flechaVolver">
    <a href="index.php">
      <img src="img/flechaVolver.png" alt="">
    </a>
  </div>

  <!-- partial:index.partial.html -->
  <main>
    <ul class='slider'>
      <li class='item' style="background-image: url('img/ligaEaSportsFondo.jpg')">
        <div class='content'>
          <h2 class='title'>La Liga EA Sports</h2>
          <p class='description'>Es la máxima categoría del fútbol profesional en España. La liga es organizada por la
            Liga Nacional de Fútbol Profesional (LFP). LaLiga es una de las ligas de fútbol más prestigiosas y seguidas
            en el mundo. </p>
          <a href="ligaEASports.php"><button>Leer más</button></a>
        </div>
      </li>
      <li class='item' style="background-image: url('img/EPLFondo.jpg')">
        <div class='content'>
          <h2 class='title' style="color:#000">Premier League</h2>
          <p class='description' style="color:#000">La Premier League es la máxima categoría del fútbol profesional en
            Inglaterra y una de las ligas más prestigiosas y seguidas en el mundo.</p>
          <a href="premierLeague.php"><button style="color:#000; border-color:#000;">Leer más</button></a>
        </div>
      </li>
      <li class='item' style="background-image: url('img/serieAFondo.png')">
        <div class='content'>
          <h2 class='title'>Serie A</h2>
          <p class='description'>La Serie A es la máxima categoría del fútbol profesional en Italia y es conocida por
            ser una de las ligas más históricas y competitivas del mundo.</p>
          <a href="serieA.php"><button>Leer más</button></a>
        </div>
      </li>
      <li class='item' style="background-image: url('img/bundesligaFondo.jpg')">
        <div class='content'>
          <h2 class='title' style="color:#000">Bundesliga</h2>
          <p class='description' style="color:#000">La Bundesliga es la máxima categoría del fútbol profesional en
            Alemania y es conocida por su emoción, ritmo rápido y pasión de los aficionados.</p>
          <a href="bundesliga.php"><button style="color:#000; border-color:#000;">Leer más</button></a>
        </div>
      </li>
      <li class='item' style="background-image: url('img/Ligue1Fondo.jpg')">
        <div class='content'>
          <h2 class='title' style="color:#000">Ligue 1</h2>
          <p class='description' style="color:#000">La Ligue 1 es la máxima categoría del fútbol profesional en Francia
            y ha sido históricamente conocida por su calidad técnica, así como por ser la cuna de talentosos
            futbolistas.</p>
          <a href="ligue1.php"><button style="color:#000; border-color:#000">Leer más</button></a>
        </div>
      </li>
      <li class='item' style="background-image: url('img/saudiFondo.jpg')">
        <div class='content'>
          <h2 class='title'>Saudi League</h2>
          <p class='description'>La Saudi Pro League (Liga Profesional Saudí) es la máxima categoría del fútbol
            profesional en Arabia Saudita.</p>
          <a href="saudiProLeague.php"><button>Leer más</button></a>
        </div>
      </li>
    </ul>
    <nav class='nav'>
      <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
      <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
    </nav>
  </main>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- partial -->
  <script src="js/script.js"></script>

</body>

</html>