//cuerpousuarios

$().ready(() => {
  cargaTabla();
});

var cargaTabla = () => {
  //1 crear una variable html para cargar en la table tbody  id="cuerpousuarios"
  //voy a llamar al controlador mediante un metodo get  sin parametros
  // voy a usar un metodo de repeticion each para recorrer el json de objetos
  // y por cada objeto debo construir una fila de la table
  // y por ultimo agrego la fila al tbody

  var html = "";

  //$.get(url, parametros, funcion);
  //url = ../controllers/usuarios.controllers.php
  $.get("../controllers/usuarios.controllers.php", (variosusuarios) => {
    console.log(variosusuarios);

    //$.each(listadedatos, funcion)
    //$.each(variosusuarios,( indice, valor )=>{})
    $.each(variosusuarios, (indice, unusuario) => {
      html += `
            <tr>
                <td>${indice + 1}</td>
                <td>${unusuario.Nombre}</td>
                <td>${unusuario.correo}</td>
                <td>${unusuario.estado == 1 ? "Activo" : "Bloqueado"}</td>
                <td>${unusuario.rol}</td>
            <td>
<button class="btn btn-primary">Editar</button>
<button class="btn btn-danger">Eliminar</button>

            </td>

            </tr>
        `;
    });
    $("#cuerpousuarios").html(html);
  });
};
