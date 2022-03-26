<?php
require_once '../modelo/datos-clientes.php';
require_once '../modelo/datos-inventario.php';
require_once '../modelo/datos-ventas.php';


$productos = new inventario();


require_once '../modelo/datos-transportadoras.php';
require_once '../modelo/datos-metodos-pagos.php';
$transportadora = new misTransportadoras();
$metodo_pago = new misMetodosPagos();
$clientes = new misClientes();


$ventas = new misVentas();



//ainclude "modal/modal-usuario.php"

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'librerias-css.php';
    ?> 
</head>

<body onload="cargar_datos()">
<div id="contenedor_loading">
    <div id="loading"></div>
</div>

 <div class="container-fluid">
        <!--Inicio menu-->
        <?php
        include 'menu.php';
        ?>
        <!--Fin menu-->
        <br /><br />
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Bienvenido administrador
                    <small>Usuarios</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.php">Inicio</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Bienvenido administrador - Panel de control</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <!-- BEGIN DASHBOARD STATS 1-->
        <br />
        <!-- INICIO DEL CONTENIDO -->





   <?php
                $res1 = $ventas->viewMisVentas_detalles($_GET['id']);
                foreach ($res1 as $data1) {

                ?>

                    
                    <?php echo "<input type='hidden' value='".$data1['id_cliente']."' id='re_cliente'>" ; ?>
                    <?php echo "<input type='hidden' value='".$data1['id_vendedor']."' id='re_vededor'>" ; ?>
                    <?php echo "<input type='hidden' value='".$data1['transportadora']."' id='re_transpotadora'>" ; ?>
                    <?php echo "<input type='hidden' value='".$data1['metodo_pago']."' id='re_metodo_pago'>" ; ?>
                    <?php echo "<input type='hidden' value='".$data1['total_venta']."' id='re_total_venta'>" ; ?>
                    <?php  echo "<input type='hidden' value='".$data1['id_direccion_cliente']."' id='re_id_direccion_cliente'>" ; ?>

                 <?php
                }
                ?>













<div class="panel panel-default">
  <div class="panel-heading"><h3>Registro de Ventas y Productos</h3></div>
		  <div class="panel-body">



	<form action="">
	<div class="container">


 			<div class="form-row">
	            <div class="form-group col-md-4">
	            	<label for="">Vendedor</label>
	             	<input type="text" class="form-control" readonly="" id="vendedor" disabled="true">
	            </div>
	            <div class="form-group col-md-4">
			      <label for="">Clientes</label>
	
                    <input type="text"  id="cliente" class="form-control" >
	            </div> 
	             <div class="form-group col-md-4" id="div_direccion_select">
			      <label for="">Dirección</label>
                  <input type="text" id="direccion_select"   class="form-control">
	            
	         </div>
	     </div>
            <div class="form-row">
	     
	                <div class="form-group col-md-4">
			      <label for="">Transportadora</label>
	              <select name="" id="transportadora" class="form-control">
	  				    <?php
                $res1 = $transportadora->viewTransportadoras();
                foreach ($res1 as $data1) {

                ?>

                    <?php echo "<option value='".$data1['id_transportadora']."' > ".$data1['nombre_transportadora']." </option>" ; ?>
                 <?php
                }
                ?>

	              </select>
	          </div>
	                <div class="form-group col-md-4">
			      <label for="">Método de pago</label>
	              <select name="" id="metodo_pago" class="form-control">
	  
	              		  <?php
                $res1 = $metodo_pago->viewMetodosPagos();
                foreach ($res1 as $data1) {

                ?>

                    <?php echo "<option value='".$data1['id_metodo']."' > ".$data1['nombre_metodo']." </option>" ; ?>
                 <?php
                }
                ?>

	              </select>
	            </div> 
            </div> 


		</div>
	</div>
	
	

		  </div>
 		 <div class="panel-footer">
          <button type="button" class="btn btn-success" onclick=" aprobar_pedido()">aprobar pedido</button>
  			<!-- <button type="button" class="btn btn-success" onclick=" modificarVenta() ">Modificar</button>
			<button type="button" class="btn btn-danger">Eliminar</button> -->
			</form>
		</div>
</div>


  <table id="table" class="table table-striped table-bordered">
            <thead>
         
                <th>
                    <div class="text-center">Id</div>
                </th>
                <th>
                    <div class="text-center">Producto</div>
                </th>
                 <th>
                    <div class="text-center">Talla</div>
                </th>
                <th>
                    <div class="text-center">Color</div>
                </th>
               
                <th>
                    <div class="text-center">Cantidad</div>
                </th>
                <th>
                    <div class="text-center">Precio</div>
                </th>
                <th>
                    <div class="text-center">Descuento</div>
                </th>
                <th>
                    <div class="text-center">Total</div>
                </th>
                
                <th>
                    <div class="text-center">OPCION</div>
                </th>
            </thead>
            <tbody id="tabla_compra">
              
            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Total</th>
                <th id="total_resul"></th>
                <th></th>
            </tr>
        </tfoot>
        </table>
        <center>



            <br>

        <table class="table">
            <tr>
                <td>
                    <label for="inputEmail4">Productos</label>
                <select id="producto" class="form-control" onchange="consulta_talla() ">
                           <?php
                $res1 = $productos->productos_agrupados();
                foreach ($res1 as $data7) {

                ?>

                    <?php echo "<option value='".$data7['referencia']."' > ".$data7['referencia']." </option>" ; ?>
                 <?php
                }
                ?>

                </select>
                </td>
                <td>
                          <label for="inputEmail4">Talla</label>
                <select id="tallas" class="form-control" onclick="consulta_color()" onchange="consulta_color()" disabled="true">
                
                </select>
                </td>
                  <td>
                          <label for="inputEmail4">Color</label>
                <select id="color" id="color"  onclick="consulta_cantidad() " onchange="consulta_cantidad() " class="form-control" disabled="true">
                
                </select>
                </td>
                  <td>
                          <label for="inputEmail4">Cantidad, entre (1 a <label id="cant_visible">0</label>)</label> <label id="alerta_iventario" style="color: red;"></label><br>
                        <input type="text" id="cantidad" class="form-control" onkeypress=" return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" onchange="calculos()" onkeyup="calculos(); limit_input()" disabled="true" >
                             <input type="hidden" id="cantidad_max" >
                        <input type="hidden" id="id_venta"  value="<?php echo $_GET['id'] ?>">
                        <input type="hidden" id="id_inventario"><!-- id del inventario -->
                </td>
                </td>
                  <td>
                          <label for="inputEmail4" >Precio Unitario</label><br>
                        <input type="text" id="precio" class="form-control" disabled="true">
                        
                </td>
                <td>
                          <label for="inputEmail4" >Descuento</label><br>
                        <input type="text" id="descuento" class="form-control" onkeypress=" return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" onkeyup="calculos()" onchange="calculos()" disabled="true">
                </td>
                <td>
                          <label for="inputEmail4">Total</label><br>
                        <input type="text" id="total" class="form-control" disabled="true">
                </td>
                   <td><br>
                     <button type="button" class="btn btn-success" onclick=" agrega_venta_detalle()" id="bt_comprar" disabled="true">Añadir</
                </td>
            </tr>
        </table>
    <br>
    <br>
    <br>
    </center>
        <!-- FIN DEL CONTENIDO -->
    </div>


    <?php
    include 'librerias-js.php';
    ?>
   <script type="text/javascript" src="../controlador/funcionesDetallesVentas.js"></script>


   <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>

    <script>

        
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>



