<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD BASUKO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <script type="text/javascript" src="js/javascript.js"></script>
    <link rel="shortcut icon" href="img/favicon.jpg" />
    </head>
    <body>
   

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img class="logo" src="img/logo.png" alt="logo restaurante" width="150px" height="150px">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">FOOD BASUKO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galeria.php">GALERIA DE IMAGENES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservas.php">RESERVAS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        NUESTRA CARTA
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="principales.php">Principales</a></li>
                        <li><a class="dropdown-item" href="bebidas.php">Bebidas </a></li>
                        <li><a class="dropdown-item" href="postres.php">Postres</a></li>
                    </ul>
                </li>
                <li style="margin-left: 50px;">
                <div id="language-switch">
                    <img src="img/inglaterra.png"  class="miClase" alt="Bandera de Inglaterra" onclick="location.href='ingles/index.php'">
                </div>
                </li>
                <li style="margin-left: 50px;">
               <div class="btn-container ">
		        <i class="fa fa-sun-o" aria-hidden="true"><img class="sol"src="img/sol2.png" alt=""></i>
			    <label class="switch btn-color-mode-switch">
		        <input type="checkbox" name="color_mode" id="color_mode" value="1">
		        <label for="color_mode" data-on="Oscuro" data-off="Claro" class="btn-color-mode-switch-inner"></label>
		    </label>
	            <i class="fa fa-moon-o" aria-hidden="true"><img class="lunaa"src="img/luna2.png" alt=""></i>
     
	</div>
                </li>
                <li>
    <button class="login-button" style="margin-left: 200px;" onclick="location.href='login.php'">Acceso</button>
</li>
            </ul>
           
    </nav>


    <style>
        

       
        .lunaa{
            width:30px;
            height:30px
        }
        .sol{
            width:35px;
            height:35px
        }


        div.btn-container{
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

div.btn-container i{
    display: inline-block;
    position: relative;
    top: -9px;
}

label {
    font-size: 13px;
    color: #424242;
    font-weight: 500;
}

.btn-color-mode-switch{
    display: inline-block;
    margin: 13px;
    position: relative;
}

.btn-color-mode-switch > label.btn-color-mode-switch-inner{
    margin: 0px;
    width: 140px;
    height: 30px;
    background: #E0E0E0;
    border-radius: 26px;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 0px 0px 8px 0px rgba(17, 17, 17, 0.34) inset;
    display: block;
}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:before{
    content: attr(data-on);
    position: absolute;
    font-size: 12px;
    font-weight: 500;
    top: 7px;
    right: 20px;

}

.btn-color-mode-switch > label.btn-color-mode-switch-inner:after{
    content: attr(data-off);
    width: 70px;
    height: 26px;
    background: #fff;
    border-radius: 26px;
    position: absolute;
    left: 2px;
    top: 2px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0px 0px 6px -2px #111;
    padding: 5px 0px;
}

.btn-color-mode-switch > .alert{
    display: none;
    background: #FF9800;
    border: none;
    color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]{
    cursor: pointer;
    width: 50px;
    height: 25px;
    opacity: 0;
    position: absolute;
    top: 0;
    z-index: 1;
    margin: 0px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
    background: #151515;
    color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after{
    content: attr(data-on);
    left: 68px;
    background: #3c3c3c;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before{
    content: attr(data-off);
    right: auto;
    left: 20px;
}

.btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner{
    background: #66BB6A; 
    color: #fff;
}

.btn-color-mode-switch input[type="checkbox"]:checked ~ .alert{
    display: block;
}

/*mode preview*/
.dark-preview{
    background: #0d0d0d;
}

.dark-preview div.btn-container i.fa-sun-o{
    color: #777;
}

.dark-preview div.btn-container i.fa-moon-o{
    color: #fff;
    text-shadow: 0px 0px 11px #fff;
}

.white-preview{
    background: #fff;
}

.white-preview div.btn-container i.fa-sun-o{
    color: #ffa500;
    text-shadow: 0px 0px 16px #ffa500;
}

.white-preview div.btn-container i.fa-moon-o{
    color: #777;
}



p.by a{
    text-decoration: none;
    color: #000;
}

.dark-preview p.by a{
    color: #777;
}

.white-preview p.by a{
    color: #000;
}

#language-switch {
    display: flex;
    align-items: center;
    padding: 15px 32px;
}

#language-switch img {
    width: 35px;
    height: 35px;
    margin-right: 10px;
    cursor: pointer;
}

.login-button {
    background-color: #000; /* Negro */
    border: none;
    color: #fff; /* Blanco */
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-button:hover {
    background-color: #808080; /* Gris */
} 

.logo {
    transition: transform 0.5s ease-in-out;
}

.logo:hover {
    transform: scale(1.1); /* Aumenta el tamaño del logo al pasar el ratón */
    filter: brightness(150%); /* Ilumina el logo al pasar el ratón */
}
.miClase {
    transition: transform 0.5s ease-in-out;
}

.miClase:hover {
    transform: scale(1.1); /* Aumenta el tamaño de la imagen al pasar el ratón */
    filter: brightness(120%); /* Ilumina la imagen al pasar el ratón */
}

</style>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
<script>


</script>