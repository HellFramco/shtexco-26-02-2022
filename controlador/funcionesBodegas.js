

function modal_crear(){

    $('#nombreu').val("");
        $('#lugaru').val("");
            $('#observacionu').val("");

}


function agregardatos() {


    nombre = $('#nombreu').val();
    lugar = $('#lugaru').val();
    observacion = $('#observacionu').val();




    cadena = "nombre=" + nombre +
             "&lugar=" + lugar +
             "&observacion=" + observacion ;
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-bodega.php?accion=registrar",
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
    $('#nombre').val(d[1]);
      $('#lugar').val(d[2]);
    $('#observacion').val(d[3]);



}

function modificarBodega() {



    id = $('#id').val();

    nombre = $('#nombre').val();
      lugar = $('#lugar').val();
        observacion = $('#observacion').val();





        cadena = "id=" + id +
             "&nombre=" + nombre +
                 "&lugar=" + lugar +
             "&observacion=" + observacion ;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-bodega.php?accion=modificar",
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