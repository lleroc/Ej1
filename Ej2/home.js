function procesar() {
  var correo = document.getElementById("correo").value;
  var floatingPassword = document.getElementById("floatingPassword").value;

  if (correo == "lleroc@gmail.com" && floatingPassword == "123") {
    alert("Bienvenido");
  } else {
    alert("El usuario o la contrasenia son incorrectos");
  }
}
