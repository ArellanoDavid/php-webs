<?php
require_once "nav.php";
?>
       <?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "restaurante");

if ($mysqli->connect_error) {
    die("La conexión ha fallado: " . $mysqli->connect_error);
}
?>
 <?php

$sql = "SELECT titulo, descripcion, fotos FROM fotos";
$resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado)) {
    echo "<main>
            <ul class='slider'>";
    
    $fotos = [];
    while ($fila = $resultado->fetch_assoc()) {
        $titulo = $fila["titulo"];
        $descripcion = $fila["descripcion"];
        $fotos = "img/" . $fila["fotos"];

        echo "<li class='item' style=\"background-image: url('$fotos')\">
                <div class='content'>
                  <h2 class='title'>$titulo</h2>
                  <p class='description'>$descripcion</p>
                  <button>Leer mas</button>
                </div>
              </li>";
    }

    echo "</ul>
          <nav class='nav'>
            <ion-icon class='btn prev' name='arrow-back-outline'></ion-icon>
            <ion-icon class='btn next' name='arrow-forward-outline'></ion-icon>
          </nav>
        </main>";

    // Add the script tags for Ionicons and the slider functionality
    echo "<script type='module' src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
          <script nomodule src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
          <script>
            const slider = document.querySelector('.slider');

            function activate(e) {
              const items = document.querySelectorAll('.item');
              e.target.matches('.next') && slider.append(items[0]);
              e.target.matches('.prev') && slider.prepend(items[items.length-1]);
            }

            document.addEventListener('click', activate, false);
          </script>";
} else {
    echo "No se encontraron fotos en la base de datos.";
}

$mysqli->close();
?>












<?php
require_once "darkmode.php";
require_once "footer.php";
?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    
    </body>
</html>