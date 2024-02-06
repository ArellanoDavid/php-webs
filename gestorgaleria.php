<?php


// Configuración de la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "restaurante";

// Crear conexión
$link = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($link->connect_error) {
    die("Error de conexión: " . $link->connect_error);
}

// Establecer el conjunto de caracteres a UTF-8 (opcional)
$link->set_charset("utf8");
function obtenerTotalRegistros($link) {
    $sql = "SELECT COUNT(*) as total FROM fotos";
    $resultado = mysqli_query($link, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    return $fila['total'];
}


$tamanio_pagina = 5; // Puedes ajustar el número de registros por página según tus necesidades

$num_total_registros = obtenerTotalRegistros($link);
$total_paginas = ceil($num_total_registros / $tamanio_pagina);

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
    $inicio = ($pagina - 1) * $tamanio_pagina;
} else {
    $inicio = 0;
    $pagina = 1;
}

$sql = "SELECT * FROM fotos LIMIT " . $inicio . "," . $tamanio_pagina;
$resultado = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GALERIA GESTOR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <button class="button" onclick="location.href='indexcrud.php'">VOLVER</button>
    

    <style type="text/css">
        .wrapper {
            width: 1050px;
            margin: 0 auto;
        }
        .page-header h2 {
            margin-top: 0;
        }
        table tr td:last-child a {
            margin-right: 5px;
        }
        .button {
            display: inline-block;
            
            font-size: 25px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #B03B44;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width: 350px;
            height: 60px;
            margin: 10px;
            
        }
        .btn {
            width: 240px;
            height: 50px;
            font-size:20px;
            
        }
        .button:hover {
            background-color: #6F252F;
        }
        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        a {
            font-size: 18px; 
        }
        h2 {
            font-size: 35px; 
        }
        .tool {
            width:9px;
        }
        table {
            font-size:18px;
        }
        .imagen {
            width:140px;
            height: 160px;
        }
        img {
            object-fit: fill;
        }
        /* Estilos para la paginación */
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
        .pagination li {
            display: inline;
            margin-right: 5px;
        }

        .btn-rojo {
            font-size: 25px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #1e6495;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            width: 350px;
            height: 60px;
            margin: 10px;
            /* Agrega margen inferior para separar del resto del contenido */
    }

    .btn-rojo:hover {
        background-color: #464d70;
        color: white; /* Cambia el color al pasar el ratón sobre el botón */
    }
    .btn-rojo {
        /* ... (estilos existentes) ... */
        margin: 10px; /* Ajusta el margen para la colocación en la esquina */
    }

    </style>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <center><h2>IMAGENES Y TEXTOS</h2></center>
                        <a href="creategaleria.php" class="btn btn-success pull-right">Agregar nueva imagen</a>
                       
                    </div>

                    <?php
                    if (mysqli_num_rows($resultado) > 0) {
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";                                     
                        echo "<th>titulo</th>";
                        echo "<th>descripcion</th>";
                        echo "<th>imagen</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                        while($row = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $row['titulo'] . "</td>";
                            echo "<td>" . $row['descripcion'] . "</td>";
                            
                            echo "<td class='imagen'><img src='img/" . $row['fotos'] . "' style='width:220px';></td>";
                            echo "<td class='tool'>";
                            echo "<a href='readgaleria.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip' data-placement='right'><span class='glyphicon glyphicon-eye-open'></span></a>";
                            echo "<a href='updategaleria.php?id=". $row['id'] ."' title='Actualizar' data-toggle='tooltip' data-placement='right'><span class='glyphicon glyphicon-pencil'></span></a>";
                            echo "<a href='deletegaleria.php?id=". $row['id'] ."' title='Borrar' data-toggle='tooltip' data-placement='right'><span class='glyphicon glyphicon-trash'></span></a>";
                            echo "</td>";
                            echo "</tr>";
                        }

                        echo "</tbody>";                            
                        echo "</table>";

                        // Paginación
                        echo "<ul class='pagination'>";
                        for ($i = 1; $i <= $total_paginas; $i++) {
                            echo "<li><a href='gestorgaleria.php?pagina=" . $i . "'>" . $i . "</a></li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }

                    // Liberar el conjunto de resultados
                    mysqli_free_result($resultado);
                    ?>

                </div>
            </div>        
        </div>
    </div>
</body>
</html>