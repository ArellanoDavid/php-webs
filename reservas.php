<?php
require_once "nav.php";
?>
    
     
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center" style="background-color: #34495e; color: white; font-family: 'Helvetica Neue', sans-serif;">
                    <h2 style="font-weight: bold;">Formulario de Reserva</h2>
                </div>
                <div class="card-body" style="font-family: 'Helvetica Neue', sans-serif;">
                    <form class="dark" method="POST" action="reservasenviar.php">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Introduce tu email">
            </div>
            <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="tel" name="telefono" required class="form-control" id="telefono" placeholder="Introduce tu teléfono">
            </div>
            <div class="form-group">
                            <label for="fecha">Fecha de Reserva:</label>
                            <input type="date" name="reserva" class="form-control" id="fecha">
            </div>
           
            <div class="form-group">
                           <label for="hora">Hora de Reserva:</label>
                              <select name="hora" class="form-control" id="hora">
                              <option value="13:00">13:00</option>
                              <option value="13:30">13:30</option>
                              <option value="14:00">14:00</option>
                              <option value="14:30">14:30</option>
                              <option value="15:00">15:00</option>
                              <option value="20:30">20:30</option>
                              <option value="21:00">21:00</option>
                              <option value="21:30">21:30</option>
                              <option value="22:00">22:00</option>
                              <option value="22:30">22:30</option>
                </select>
            </div>
            
            <div class="form-group">

                          <label for="descripcion">Descripción:</label>
                          <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Introduce una descripción (Alergenos..preferencias.. numero de personas etc)"></textarea>
            </div>
            <br>
                        <!-- Resto de los campos del formulario -->
                        <button type="submit" class="btn btn-block" style="background-color: #34495e; color: white;">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


 
<?php

require_once "darkmode.php";
require_once "footer.php";
?>

        
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    </body>
</html>

        







      