


function limpia_campos_crear(){

    $('#id_venta').val("");
    $('#id_cliente').val("");
    $('#id_vendedor').val("");
    $('#fecha_venta').val("");
    $('#fecha_vencimiento').val("");
    $('#estado_orden').val("");
    $('#cliente_aprobo').val("");
    $('#cartera_aprobo').val("");
    $('#despacho_aprobo').val("");
    $('#transportadora').val("");
    $('#numero_guia').val("");
    $('#codigo_barras').val("");
    $('#metodo_pago').val("");
    $('#total_venta').val("");
}



function agregardatos() 
{
    id_cliente = $('#id_cliente').val();
  id_vendedor =  $('#id_vendedor').val();
  estado_orden=   $('#estado_orden').val();
   cliente_aprobo= $('#cliente_aprobo').val();
    cartera_aprobo = $('#cartera_aprobo').val();
   despacho_aprobo = $('#despacho_aprobo').val();
   transportadora = $('#transportadora').val();
   numero_guia = $('#numero_guia').val();
   codigo_barras = $('#codigo_barras').val();
   metodo_pago = $('#metodo_pago').val();

    cadena = "id_cliente=" + id_cliente +
        "&id_vendedor=" + id_vendedor +
        "&estado_orden" + estado_orden +
        "&cliente_aprobo=" + cliente_aprobo +
        "&cartera_aprobo=" + cartera_aprobo +
        "&despacho_aprobo=" + despacho_aprobo +
        "&transportadora=" + transportadora +
        "&numero_guia=" + numero_guia +
        "&codigo_barras=" + codigo_barras +
        "&metodo_pago=" + metodo_pago;
    
       
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas.php?accion=registrar",
        data: cadena,
        success: function(r) {
            console.log(r);
            if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}

function infocliente(datos) {
    d = datos.split('||');
    $('#id').val(d[0]);
    $('#identificacion').val(d[1]);
}

function agregaform(id_venta, id_cliente, id_vendedor, fecha_venta, fecha_vencimiento, estado_orden, cliente_aprobo, cartera_aprobo, despacho_aprobo, transportadora, numero_guia, codigo_barras, metodo_pago, total_venta) {

    // alert(dato1 + "--"+ dato2);
// alert(estado_orden);
    // alert(estado_orden);

    $('#id_venta').val(id_venta);
    $('#id_cliente').val(id_cliente);
    $('#id_vendedor').val(id_vendedor);
    $('#fecha_venta').val(fecha_venta);
    $('#fecha_vencimiento').val(fecha_vencimiento);
    $('#estado_orden').val(estado_orden);
    $('#cliente_aprobo').val(cliente_aprobo);
    $('#cartera_aprobo').val(cartera_aprobo);
    $('#despacho_aprobo').val(despacho_aprobo);
    $('#transportadora').val(transportadora);
    $('#numero_guia').val(numero_guia);
    $('#codigo_barras').val(codigo_barras);
    $('#metodo_pago').val(metodo_pago);
    $('#total_venta').val(total_venta);
    // $('#id_vendedor').val(d[1]);
    // $('#fecha_venta').val(d[2]);
    // $('#fecha_vencimiento').val(d[3]);
    // $('#estado_orden').val(d[4]);
    // $('#cliente_aprobo').val(d[5]);
    // $('#cartera_aprobo').val(d[6]);
    // $('#despacho_aprobo').val(d[7]);
    // $('#transportadora').val(d[8]);
    // $('#numero_guia').val(d[9]);
    // $('#codigo_barras').val(d[10]);
    // $('#metodo_pago').val(d[11]);
    // $('#total_venta').val(d[12]);
    
}

function modificarVentas() {
    id_venta = $('#id_ventau').val();
    id_cliente = $('#id_clienteu').val();
    id_vendedor = $('#id_vendedoru').val();
    fecha_venta = $('#fecha_ventau').val();
    estado_orden = $('#estado_ordenu').val();
    cliente_aprobo = $('#cliente_aprobou').val();
    cartera_aprobo = $('#cartera_aprobou').val();
    fecha_vencimiento = $('#fecha_vencimientou').val();
    despacho_aprobo = $('#despacho_aprobou').val();
    transportadora = $('#transportadorau').val();
    numero_guia = $('#numero_guiau').val();
    codigo_barras = $('#codigo_barrasu').val();
    metodo_pago = $('#metodo_pagou').val();
    total_venta = $('#total_ventau').val();
    
    // identificacion = $('#identificacionu').val();
    // nombre = $('#nombreu').val();
    // direccion = $('#direccionu').val();
    // telefono = $('#telefonou').val();
    // email = $('#emailu').val();
    // pais = $('#paisu').val();
    // departamento = $('#departamentou').val();
    // ciudad = $('#ciudadu').val();
    // usuarioId = $('#usuarioIdu').val();

    // cadena = "id_venta=" + id_venta +
    //     "&identificacion=" + identificacion +
    //     "&nombre=" + nombre +
    //     "&direccion=" + direccion +
    //     "&telefono=" + telefono +
    //     "&email=" + email +
    //     "&pais=" + pais +
    //     "&departamento=" + departamento +
    //     "&ciudad=" + ciudad +
    //     "&usuarioId=" + usuarioId;

    cadena = "id_venta=" + id_venta +
             "&id_cliente=" + id_cliente +
             "&id_vendedor=" + id_vendedor +
             "&fecha_venta=" + fecha_venta +
             "&estado_orden=" + estado_orden +
             "&cliente_aprobo=" + cliente_aprobo +
             "&cartera_aprobo=" + cartera_aprobo +
             "&fecha_vencimiento=" + fecha_vencimiento +
             "&despacho_aprobo=" + despacho_aprobo +
             "&transportadora=" + transportadora +
             "&numero_guia=" + numero_guia +
             "&codigo_barras=" + codigo_barras +
             "&metodo_pago=" + metodo_pago +
             "&total_venta=" + total_venta 
            ;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas.php?accion=modificar",
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
    // console.log('funciona');
}