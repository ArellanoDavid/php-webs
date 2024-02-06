<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu carta</title>
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/creaTuCarta.css">
    <link rel="stylesheet" href="css/styleCarta.css">
	<link rel="stylesheet" href="css/ligas.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    * {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
}
 body {
	 font-family: 'Saira Semi Condensed', sans-serif;
	 font-weight: 400;
	 background: url("https://user-images.githubusercontent.com/22690563/67150939-14a0b180-f2c7-11e9-8016-a993a397e1c5.jpg") no-repeat center center / cover;
}
 .wrapper {
	 position: relative;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 width: 100%;
	 height: auto;
	 min-height: 500px;
}
/* *** fut-player-card styles *** */
 .fut-player-card {
	 position: relative;
	 width: 300px;
	 height: 485px;
	 background-image: url(https://selimdoyranli.com/cdn/fut-player-card/img/card_bg.png);
	 background-position: center center;
	 background-size: 100% 100%;
	 background-repeat: no-repeat;
	 padding: 3.8rem 0;
	 z-index: 2;
	 transition: 200ms ease-in;
     margin: 200px;
     animation: rotateCard 1s ease-in-out; /* Animación */
}
 @keyframes rotateCard {
     0% {
         transform: rotateY(0deg);
     }
     100% {
         transform: rotateY(360deg);
     }
}
 .fut-player-card .player-card-top {
	 position: relative;
	 display: flex;
	 color: grey;
	 padding: 0 1.5rem;
}
 .fut-player-card .player-card-top .player-master-info {
	 position: absolute;
	 line-height: 2.2rem;
	 font-weight: 300;
	 padding: 1.5rem 0;
	 text-transform: uppercase;
}
 .fut-player-card .player-card-top .player-master-info .player-rating {
	 font-size: 2rem;
}
 .fut-player-card .player-card-top .player-master-info .player-position {
	 font-size: 1.4rem;
}
 .fut-player-card .player-card-top .player-master-info .player-nation {
	 display: block;
	 width: 2rem;
	 height: 25px;
	 margin: 0.3rem 0;
}
 .fut-player-card .player-card-top .player-master-info .player-nation img {
	 width: 100%;
	 height: 100%;
	 object-fit: contain;
}
 .fut-player-card .player-card-top .player-master-info .player-club {
	 display: block;
	 width: 2.1rem;
	 height: 40px;
}
 .fut-player-card .player-card-top .player-master-info .player-club img {
	 width: 100%;
	 height: 100%;
	 object-fit: contain;
}
 .fut-player-card .player-card-top .player-picture {
	 width: 200px;
	 height: 200px;
	 margin: 0 auto;
	 overflow: hidden;
}
 .fut-player-card .player-card-top .player-picture img {
	 width: 100%;
	 height: 100%;
	 object-fit: contain;
	 position: relative;
	 right: -1.5rem;
	 bottom: 0;
}
 .fut-player-card .player-card-top .player-picture .player-extra {
	 position: absolute;
	 right: 0;
	 bottom: -0.5rem;
	 overflow: hidden;
	 font-size: 1rem;
	 font-weight: 700;
	 text-transform: uppercase;
	 width: 100%;
	 height: 2rem;
	 padding: 0 1.5rem;
	 text-align: right;
	 background: none;
}
 .fut-player-card .player-card-top .player-picture .player-extra span {
	 margin-left: 0.6rem;
	 text-shadow: 2px 2px grey;
}
 .fut-player-card .player-card-bottom {
	 position: relative;
}
 .fut-player-card .player-card-bottom .player-info {
	 display: block;
	 padding: 0.3rem 0;
	 color: white;
	 width: 90%;
	 margin: 0 auto;
	 height: auto;
	 position: relative;
	 z-index: 2;
}
 .fut-player-card .player-card-bottom .player-info .player-name {
	 width: 100%;
	 display: block;
	 text-align: center;
	 font-size: 1.6rem;
	 text-transform: uppercase;
	 border-bottom: 2px solid grey;
	 padding-bottom: 0.3rem;
	 overflow: hidden;
}
 .fut-player-card .player-card-bottom .player-info .player-name span {
	 display: block;
}
 .fut-player-card .player-card-bottom .player-info .player-features {
	 margin: 0.5rem auto;
	 display: flex;
	 justify-content: center;
}
 .fut-player-card .player-card-bottom .player-info .player-features .player-features-col {
	 border-right: 2px solid grey;
	 padding: 0 2.3rem;
}
 .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span {
	 display: flex;
	 font-size: 1.2rem;
	 text-transform: uppercase;
}
 .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span .player-feature-value {
	 margin-right: 0.3rem;
	 font-weight: 700;
}
 .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span .player-feature-title {
	 font-weight: 300;
}
 .fut-player-card .player-card-bottom .player-info .player-features .player-features-col:last-child {
	 border: 0;
}
</style>
</head>

<?php
            $archivo_nombre = $_FILES["archivo"]["name"]; 
            $archivo_tipo = $_FILES["archivo"]["type"]; 
            $archivo_ruta_temporal = $_FILES["archivo"]["tmp_name"];

            $ruta_completa = pathinfo($archivo_nombre);
            $nombre_sin_extension = $ruta_completa['filename'];
            $extension = $ruta_completa['extension'];
 
            if(file_exists("img/".$archivo_nombre)){
                $contador = 1;

                while(file_exists("img/".$archivo_nombre)){
                    $archivo_nombre = $nombre_sin_extension.$contador.".".$extension;
                    $contador++; 
                }
                if(move_uploaded_file($archivo_ruta_temporal, "img/".$archivo_nombre)){
                    /* echo "<h2>Imagen guardada correctamente</h2>";
                    echo "<br>"; */
                }else{
                    echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                }
            }else{
            
                if(move_uploaded_file($archivo_ruta_temporal, "img/".$archivo_nombre)){
                    /* echo "<h2>Imagen guardada correctamente</h2>"; */
                }else{
                    echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                }
            }            
            
        ?>
<body>
<div class="flechaVolver">
    <a href="index.php">
      <img src="img/flechaVolver.png" alt="">
    </a>
  </div>
	<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $playerName = $_POST["playerName"];
        $position = $_POST["position"];
        $rating = $_POST["rating"];
        $pace = $_POST["pace"];
        $shooting = $_POST["shooting"];
        $passing = $_POST["passing"];
        $dribbling = $_POST["dribbling"];
        $defense = $_POST["defense"];
        $physical = $_POST["physical"];
        $team = $_POST["team"];
        $img = $_POST["img"];
    }
    ?>
    <!-- Font | Optional-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:300,400,700" />
<!-- Wrapper | For this page - !!ignore-->
<div class="wrapper">
    <!-- *** fut-player-card ***-->
    <div class="fut-player-card">
        <!-- Player Card Top-->
        <div class="player-card-top">
            <div class="player-master-info">
				<div class="player-rating"><span style="color:white;"><?php echo $rating; ?></span></div>
                <div class="player-position"><span style="color:white;"><?php echo $position; ?></span></div>
                <div class="player-nation"><img src="img/españa.jpg" alt="Argentina" draggable="false" /></div>
                <div class="player-club"><img src="img/logo.png" alt="FOOTBALL CDM" draggable="false" /></div>
            </div>
            <div class="player-picture"><img src="img/<?php echo $img; ?>" alt="Foto" draggable="false" />
            </div>
        </div>
        <!-- Player Card Bottom-->
        <div class="player-card-bottom">
            <div class="player-info">
                <!-- Player Name-->
                <div class="player-name"><span style="color:white;"><?php echo $playerName; ?></span></div>
                <!-- Player Features-->
                <div class="player-features">
                    <div class="player-features-col"><span><div class="player-feature-value" style="color:white;"><?php echo $pace; ?></div><div class="player-feature-title" style="color:white;">PAC</div></span><span><div class="player-feature-value" style="color:white;"><?php echo $shooting; ?></div><div class="player-feature-title" style="color:white;">SHO</div></span><span><div class="player-feature-value" style="color:white;"><?php echo $passing; ?></div><div class="player-feature-title" style="color:white;">PAS</div></span></div>
                    <div
                        class="player-features-col"><span><div class="player-feature-value" style="color:white;"><?php echo $dribbling; ?></div><div class="player-feature-title" style="color:white;">DRI</div></span><span><div class="player-feature-value" style="color:white;"><?php echo $defense; ?></div><div class="player-feature-title" style="color:white;">DEF</div></span><span><div class="player-feature-value" style="color:white;"><?php echo $physical; ?></div><div class="player-feature-title" style="color:white;">PHY</div></span></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>