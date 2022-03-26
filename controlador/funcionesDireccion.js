
//crear la direccion del cliente seleccionado

function agregardatosdireccion() {
    id = $('#id_cliente_direccion').val();
    identificacion = $('#identificacion_cliente').val();
    email = $('#direccion_email').val();
    telefono = $('#direccion_telefono').val();
    direccion = $('#direccion_cliente').val();
    pais = $('#pais_direccion').val();
    ubicacion = $('#ubicacion_direccion').val();
    observaciones = $('#observaciones').val();


    
    cadena = "id=" + id +
        "&identificacion=" + identificacion +
        "&email=" + email +
        "&telefono=" + telefono +
        "&direccion=" + direccion +
        "&pais=" + pais +
        "&ubicacion=" + ubicacion +
        "&observacion=" + observaciones;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes-direcciones.php?accion=registrar",
        data: cadena,
        success: function(r) {
            
                alert(r);
            if (r == 1) {

                
            //    $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Ficha agregado con exito");
            } else {
                alertify.error("Error, no se pudo registrar");
            }

        }
    });

    
}

function agregaformdireccion(datos) {
    d = datos.split('||');
    $('#id_cliente_direccion').val(d[0]);
    $('#identificacion_cliente').val(d[1]);
    $('#nombre_cliente').val(d[2]);
    
    $('#direccion_email').val(d[5]);
    $('#direccion_telefono').val(d[4]);
    $('#direccion_cliente').val(d[3]);
    $('#pais_direccion').val(d[6]);
    $('#ubicacion_direccion').val(d[10]);
    $('#observacion').val(d[7]);


    buscar_direcciones();

}

function modificarDireccion() {
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

    cadena = "id=" + id +
        "&identificacion=" + identificacion +
        "&nombre=" + nombre +
        "&direccion=" + direccion +
        "&telefono=" + telefono +
        "&email=" + email +
        "&pais=" + pais +
        "&departamento=" + departamento +
        "&ciudad=" + ciudad +
        "&usuarioId=" + usuarioId;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clidirecciones.php?accion=modificar",
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




function buscar_direcciones() {
    id = $('#id_cliente_direccion').val();

    
    cadena = "id=" + id;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes-direcciones.php?accion=buscar",
        data: cadena,
        success: function(r) {
            

            document.getElementById("body_tabla_direcciones").innerHTML =r;
             
            if (r == 1) {

                
            //    $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Ficha agregado con exito");
            } else {
                alertify.error("Error, no se pudo registrar");
            }

        }
    });

    
}