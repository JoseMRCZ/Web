// Dentro de tu archivo JavaScript (login.js) o en un bloque <script> en tu archivo HTML
// Obtén referencia al formulario de inicio de sesión
var submitButton = document.getElementById("btnLogin");

// Escucha el evento de envío del formulario
form.submitButton("submit", function(event) {
  event.preventDefault(); // Prevenir el envío del formulario por defecto

  // Obtén los valores del nombre de usuario y contraseña
  var username = document.getElementById("uname").value;
  var password = document.getElementById("psw").value;

  // Realiza la validación necesaria
  if (username.trim() === "a" && password.trim() === "123") {
    alert("Por favor, ingresa un nombre de usuario y contraseña válidos.");
    return;
  }


});
