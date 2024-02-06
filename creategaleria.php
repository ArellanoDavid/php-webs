<?php
// Include config file
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
 
// Define variables and initialize with empty values
$titulo =$titulo_en= $descripcion =$descripcion_en =  $imagen = "";
$titulo_err =$titulo_en_err = $descripcion_err = $descripcion_en_err ="";

 

  
 
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validar titulo
    $input_titulo = trim($_POST["titulo"]);
    if(empty($input_titulo)){
        $titulo_err = "Por favor ingrese el titulo de la imagen.";
    } elseif(!filter_var($input_titulo, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $titulo_err = "Por favor ingrese un titulo valido.";
    } else{
        $titulo = $input_titulo;
    }
// validar titulo en ingles

    $input_titulo_en = trim($_POST["titulo_en"]);
    if(empty($input_titulo_en)){
        $titulo_en_err = "Por favor ingrese el nombre del plato.";
    } elseif(!filter_var($input_titulo_en, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $titulo_en_err = "Por favor ingrese un nombre válido para el plato.";
    } else{
        $titulo_en = $input_titulo_en;
    }
    
    
    // Validar dscripcion
    $input_descripcion = trim($_POST["descripcion"]);
    if(empty($input_descripcion)){
        $descripcion_err = "Por favor ingrese una descripcion en español.";     
    } else{
        $descripcion = $input_descripcion;
    }

    $input_descripcion_en = trim($_POST["descripcion_en"]);
    if(empty($input_descripcion_en)){
        $descripcion_en_err = "Por favor ingrese una descripcion en ingles.";     
    } else{
        $descripcion_en = $input_descripcion_en;
    }
    
    




    if (isset($_FILES['archivo']) && is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        // Mover la imagen a la carpeta img
        $nombre_imagen = $_FILES['archivo']['name'];
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'img/' . $nombre_imagen);
    } else {
        $nombre_imagen = '';
    }


    if(empty($titulo_err) && empty($descripcion_err) && empty($precio_err)){
    // Preparar la sentencia SQL
    $sql = "INSERT INTO carta (titulo, titulo_en, descripcion, descripcion_en, imagen) VALUES ( ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Vincular los parámetros a la sentencia preparada
        mysqli_stmt_bind_param($stmt, "sssss", $titulo, $titulo_en, $descripcion, $descripcion_en, $nombre_imagen);
    
        // Intentar ejecutar la sentencia preparada
        if (mysqli_stmt_execute($stmt)) {
            // Los registros se crearon correctamente. Redirigir a la página de inicio
            header("location: gestorgaleria.php");
            exit();
        } else {
            echo "ERROR: No se pudo ejecutar la sentencia SQL.";
        }
   
    }
    // Cerrar la sentencia
    mysqli_stmt_close($stmt);
     }
    // Cerrar la conexión
    mysqli_close($link);
}
?>
 

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar imagen y datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Agregar imagen</h2>
                    </div>
                    <p>Favor diligenciar el siguiente formulario, para agregar los datos de la imagen.</p>
                    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($titulo_err)) ? 'has-error' : ''; ?>">
                            <label>Titulo</label>
                            <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">
                            <span class="help-block"><?php echo $titulo_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($titulo_en_err)) ? 'has-error' : ''; ?>">
                            <label>Titulo ingles</label>
                            <input type="text" name="titulo_en" class="form-control" value="<?php echo $titulo_en; ?>">
                            <span class="help-block"><?php echo $titulo_en_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($descripcion_err)) ? 'has-error' : ''; ?>">
                            <label>descripcion</label>
                            <textarea name="descripcion" class="form-control"><?php echo $descripcion; ?></textarea>
                            <span class="help-block"><?php echo $descripcion_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($descripcion_en_err)) ? 'has-error' : ''; ?>">
                            <label>descripcion ingles</label>
                            <textarea name="descripcion_en" class="form-control"><?php echo $descripcion_en; ?></textarea>
                            <span class="help-block"><?php echo $descripcion_en_err;?></span>
                        </div>

                    <br>
                            <label>Imagen</label>
                            <input type="file" name="archivo" class="form-control" >
                    <br>
                    
                    <br>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="gestorgaleria.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    

    


</body>
</html>