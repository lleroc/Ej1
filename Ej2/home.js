function procesar() {
  var correo = document.getElementById("correo").value;
  var contrasenia = document.getElementById("contrasenia").value;

  if (correo == "lleroc@gmail.com" && contrasenia == "123") {
    alert("Bienvenido");
  } else {
    alert("El usuario o la contrasenia son incorrectos");
  }
}
