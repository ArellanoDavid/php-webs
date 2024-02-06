<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  

    <div class="wrapper">
      <header>
        <h1>GENERADOR DE CONTRASEÑAS</h1>

      </header>
      <div class="card">
        <div class="card-header">
          <h2>Genera tu contraseña</h2>
          
        </div>
        <div class="card-body">
          <textarea
            readonly
            id="password"
            placeholder="Your Secure Password"
            aria-label="Generated Password"
          ></textarea>
  

        </div>
        <div class="card-footer">
          <button  id="generate" class="btn">Generar Contraseña</button>
       
        </div>
      </div>
    </div>

    <button class="boton-volver">Volver</button>

  </body>
</html>
<style>
    *,
*::before,
*::after {
  box-sizing: border-box;
}

html,
body,
.wrapper {
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  font-family: sans-serif;
  background-color: #f9fbfd;
}

.wrapper {
  padding-top: 30px;
  padding-left: 20px;
  padding-right: 20px;
}

header {
  text-align: center;
  padding: 20px;
  padding-top: 0px;
  color: hsl(206, 17%, 28%);
}

.card {
  background-color: hsl(0, 0%, 100%);
  border-radius: 5px;
  border-width: 1px;
  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px 0px;
  color: hsl(206, 17%, 28%);
  font-size: 18px;
  margin: 0 auto;
  max-width: 800px;
  padding: 30px 40px;
}

.card-header::after {
  content: " ";
  display: block;
  width: 100%;
  background: #e7e9eb;
  height: 2px;
}

.card-body {
  min-height: 100px;
}

.card-footer {
  text-align: center;
}

.card-footer::before {
  content: " ";
  display: block;
  width: 100%;
  background: #e7e9eb;
  height: 2px;
}

.card-footer::after {
  content: " ";
  display: block;
  clear: both;
}

.btn {
  border: none;
  background-color: hsl(360, 91%, 36%);
  border-radius: 25px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 6px 0px rgba(0, 0, 0, 0.2) 0px 1px 1px
    0px;
  color: hsl(0, 0%, 100%);
  display: inline-block;
  font-size: 22px;
  line-height: 22px;
  margin: 16px 16px 16px 20px;
  padding: 14px 34px;
  text-align: center;
  cursor: pointer;
}

button[disabled] {
  cursor: default;
  background: #c0c7cf;
}

.float-right {
  float: right;
}

#password {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: none;
  display: block;
  width: 100%;
  padding-top: 15px;
  padding-left: 15px;
  padding-right: 15px;
  padding-bottom: 85px;
  font-size: 1.2rem;
  text-align: center;
  margin-top: 10px;
  margin-bottom: 10px;
  border: 2px dashed #c0c7cf;
  border-radius: 6px;
  resize: none;
  overflow: hidden;
}

@media (max-width: 690px) {
  .btn {
    font-size: 1rem;
    margin: 16px 0px 0px 0px;
    padding: 10px 15px;
  }

  #password {
    font-size: 1rem;
  }
}

@media (max-width: 500px) {
  .btn {
    font-size: 0.8rem;
  }
}






.volver-btn {
    background-color: #4CAF50; /* Color de fondo */
    border: none; /* Sin bordes */
    color: white; /* Color del texto */
    padding: 15px 32px; /* Espaciado alrededor del texto */
    text-align: center; /* Alineación del texto */
    text-decoration: none; /* Sin subrayado */
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer; /* Cambia el cursor al pasar el ratón */
    transition-duration: 0.4s; /* Duración de la transición */
}

.volver-btn:hover {
    background-color: #45a049; /* Color de fondo al pasar el ratón */
}

.boton-volver {
    background-color: #4CAF50; /* Color de fondo */
    border: none; /* Sin bordes */
    color: white; /* Color del texto */
    padding: 15px 32px; /* Espaciado alrededor del texto */
    text-align: center; /* Alineación del texto */
    text-decoration: none; /* Sin subrayado */
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer; /* Cambia el cursor al pasar el ratón */
    transition-duration: 0.4s; /* Duración de la transición */
}

.boton-volver:hover {
    background-color: #45a049; /* Color de fondo al pasar el ratón */
}

</style>
<script>
    var enter;
var confirmUpperCase;
var confirmLowerCase;
var confirmSpecialChar;
var confirmNumber;

// password criteria
upperCase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

lowerCase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

numberSelect = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

specialChar = ['!', '"', '#', '$', '%', '&', '(', ')', '*', '+', ',', ':', ';', '<', '=', '?', '/', '.', '@', '[', ']', '{', '}', '|', '~'];


var choices;

var generateBtn = document.querySelector("#generate");



// criteria for password
function generatePassword() {
  enter = parseInt(prompt("Cuantos caracteres va a contener tu contraseña? elige de 8 a 128 caracteres"));
  if (!enter) {
    alert("Necesario un valor");
  } else if (enter < 8 || enter > 128) {
    enter = parseInt(prompt("Elige entre 8 y 128 caracteres"));
  } else {
    confirmUpperCase = confirm("Quieres que contenga mayusculas?");
    confirmLowerCase = confirm("Quieres que contenga minusculas?");
    confirmSpecialChar = confirm("Quieres que contenga caracteres especiales?");
    confirmNumber = confirm("Quieres que contenga numeros/s?");
  };

  if (!confirmUpperCase && !confirmLowerCase && !confirmSpecialChar && !confirmNumber) {
    choices = alert("Elige un criterio!");

  } else if (confirmSpecialChar && confirmNumber && confirmUpperCase && confirmLowerCase) {
    choices = specialChar.concat(numberSelect, lowerCase, upperCase);

  } else if (confirmSpecialChar && confirmNumber && confirmUpperCase) {
    choices = specialChar.concat(numberSelect, upperCase);

  } else if (confirmSpecialChar && confirmNumber && confirmLowerCase) {
    choices = specialChar.concat(numberSelect, lowerCase);

  } else if (confirmSpecialChar && confirmLowerCase && confirmUpperCase) {
    choices = specialChar.concat(lowerCase, upperCase);

  } else if (confirmNumber && confirmLowerCase && confirmUpperCase) {
    choices = numberSelect.concat(lowerCase, upperCase);

  } else if (confirmSpecialChar && confirmNumber) {
    choices = specialChar.concat(numberSelect);

  } else if (confirmSpecialChar && confirmLowerCase) {
    choices = specialChar.concat(lowerCase);

  } else if (confirmSpecialChar && confirmUpperCase) {
    choices = specialChar.concat(upperCase);

  } else if (confirmLowerCase && confirmNumber) {
    choices = lowerCase.concat(numberSelect);

  } else if (confirmLowerCase && confirmUpperCase) {
    choices = lowerCase.concat(upperCase);

  } else if (confirmNumber && confirmUpperCase) {
    choices = numberSelect.concat(upperCase);

  } else if (confirmSpecialChar) {
    choices = specialChar;

  } else if (confirmNumber) {
    choices = numberSelect;

  } else if (confirmLowerCase) {
    choices = lowerCase;

  } else if (confirmUpperCase) {
    choices = upperCase;
  }

  var password = [];

  // random selection

  for (var i = 0; i < enter; i++) {
    var getChoices = choices[Math.floor(Math.random() * choices.length)];
    password.push(getChoices);

  }
  var ps = password.join("");

  return ps;
}

// Write password to the #password input

function writePassword() {
  generatedPassword = generatePassword();
  var passwordText = document.querySelector("#password");
  passwordText.value = generatedPassword;

  // Almacenar la contraseña generada en el almacenamiento local
  localStorage.setItem('generatedPassword', generatedPassword);
}

// Add event listener to generate button
generateBtn.addEventListener("click", writePassword);

document.querySelector('.boton-volver').addEventListener('click', function() {
    window.location.href = 'login.php';
});
</script>
 <script src="script.js"></script>