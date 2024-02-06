<?php
require_once "nav.php";
?>

<div class="d-flex justify-content-center mt-5">
    <a href="bebidas.php" class="btn btn-custom mr-2">Bebidas</a>
    <a href="principales.php" class="btn btn-custom ml-2">Principales</a>
    <a href="postres.php" class="btn btn-custom ml-2">Postres</a>
</div>
<br><br>

<div class="container">
    <div class="row">
        <?php
        // Include config file
        require_once "config.php";

        // Hacemos una consulta que devuelva todos los registros de la tabla.
        $sql = "SELECT * FROM carta where tipo LIKE 'bebida'";

        // Ejecutamos la consulta y la guardamos en una variable.
        $resultado = mysqli_query($link, $sql);

        // Guardamos en una variable el número total de resultados de la consulta.
        $num_total_registros = mysqli_num_rows($resultado);

        // Configuramos el número de registros que se mostrarán por página.
        $tamanio_pagina = 6;

        // Comprobamos si llega alguna variable por GET con la página, en caso de devolver verdadero significa que estamos ya en una página de la paginación. En caso de devolver falso estamos en la primera página.
        if (isset($_GET["pagina"])) {
            // Guardamos la página que llega en una variable para calcular desde qué registro debemos comenzar a mostrar.
            $pagina = $_GET["pagina"];
            // Calculamos el primer registro que debemos comenzar a mostrar.
            $inicio = ($pagina - 1) * $tamanio_pagina;
        } else {
            // Si no llega nada por la variable $_GET["pagina"] creamos el inicio en 0 y la página en 1.
            $inicio = 0;
            $pagina = 1;
        }

        // Hacemos la consulta sql indicando el límite de registros por página.
        $sql = "SELECT * FROM carta WHERE tipo LIKE 'bebida' LIMIT " . $inicio . "," . $tamanio_pagina;
        ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-sm-4 d-flex align-items-stretch">
                        <div class="card">
                            <img class="card-img-top" src="img/<?= $row['imagen']; ?>" style="width:100%; height:auto; object-fit:cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $row['titulo']; ?></h5>
                                <p class="card-text"><?= $row['descripcion']; ?></p>
                                <p class="card-text"><strong>Precio: </strong><?= $row['precio']; ?> €</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php
                }
            }
        }
        ?>
    </div>
</div>

<!-- Paginación -->
<?php
// Mostramos la página actual.
echo "<div class='container mt-4'>";
echo "<div class='row'>";
echo "<div class='col text-center'>";

echo "</div>";
echo "</div>";

// Calculamos el total de páginas que vamos a necesitar en la paginación.
$total_paginas = ceil($num_total_registros / $tamanio_pagina);

// Comprobamos si hay más de una página, para mostrar o no la paginación.
if ($total_paginas > 1) {
    ?>
    <nav>
        <ul class="pagination justify-content-center">
            <?php
            // Con un bucle for creamos los enlaces de paginación.
            for ($i = 1; $i <= $total_paginas; $i++) {
                // En la página en la que estamos vamos a mostrar el enlace con la clase "active" de Bootstrap para diferenciar el elemento activo del resto.
                if ($pagina == $i) {
                    echo "<li class='page-item active'><a class='page-link disabled' href='bebidas.php?pagina=" . $i . "'>" . $i . "</a></li>";
                } else {
                    // Creamos el enlace a cada página sin la clase active.
                    echo "<li class='page-item'><a class='page-link' href='bebidas.php?pagina=" . $i . "'>" . $i . "</a></li>";
                }
            }
            ?>
        </ul>
    </nav>
    <?php
}
echo "</div>";
echo "</div>";
?>

<style>
.card {
    transition: transform .2s;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.btn-custom {
    color: #ffffff !important; /* Texto blanco */
    background-color: #000000 !important; /* Fondo negro */
    border-color: #ffffff !important; /* Borde blanco */
}

.btn-custom:hover {
    color: #000000 !important; /* Texto negro al pasar el ratón */
    background-color: #ffffff !important; /* Fondo blanco al pasar el ratón */
    border-color: #000000 !important; /* Borde negro al pasar el ratón */
}
</style>

<?php
require_once "darkmode.php";
require_once "footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>