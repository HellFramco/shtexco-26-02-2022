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
			<legend>Reprogramacion de inventario a <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend><?php echo @$_SESSION['indicaciones_insumos']; ?></legend>
			<legend>Tallas</legend>
		</div>
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 / 3 
				<input type="number" required="" value="0" name="talla6" id="talla6" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18
				<input type="number" required="" value="0" name="talla18" id="talla18" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34
				<input type="number" required="" value="0" name="talla34" id="talla34" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl
				<input type="number" required="" value="0" name="tallaxl" id="tallaxl" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 / 5
				<input type="number" required="" value="0" name="talla8" id="talla8" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20
				<input type="number" required="" value="0" name="talla20" id="talla20" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36
				<input type="number" required="" value="0" name="talla36" id="talla36" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u
				<input type="number" required="" value="0" name="tallau" id="tallau" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 / 7
				<input type="number" required="" value="0" name="talla10" id="talla10" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26
				<input type="number" required="" value="0" name="talla26" id="talla26" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38
				<input type="number" required="" value="0" name="talla38" id="talla38" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est
				<input type="number" required="" value="0" name="tallaest" id="tallaest" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 / 9
				<input type="number" required="" value="0" name="talla12" id="talla12" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 
				<input type="number" required="" value="0" name="talla28" id="talla28" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s 
				<input type="number" required="" value="0" name="tallas" id="tallas" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 / 11
				<input type="number" required="" value="0" name="talla14" id="talla14" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30
				<input type="number" required="" value="0" name="talla30" id="talla30" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">m
				<input type="number" required="" value="0" name="tallam" id="tallam" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 / 13
				<input type="number" required="" value="0" name="talla16" id="talla16" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32
				<input type="number" required="" value="0" name="talla32" id="talla32" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l
				<input type="number" required="" value="0" name="tallal" id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="nuevaReprogramacion">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
			<input type="submit" class="btn btn-success" value="Guardar">	
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