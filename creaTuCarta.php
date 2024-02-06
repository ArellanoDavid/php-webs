<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu carta</title>
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/creaTuCarta.css">
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
    <section class="cabeceraCreaTuCarta">
        <article class="cuerpo">
            <h1>Crea tu carta</h1>
        </article>
    </section>
    <section class="formularioDeCreacion">
        <article class="cuerpo">
            <form action="cartaCreada.php" method="POST"  enctype="multipart/form-data">
                <div class="flexcontainer">
                    <div class="columna">
                        <label for="playerName">Nombre del Jugador:</label>
                        <input type="text" id="playerName" name="playerName" required class="izquierda">
                    </div>

                    <div class="columna">
                        <label for="position">Posición:</label>
                        <select id="position" name="position" required class="derecha">
                            <option value="POR">Portero</option>
                            <option value="LD">Lateral Derecho</option>
                            <option value="CAD">Carrilero Derecho</option>
                            <option value="DFC">Defensa Central</option>
                            <option value="LI">Lateral Izquierdo</option>
                            <option value="CAI">Carrilero Izquierdo</option>
                            <option value="MC">Centrocampista</option>
                            <option value="MCD">Mediocampista Defensivo</option>
                            <option value="MI">Mediocampista Izquierdo</option>
                            <option value="MD">Mediocampista Derecho</option>
                            <option value="MCO">Mediocampista Ofensivo</option>
                            <option value="SD">Segundo Delantero</option>
                            <option value="EI">Extremo Izquierdo</option>
                            <option value="ED">Extremo Derecho</option>
                            <option value="DC">Delantero Centro</option>
                        </select>
                    </div>
                    <br>

                </div>
                <div class="flexcontainer">

                    <div class="columna">
                        <label for="rating">Valoración (1-99):</label>
                        <input type="number" id="rating" name="rating" min="1" max="100" required class="izquierda">
                    </div>
                    <div class="columna">
                        <label for="pace">Ritmo (1-99):</label>
                        <input type="number" id="pace" name="pace" min="1" max="100" required class="derecha">
                    </div>
                    <br>
                </div>
                <div class="flexcontainer">
                    <div class="columna">
                        <label for="shooting">Tiro (1-99):</label>
                        <input type="number" id="shooting" name="shooting" min="1" max="100" required class="izquierda">
                    </div>

                    <div class="columna">
                        <label for="passing">Pase (1-99):</label>
                        <input type="number" id="passing" name="passing" min="1" max="100" required class="derecha">
                    </div>
                    <br>
                </div>
                <div class="flexcontainer">
                    <div class="columna">
                        <label for="dribbling">Regate (1-99):</label>
                        <input type="number" id="dribbling" name="dribbling" min="1" max="100" required class="izquierda">
                    </div>

                    <div class="columna">
                        <label for="defense">Defensa (1-99):</label>
                        <input type="number" id="defense" name="defense" min="1" max="100" required class="derecha">
                    </div>
                    <br>
                </div>
                <div class="flexcontainer">
                    <div class="columna">
                        <label for="physical">Físico (1-99):</label>
                        <input type="number" id="physical" name="physical" min="1" max="100" required class="izquierda">
                    </div>

                    <div class="columna">
                        <label for="team">Equipo:</label>
                        <input type="text" id="team" name="team" required class="derecha">
                    </div>
                    <br>
                    <div class="columna">
                        <label for="img">Nombre imagen y extension:</label>
                        <input type="text" id="img" name="img" required class="izquierda">
                    </div>
                    <div class="columna">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control" id="inputGroupFile01" name="archivo">
                    </div>
                </div>
                <button type="submit" class="btnCreaTuCarta">Crear Carta</button>
            </form>
        </article>
    </section>
    
</body>

</html>