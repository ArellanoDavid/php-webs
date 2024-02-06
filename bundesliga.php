<?php
  include "includes/conexion.php";
?>  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bundesliga</title>
  <link rel="stylesheet" href="css/plantilla.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/bundesliga.css">
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
      <h1>Bundesliga</h1>
    </article>
  </section>
  <section class="principalLiga">
<div class="container text-center p-2">
    <div class="row">
  <?php
$sql = "SELECT * FROM equipos where liga='Bundesliga'";
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
      echo '<div class="anio"><strong>Títulos<strong></div>';
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
}else{
  echo "Sin resultados";
}      
?>
  </section>
  <section class="footer">
    <article class="cuerpo">
      <ul>
        <li><a href="">Inicio</a></li>
        <li>|</li>
        <li><a href="">Ligas</a></li>
        <li>|</li>
        <li><a href="">Galería</a></li>
        <li>|</li>
        <li><a href="">Contacto</a></li>
      </ul>
      <p></p>
    </article>
  </section>
</body>

</html>