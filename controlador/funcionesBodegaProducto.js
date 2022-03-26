

function modal_crear(){

       $('#bodegau').val("");
        $('#estanteu').val("");
        $('#ubicacionu').val("");

}


function agregardatos() {


    bodega = $('#bodegau').val();
    estante = $('#estanteu').val();
    ubicacion = $('#ubicacionu').val();




    cadena = "id_bodega=" + bodega +
             "&id_estante=" + estante +
             "&ubicacion=" + ubicacion ;
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ubicacion-bodega.php?accion=registrar",
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
    $('#bodega').val(d[4]);
      $('#estante').val(d[5]);
    $('#ubicacion').val(d[3]);



}

function modificarUbicacion() {



    id = $('#id').val();

    bodega = $('#bodega').val();
      estante = $('#estante').val();
        ubicacion = $('#ubicacion').val();





        cadena = "id=" + id +
             "&id_bodega=" + bodega +
                 "&id_estante=" + estante +
             "&ubicacion=" + ubicacion ;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ubicacion-bodega.php?accion=modificar",
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