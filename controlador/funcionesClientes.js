function agregardatos_cliente(){
    id = $('#id').val();
    identificacion = $('#identificacion').val();
    nombre = $('#nombre').val();
    direccion = $('#direccion').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    pais = $('#pais').val();
    tipo_cliente = $('#tipo_cliente').val();
    departamento = $('#departamento').val();
    ciudad = $('#ciudad').val();
    usuarioId = $('#usuarioId').val();
    ubicacion = $('#ubicacion').val();

    cadena = "id=" + id +
    "&identificacion=" + identificacion +
    "&nombre=" + nombre +
    "&direccion=" + direccion +
    "&telefono=" + telefono +
    "&email=" + email +
    "&tipo_cliente=" + tipo_cliente +
    "&pais=" + pais +
    "&usuarioId=" + usuarioId+
    "&ubicacion=" + ubicacion;

    alert(identificacion);

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes.php?accion=registrar",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Ficha agregado con exito");
            } else {
                alertify.error("Error, no se pudo registrar");
            }

        }
    });
}

function agregaformcliente(datos) {
    d = datos.split('||');
    $('#idu').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombreu').val(d[2]);
    $('#direccionu').val(d[3]);
    $('#telefonou').val(d[4]);
    $('#emailu').val(d[5]);

    $('#paisu').val(d[6]);
    $('#usuarioIdu').val(d[9]);
    $('#ubicacionu').val(d[10]);
    $('#tipo_clienteu').val(d[11]);
}

function modificarCliente() {
    id = $('#idu').val();
    identificacion = $('#identificacionu').val();
    nombre = $('#nombreu').val();
    direccion = $('#direccionu').val();
    telefono = $('#telefonou').val();
    email = $('#emailu').val();
    pais = $('#paisu').val();
    departamento = $('#departamentou').val();
    ciudad = $('#ciudadu').val();
    usuarioId = $('#usuarioIdu').val();
    ubicacion = $('#ubicacionu').val();
    tipo_cliente = $('#tipo_clienteu').val();

 

    cadena = "id=" + id +
        "&identificacion=" + identificacion +
        "&nombre=" + nombre +
        "&direccion=" + direccion +
        "&telefono=" + telefono +
        "&email=" + email +
        "&pais=" + pais +
        "&departamento=" + departamento +
        "&ciudad=" + ciudad +
        "&usuarioId=" + usuarioId +
        "&ubicacion=" + ubicacion+
        "&tipo_cliente=" + tipo_cliente;


       
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes.php?accion=modificar",
        data: cadena,
        success: function(r) {
         
            if (r == 1) {
           
                //alert("Registro guardado exitosamente.");
                alertify.success("Registro guardado exitosamente.");
            } else {
                //alert("Error, no se pudo registrar la información.");
                alertify.error("Error, no se pudo actualizar la información.");
            }
        }
    });
}


function busca_municipio_from(){
    var departamento ="";
    var settings = {
    "url": "../modelo/consulta_departamentos.php",
    "method": "POST",
    "timeout": 0,
  
    "data": {
      "departamento": departamento
    }
  };
  
  $.ajax(settings).done(function (response) {
    console.log(response);
    
    
    document.getElementById("ubicacion").innerHTML=response;
    document.getElementById("ubicacionu").innerHTML=response;
    document.getElementById("ubicacion_direccion").innerHTML=response;
    

    $('.js-example-basic-single').select2();
  });
  
  }


