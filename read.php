<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM carta WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
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
                $imagen = $row["tipo"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ver plato</title>
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
                        <h1>Ver plato</h1>
                    </div>
                    <div class="form-group">
                        <label>Titulo</label>
                        <p class="form-control-static"><?php echo $row["titulo"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Titulo en ingles</label>
                        <p class="form-control-static"><?php echo $row["titulo_en"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Descripcion</label>
                        <p class="form-control-static"><?php echo $row["descripcion"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Descripcion en ingles</label>
                        <p class="form-control-static"><?php echo $row["descripcion_en"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <p class="form-control-static"><?php echo $row["precio"]; ?></p>
                    </div>
                   
                    <div class="form-group">
                        <label>Tipo</label>
                        <p class="form-control-static"><?php echo $row["tipo"]; ?></p>
                    </div>

                    <div class="form-group">
                        <label>Imagen</label>
                        <p class="form-control-static"><?php echo "<img src='img/" . $row['imagen'] . "' style='width:130px'>"; ?></p>
                    </div>
                    <p><a href="indexcrud.php" class="btn btn-primary">Volver</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>