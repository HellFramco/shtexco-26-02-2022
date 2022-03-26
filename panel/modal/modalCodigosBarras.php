<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
	session_start();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
<form action="../../modelo/accionesProductos.php" method="post">
	<div class="container">
	<div class="row" ><br>
	<br>
	<br>

		<div class="col-sm-12">
			
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Codigos de Barras para inventario a <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend><?php echo @$_SESSION['indicaciones_insumos']; ?></legend>
			<legend>Tallas</legend>
		</div>
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 / 3 existen: <?php echo $key['talla6'] ?>
				<input type="number" required="" value="<?php echo $key['talla6'] ?>" readonly name="talla6" id="talla6" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 existen: <?php echo $key['talla18'] ?>
				<input type="number" required="" value="<?php echo $key['talla18'] ?>" readonly name="talla18" id="talla18" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 existen: <?php echo $key['talla34'] ?>
				<input type="number" required="" value="<?php echo $key['talla34'] ?>" readonly name="talla34" id="talla34" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl existen: <?php echo $key['tallaxl'] ?>
				<input type="number" required="" value="<?php echo $key['tallaxl'] ?>" readonly name="tallaxl" id="tallaxl" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 / 5 existen: <?php echo $key['talla8'] ?>
				<input type="number" required="" value="<?php echo $key['talla8'] ?>" readonly name="talla8" id="talla8" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 existen: <?php echo $key['talla20'] ?>
				<input type="number" required="" value="<?php echo $key['talla20'] ?>" readonly name="talla20" id="talla20" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 existen: <?php echo $key['talla36'] ?>
				<input type="number" required="" value="<?php echo $key['talla36'] ?>" readonly name="talla36" id="talla36" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u existen: <?php echo $key['tallau'] ?>
				<input type="number" required="" value="<?php echo $key['tallau'] ?>" readonly name="tallau" id="tallau" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 / 7 existen: <?php echo $key['talla10'] ?>
				<input type="number" required="" value="<?php echo $key['talla10'] ?>" readonly name="talla10" id="talla10" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 existen: <?php echo $key['talla26'] ?>
				<input type="number" required="" value="<?php echo $key['talla26'] ?>" readonly name="talla26" id="talla26" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 existen: <?php echo $key['talla38'] ?>
				<input type="number" required="" value="<?php echo $key['talla38'] ?>" readonly name="talla38" id="talla38" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est existen: <?php echo $key['tallaest'] ?>
				<input type="number" required="" value="<?php echo $key['tallaest'] ?>" readonly name="tallaest" id="tallaest" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 / 9 existen: <?php echo $key['talla12'] ?>
				<input type="number" required="" value="<?php echo $key['talla12'] ?>" readonly name="talla12" id="talla12" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 existen: <?php echo $key['talla28'] ?>
				<input type="number" required="" value="<?php echo $key['talla28'] ?>" readonly name="talla28" id="talla28" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s existen: <?php echo $key['tallas'] ?>
				<input type="number" required="" value="<?php echo $key['tallas'] ?>" readonly name="tallas" id="tallas" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 / 11 existen: <?php echo $key['talla14'] ?>
				<input type="number" required="" value="<?php echo $key['talla14'] ?>" readonly name="talla14" id="talla14" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 existen: <?php echo $key['talla30'] ?>
				<input type="number" required="" value="<?php echo $key['talla30'] ?>" readonly name="talla30" id="talla30" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla m existen: <?php echo $key['tallam'] ?>
				<input type="number" required="" value="<?php echo $key['tallam'] ?>" readonly name="tallam" id="tallam" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 / 13 existen: <?php echo $key['talla16'] ?>
				<input type="number" required="" value="<?php echo $key['talla16'] ?>" readonly name="talla16" id="talla16" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 existen: <?php echo $key['talla32'] ?>
				<input type="number" required="" value="<?php echo $key['talla32'] ?>" readonly name="talla32" id="talla32" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l existen: <?php echo $key['tallal'] ?>
				<input type="number" required="" value="<?php echo $key['tallal'] ?>" readonly name="tallal" id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="generaCodigosBarras">
			<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
			<?php 
			if ($key['impresion_codigo_barras'] == 'SI') {
			 ?>
			 	<h5>Este inventario ya ha sido impreso.</h5>
			 	<a href="../../modelo/verificarImpresion.php?id_inventario=<?php echo $_GET['id_inventario']; ?>&accion=verificarImpresion" class='btn btn-primary'>Verificar</a>

			 <?php
			 } 
			 else if ($key['impresion_codigo_barras'] == '' || $key['impresion_codigo_barras'] == 'NO' || $key['impresion_codigo_barras'] == '0'){
			 ?>
			 <input type="submit" class="btn btn-success" value="Generar Codigos">
			 <?php
			 }
			 ?>	
		</div>
		<?php
		}
		?>




	</div>

	</div>
	</div>
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