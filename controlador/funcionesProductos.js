

function modal_crear(){

     $('#idu').val("");
    $('#referenciau').val("");
    $('#nombreu').val("");
    $('#estadou').val("");


}





function agregardatos() {

    id = $('#idu').val();
    referencia = $('#referenciau').val();
    nombre = $('#nombreu').val();

    estado = $('#estadou').val();




    cadena = "id=" + id +
        "&referencia=" + referencia +
        "&nombre=" + nombre +
     
        "&estado=" + estado;
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-productos.php?accion=registrar",
        data: cadena,
        success: function(r) {
      
            if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}

function ifoproducto(datos) {
  
    d = datos.split('||');
    $('#id').val(d[0]);
    $('#referencia').val(d[1]);
    $('#nombre').val(d[2]);
    $('#estado').val(d[3]);


}

function modificarProducto() {



    id = $('#id').val();
    referencia = $('#referencia').val();
    nombre = $('#nombre').val();

    estado = $('#estado').val();


    cadena = "id=" + id +
        "&referencia=" + referencia +
        "&nombre=" + nombre +

        "&estado=" + estado;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-productos.php?accion=modificar",
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