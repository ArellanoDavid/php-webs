<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$titulo = $titulo_en = $descripcion = $descripcion_en = $precio = $imagen = $tipo = "";
$titulo_err =$titulo_en_err = $descripcion_err = $descripcion_en_err=$precio_err =$tipo_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate titulo
    $input_titulo = trim($_POST["titulo"]);
if(empty($input_titulo)){
    $titulo_err = "Por favor ingrese un titulo.";
} elseif(!preg_match("/^[a-zA-ZñÑ\s]+$/", $input_titulo)){
    $titulo_err = "Por favor ingrese un titulo válido.";
} else{
    $titulo = $input_titulo;
}


    $input_titulo_en = trim($_POST["titulo_en"]);
    if(empty($input_titulo_en)){
        $titulo_en_err = "Por favor ingrese un titulo.";
    } elseif(!filter_var($input_titulo_en, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $titulo_en_err = "Por favor ingrese un titulo válido.";
    } else{
        $titulo_en = $input_titulo_en;
    }


    
    // Validate descripcion 
    $input_descripcion = trim($_POST["descripcion"]);
    if(empty($input_descripcion)){
        $descripcion_err = "Por favor ingrese una dirección.";     
    } else{
        $descripcion= $input_descripcion;
    }

    $input_descripcion_en = trim($_POST["descripcion_en"]);
    if(empty($input_descripcion_en)){
        $descripcion_en_err = "Por favor ingrese una dirección.";     
    } else{
        $descripcion_en= $input_descripcion_en;
    }


    
    // Validate salary
    $input_precio = trim($_POST["precio"]);
    if(empty($input_precio)){
        $precio_err = "Por favor ingrese precio del plato.";     
    } elseif(!ctype_digit($input_precio)){
        $precio_err = "Por favor ingrese un valor positivo y válido.";
    } else{
        $precio = $input_precio;
    }
    // Validate tipo
    
    $input_tipo = trim($_POST["tipo"]);
    $tipo = $input_tipo;



    
    if (isset($_FILES['archivo']) && is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        // Mover la imagen a la carpeta img
        $nombre_imagen = $_FILES['archivo']['name'];
        move_uploaded_file($_FILES['archivo']['tmp_name'], 'img/' . $nombre_imagen);
    } else {
        $nombre_imagen = '';
    }

    // Check input errors before inserting in database
    if(empty($titulo_err) && empty($descripcion_err) && empty($precio_err)){
        // Prepare an update statement
        $sql = "UPDATE carta SET titulo=?,titulo_en=?, descripcion=?,descripcion_en=?, precio=?, tipo=?, imagen=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssi", $param_titulo, $param_titulo_en, $param_descripcion,$param_descripcion_en, $param_precio, $param_tipo, $nombre_imagen, $param_id);
            
            // Set parameters
            $param_titulo = $titulo;
            $param_titulo_en = $titulo_en;
            $param_descripcion = $descripcion;
            $param_descripcion_en = $descripcion_en;
            $param_precio = $precio;
            $param_tipo = $tipo;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: indexcrud.php");
                exit();
            } else{
                echo "Algo salio mal. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM carta WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $titulo = $row["titulo"];
                    $titulo_en = $row["titulo_en"];
                    $descripcion = $row["descripcion"];
                    $descripcion_en = $row["descripcion_en"];
                    $precio = $row["precio"];
                    $imagen = $row["imagen"];
                    $tipo = $row["tipo"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
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
                        <h2>Actualizar Registro</h2>
                    </div>
                    <p>Edite los valores de entrada y envíe para actualizar el registro.</p>
                    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($titulo_err)) ? 'has-error' : ''; ?>">
                            <label>Titulo</label>
                            <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">
                            <span class="help-block"><?php echo $titulo_err;?></span>
                        </div>


                        <div class="form-group <?php echo (!empty($titulo_en_err)) ? 'has-error' : ''; ?>">
                            <label>Titulo ingles</label>
                            <input type="text" name="titulo_en" class="form-control" value="<?php echo $titulo_en; ?>">
                            <span class="help-block"><?php echo $titulo_err;?></span>
                        </div>


                        <div class="form-group <?php echo (!empty($descripcion_err)) ? 'has-error' : ''; ?>">
                            <label>Descripcion</label>
                            <textarea name="descripcion" class="form-control"><?php echo $descripcion; ?></textarea>
                            <span class="help-block"><?php echo $descripcion_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($descripcion_en_err)) ? 'has-error' : ''; ?>">
                            <label>Descripcion ingles</label>
                            <textarea name="descripcion_en" class="form-control"><?php echo $descripcion_en; ?></textarea>
                            <span class="help-block"><?php echo $descripcion_en_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($precio_err)) ? 'has-error' : ''; ?>">
                            <label>Precio</label>
                            <input type="text" name="precio" class="form-control" value="<?php echo $precio; ?>">
                            <span class="help-block"><?php echo $precio_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Tipo</label>

                    <select class="form-control" name="tipo">
                        <option value="principal" <?php echo $tipo == 'principal' ? 'selected' : ''; ?>>principal</option>
                        <option value="bebida" <?php echo $tipo == 'bebida' ? 'selected' : ''; ?>>Bebida</option>
                        <option value="postre" <?php echo $tipo == 'postre' ? 'selected' : ''; ?>>Postre</option>
                    </select>

                    <label>Imagen</label>
                            <input type="file" name="archivo" class="form-control" >

                                            <br>          
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Enviar">
                        <a href="indexcrud.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>