<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	require_once '../../modelo/datos-usuarios.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
	$usuarios = new misUsuarios();

?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
<form action="../gestionPedidoPrestamo.php" method="post">
	<div class="container">
	<div class="row" ><br>
	<br>
	<br>

		<div class="col-sm-12">
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Prestamo de prenda de la referencia <?php echo $key['referencia']; ?></legend>
			<legend>Tallas</legend>
		</div>
	
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 
				Cantidad: <?php echo  $key['talla6'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla6'] ?>" name="talla6" id="talla6" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18
			Cantidad: <?php echo  $key['talla18'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla18'] ?>" name="talla18" id="talla18" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34
			Cantidad: <?php echo  $key['talla34'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla34'] ?>" name="talla34" id="talla34" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl
			Cantidad: <?php echo  $key['tallaxl'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['tallaxl'] ?>" name="tallaxl" id="tallaxl" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8
			Cantidad: <?php echo  $key['talla8'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla8'] ?>" name="talla8" id="talla8" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20
			Cantidad: <?php echo  $key['talla20'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla20'] ?>" name="talla20" id="talla20" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36
			Cantidad: <?php echo  $key['talla36'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla36'] ?>" name="talla36" id="talla36" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u
			Cantidad: <?php echo  $key['tallau'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['tallau'] ?>" name="tallau" id="tallau" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10
			Cantidad: <?php echo  $key['talla10'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla10'] ?>" name="talla10" id="talla10" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26
			Cantidad: <?php echo  $key['talla26'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla26'] ?>" name="talla26" id="talla26" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38
			Cantidad: <?php echo  $key['talla38'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla38'] ?>" name="talla38" id="talla38" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est
			Cantidad: <?php echo  $key['tallaest'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['tallaest'] ?>" name="tallaest" id="tallaest" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12
			Cantidad: <?php echo  $key['talla12'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla12'] ?>"  name="talla12" id="talla12" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 
			Cantidad: <?php echo  $key['talla28'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla28'] ?>"  name="talla28" id="talla28" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s 
			Cantidad: <?php echo  $key['tallas'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['tallas'] ?>"  name="tallas" id="tallas" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14
			Cantidad: <?php echo  $key['talla14'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla14'] ?>" name="talla14" id="talla14" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30
			Cantidad: <?php echo  $key['talla30'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['talla30'] ?>" name="talla30" id="talla30" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla m
			Cantidad: <?php echo  $key['tallam'] ?>
				<input type="number" required="" value="0" max="<?php echo  $key['tallam'] ?>"  name="tallam" id="tallam" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16
			Cantidad: <?php echo  $key['talla16'] ?>
				<input type="number" required="" value="0"  max="<?php echo  $key['talla16'] ?>" name="talla16" id="talla16" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32
			Cantidad: <?php echo  $key['talla32'] ?>
				<input type="number" required="" value="0"  max="<?php echo  $key['talla32'] ?>" name="talla32" id="talla32" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l
			Cantidad: <?php echo  $key['tallal'] ?>
				<input type="number" required="" value="0"  max="<?php echo  $key['tallal'] ?>" name="tallal" id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="generaPrestamo">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
			<input type="hidden" name="descripcion" value="<?php echo $key['descripcion']; ?>">
			<input type="hidden" name="marca" value="<?php echo $key['marca']; ?>">
			<input type="hidden" name="tipo" value="<?php echo $key['tipo']; ?>">
			<input type="hidden" name="silueta" value="<?php echo $key['silueta']; ?>">
			<input type="hidden" name="tela" value="<?php echo $key['tela']; ?>">
			<input type="hidden" name="categoria" value="<?php echo $key['categoria']; ?>">
			<input type="hidden" name="genero" value="<?php echo $key['genero']; ?>">
			<input type="hidden" name="coleccion" value="<?php echo $key['coleccion']; ?>">
			<input type="hidden" name="bodega" value="<?php echo $key['bodega']; ?>">
			<input type="hidden" name="ruta" value="<?php echo $key['ruta']; ?>">
			<input type="hidden" name="color" value="<?php echo $key['color']; ?>">
			<input type="hidden" name="proveedor" value="<?php echo $key['proveedor']; ?>">
			<input type="hidden" name="estado" value="<?php echo $key['estado']; ?>">
			<input type="hidden" name="fecha_ingreso_producto" value="<?php echo $key['fecha_ingreso_producto']; ?>">
			<input type="hidden" name="fecha_ingreso_inventario" value="<?php echo $key['fecha_ingreso_inventario']; ?>">
			<input type="hidden" name="precio" value="<?php echo $key['precio']; ?>">
			<input type="hidden" name="descuento" value="<?php echo $key['descuento']; ?>">
			<input type="hidden" name="id_usuario" value="<?php echo $key['id_usuario']; ?>">
			<input type="hidden" name="verificado_bodega" value="<?php echo $key['verificado_bodega']; ?>">
			<input type="hidden" name="observacion_inventario" value="<?php echo $key['observacion_inventario']; ?>">
			<input type="hidden" name="reprogramacion" value="<?php echo $key['reprogramacion']; ?>">
			<input type="hidden" name="impresion_codigo_barras" value="<?php echo $key['impresion_codigo_barras']; ?>">


			
		</div>
		<?php
		}
		?>


</div>
</div>

<label style="color: gray; text-transform: uppercase;" for="">Responsable
		

			</label><br>
		<select name="responsable" id="responsable" class="form-control">


		
		<?php
		foreach ($usuarios->viewUsuariosMark() as $key) {
			?>

			<option value="<?php echo $key['id']; ?>"><?php echo $key['mmb']; ?> </option>
		
		<?php
		}
		?>
		</select>



		

	</div>
	<br>
	<input type="submit" class="btn btn-success" value="Guardar" style=" float:right">	
</div>
</form>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
	// $('#espacioTallas').slideUp();
	// $('#tallas').click(function(){
	// 	$('#espacioTallas').slideToggle();
	// });
</script>