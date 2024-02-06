<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <link rel="shortcut icon" href="img/favicon.jpg" />
    </head>
    <style>
        .error {
            color: red;
            margin: 10px;
        }
        
    </style>
    <body class="body-form">

     
      <section class='login' id='login'>
        <div class='head'>
            <img src="https://mateuspntx.github.io/templates/login-page/i/telescope.png">
            <h1 class='company'>ACCESO AL GESTOR</h1>
        </div>
        <p class='msg'>bienvenido</p>
        <div class='form'>
            <form class="formula">
                <input type="text" placeholder='usuario' class='text' id='username' required><br>
                <input type="password" placeholder='••••••••••••••' class='password' id='password'><br>
                <a href="#" class='btn-login' id='do-login'>Login</a>
                <a href="#" class='forgot'>olvidaste?</a>
                <p id="error-message" class="error"></p>
            </form>
        </div>

        <br>
        
        <button onclick="location.href='index.php'" class='btn'>Volver al inicio</button>
        <button onclick="location.href='generador.php'" class='btn'>Crear usuario</button>
    </section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Helvetica+Now&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Serif&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Calibri&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Averta&display=swap');
        .btn{
            color:white;
            font-family: 'Calibri', sans-serif, cursive;
            font-size:25px;
            border:solid 2px white;

            
        }
    </style>
    <script>
        

  document.getElementById('do-login').addEventListener('click', function(event) {
  event.preventDefault();
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Recuperar la contraseña generada del almacenamiento local
  var storedPassword = localStorage.getItem('generatedPassword');

  if (username === 'superusuario' && password === storedPassword) {
    window.location.href = 'indexcrud.php';
  } else {
    document.getElementById('error-message').textContent = 'Usuario y contraseña incorrectos';
  }
});







// Add event listener to generate button





document.querySelector('.volver-btn').addEventListener('click', function() {
    window.location.href = 'login.php';
});
    
        
        
    </script>
    
        
    </body>
    </html>