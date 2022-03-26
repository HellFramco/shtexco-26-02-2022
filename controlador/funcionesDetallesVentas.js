function limit_input(){

if ($('#cantidad').val() > $('#cantidad_max').val()) {
    alert("El valor no puede superar los "+ $('#cantidad_max').val() )
    $('#cantidad').val("1").val()

}

}


function aprobar_pedido(){


    id = $('#id_venta').val();
  
             cadena = "id=" + id ;
           
    

 $.ajax({
     type: "POST",
     url: "../modelo/acciones-inventario.php?accion=aprobar_venta",
     data: cadena,
     success: function(r) {

           alert(r);

     }
 });

}
 

function calculos(){
    precio = document.getElementById("precio").value;
    cantidad = document.getElementById("cantidad").value;
    

    mult = 0
    var cantidad_descuento =0;
    if (validaVacio(precio) || validaVacio(cantidad)) {
   alert("vacio"); 

    }else{
         mult = precio*cantidad;
        
            if(cantidad==3){
                cantidad_descuento = (mult * 10 ) / 100;
                
            }else if(cantidad==4){
                cantidad_descuento = (mult * 15 ) / 100;
            }
            else if(cantidad==5){
                cantidad_descuento = (mult * 20 ) / 100;
            }
            else if(cantidad==6){
                cantidad_descuento = (mult * 25 ) / 100;
            }
            else if(cantidad==7){
                
            }

            


            document.getElementById("descuento").value=cantidad_descuento;
            descuento = document.getElementById("descuento").value;

           if (validaVacio(descuento)) {
            document.getElementById("total").value =mult
           }
           else{
            mult = mult - descuento
            document.getElementById("total").value= mult
           }


    }



}


function calc_total(){
  var sum = 0;
  $(".total").each(function(){
    sum += parseFloat($(this).text());
  });


  $('#total_resul').text(sum);
}


function validaVacio(valor) {
        valor = valor.replace("&nbsp;", "");
        valor = valor == undefined ? "" : valor;
        if (!valor || 0 === valor.trim().length) {
            return true;
            }
        else {
            return false;
            }
        }




function cargar_datos(){


$('#cliente').val($('#re_cliente').val()) 
$('#vendedor').val($('#re_vededor').val()) 
$('#transportadora').val($('#re_transpotadora').val()) 

$('#metodo_pago').val($('#re_metodo_pago').val()) 
//$('#re_vededor').val() = $('#re_total_venta').val()
$('#direccion_select').val($('#re_id_direccion_cliente').val()) 
buscar_direcciones() ;
buscar() 
}


function buscar_direcciones() 
{
    id_cliente = $('#cliente').val();
    cadena = "id_cliente=" + id_cliente ;       
       
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes-direcciones.php?accion=buscar",
        data: cadena,
        success: function(r) {

                  document.getElementById('direccion_select').innerHTML=r;
                  var div_direccion_select = document.getElementById('div_direccion_select');
            if (r == "") {
                 direccion_select.disabled = true;
                  alertify.error("Error, no se pudo encontrar una direcciónes...");
                      
           
              
            } else {
              
                       direccion_select.disabled = false; 
            }

        }
    });
}



function consulta_talla() 
{



        id = $('#producto').val();
        alert(id);
                 cadena = "id=" + id ;
               


    $.ajax({
        type: "POST",
        url: "../modelo/acciones-inventario.php?accion=buscar_talla",
        data: cadena,
        success: function(r) {
   
                document.getElementById("tallas").innerHTML = r;
                 document.getElementById("color").disabled = true;
                 document.getElementById("cantidad").disabled = true;
                 document.getElementById("descuento").disabled = true;
                 document.getElementById("bt_comprar").disabled = true;

                if (document.getElementById("tallas").value=="") {

                }else{
                  document.getElementById("tallas").disabled = false;
                }
                       

        }
    });
}


function agrega_venta_detalle() 
{

    id_venta = $('#id_venta').val();
    id = $('#producto').val();
    tallas = $('#tallas').val();
     color = $('#color').val();


    id_inventario = $('#id_inventario').val();
    cantidad = $('#cantidad').val();
    precio = $('#precio').val();
    descuento = $('#descuento').val();
    
    cadena = "id_venta=" + id_venta +
             "&id_inventario=" + id_inventario+
             "&id=" + id+
             "&tallas=" + tallas+
             "&descuento=" + descuento+
             "&cantidad=" + cantidad+
             "&precio=" + precio+
             "&color=" + color;
          ;
               


    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas-detalles.php?accion=registrar",
        data: cadena,
        success: function(r) {
       
buscar() ;
                        if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}

function eliminar_venta_detalle(id) 
{



    
    cadena = "id=" + id ;
          
               


    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas-detalles.php?accion=eliminar",
        data: cadena,
        success: function(r) {
    
buscar() ;
                        if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}


function buscar() 
{

    id_venta = $('#id_venta').val();
  
    
    cadena = "id=" + id_venta ;
          ;
   

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas-detalles.php?accion=buscar",
        data: cadena,
        success: function(r) {
       
        document.getElementById("tabla_compra").innerHTML = r;
        calc_total();
                        if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                
            }

        }
    });
}


function consulta_color() 
{

        id = $('#producto').val();
          tallas = $('#tallas').val();

            cadena = "id=" + id+
             "&tallas=" + tallas;


    $.ajax({
        type: "POST",
        url: "../modelo/acciones-inventario.php?accion=buscar_color",
        data: cadena,
        success: function(r) {
            
                           document.getElementById("color").innerHTML = r;
           
                 document.getElementById("cantidad").disabled = true;
                 document.getElementById("descuento").disabled = true;
                    document.getElementById("bt_comprar").disabled = true;
     
                if (document.getElementById("color").value=="") {

                }else{
                  document.getElementById("color").disabled = false;
                }
                       

        }
    });
}

function consulta_cantidad() 
{

        id = $('#producto').val();
          tallas = $('#tallas').val();
           color = $('#color').val();

            cadena = "id=" + id+
             "&tallas=" + tallas+
             "&color=" + color;


    $.ajax({
        type: "POST",
        url: "../modelo/acciones-inventario.php?accion=buscar_cantidad",
        data: cadena,
        success: function(r) {




         d = r.split('/');
     
        document.getElementById("id_inventario").value = d[1];
        document.getElementById("cantidad_max").value = d[2];
        document.getElementById("cant_visible").innerHTML =  d[2];
        document.getElementById("precio").value = d[3];
        

        if(d[2]=="0"){
            document.getElementById("alerta_iventario").innerHTML = "no posee inventario";
            document.getElementById("cantidad").disabled = true;
           
            document.getElementById("bt_comprar").disabled = true;
        }else{
            document.getElementById("alerta_iventario").innerHTML = "";
            document.getElementById("cantidad").disabled = false;
       
            document.getElementById("bt_comprar").disabled = false;
        }


    


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

function agregaform(datos) {
    d = datos.split('||');
    $('#idu').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombreu').val(d[2]);
    $('#direccionu').val(d[3]);
    $('#telefonou').val(d[4]);
    $('#emailu').val(d[5]);
    $('#paisu').val(d[6]);
    $('#departamentou').val(d[7]);
    $('#ciudadu').val(d[8]);
    $('#usuarioIdu').val(d[9]);
}

function modificarVenta() {
    id = $('#id_venta').val();
    id_cliente = $('#cliente').val();
    direccion_select =  $('#direccion_select').val();
    transportadora = $('#transportadora').val();
    metodo_pago = $('#metodo_pago').val();

    cadena = "id_cliente=" + id_cliente +
             "&id=" + id +
             "&direccion_select=" + direccion_select +
               "&transportadora=" + transportadora +
            "&metodo_pago=" + metodo_pago 
        ;
        
       
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas.php?accion=modificar",
        data: cadena,
        success: function(r) {
            console.log(r);
            if (r == 0) {
                alertify.error("Error, no se pudo registrar...");
            } else {
                $('#tabla').load('../vista/componentes/fichasMostrar.php?id_venta='+r);
                alertify.success("Información registradaexitosamente.");
            }

        }
    });



}