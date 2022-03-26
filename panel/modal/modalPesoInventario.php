<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">

	<div class="container">
	<div class="row" ><br>
	<br>
	<br>

		<div class="col-sm-12">
			
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Peso de unidad, inventario para <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend>Sistema a la espera <img src="../../imagenes/loader-peso.gif" width="100px" alt=""></legend>
		</div>
		<!-- <?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-4">
			<label style="color: gray; text-transform: uppercase;" for="" >Peso unidad 
				<input type="number" required="" value="<?php echo @$key['peso_unidad']; ?>" name="peso_unidad" id="peso_unidad" autofocus="" class="form-control" placeholder="Usa la Bascula para capturar el peso aqui">
			</label>
			
			<label style="color: gray; text-transform: uppercase;" for="" >
				<input type="hidden" name="accion" value="subirPeso">
				<input type="text" class="form-control" name="id_inventario" value="<?php echo @$_GET['id_inventario']; ?>">
				<input type="text" class="form-control" name="talla6" placeholder="Peso talla 6" value="<?php echo $key['peso_talla6']; ?>">
				<input type="text" class="form-control" name="talla8" placeholder="Peso talla 8" value="<?php echo $key['peso_talla8']; ?>">
				<input type="text" class="form-control" name="talla10" placeholder="Peso talla 10" value="<?php echo $key['peso_talla10']; ?>">
				<input type="text" class="form-control" name="talla12" placeholder="Peso talla 12" value="<?php echo $key['peso_talla12']; ?>">
				<input type="submit" name="peso" id="peso" autofocus="" class="form-control" value="Guardar Medida">
			</label>
			
		</div>
		
		
		<?php
		}
		?> -->


		<form action="../../modelo/accionesProductos.php" method="post">
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<!-- <?php echo $_GET['id_inventario']; ?> -->
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 
				<input type="text"  value="<?php echo $key['peso_talla6']; ?>" name="talla6" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8
				<input type="text"  value="<?php echo $key['peso_talla8']; ?>" name="talla8" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10
				<input type="text"  value="<?php echo $key['peso_talla10']; ?>" name="talla10" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12
				<input type="text"  value="<?php echo $key['peso_talla12']; ?>" name="talla12" id="" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14
				<input type="text"  value="<?php echo $key['peso_talla14']; ?>" name="talla14" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16
				<input type="text"  value="<?php echo $key['peso_talla16']; ?>" name="talla16" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18
				<input type="text"  value="<?php echo $key['peso_talla18']; ?>" name="talla18" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20
				<input type="text"  value="<?php echo $key['peso_talla20']; ?>" name="talla20" id="" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26
				<input type="text"  value="<?php echo $key['peso_talla26']; ?>" name="talla26" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28
				<input type="text"  value="<?php echo $key['peso_talla28']; ?>" name="talla28" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30
				<input type="text"  value="<?php echo $key['peso_talla30']; ?>" name="talla30" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32
				<input type="text"  value="<?php echo $key['peso_talla32']; ?>" name="talla32" id="" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34
				<input type="text"  value="<?php echo $key['peso_talla34']; ?>" name="talla34" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36
				<input type="text"  value="<?php echo $key['peso_talla36']; ?>" name="talla36" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38
				<input type="text"  value="<?php echo $key['peso_talla38']; ?>" name="talla38" id="" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s
				<input type="text"  value="<?php echo $key['peso_tallas']; ?>" name="tallas" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla m
				<input type="text"  value="<?php echo $key['peso_tallam']; ?>" name="tallam" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l
				<input type="text"  value="<?php echo $key['peso_tallal']; ?>" name="tallal" id="" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl
				<input type="text"  value="<?php echo $key['peso_tallaxl']; ?>" name="tallaxl" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u
				<input type="text"  value="<?php echo $key['peso_tallau']; ?>" name="tallau" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est
				<input type="text"  value="<?php echo $key['peso_tallaest']; ?>" name="tallaest" id="" class="form-control">
			</label>
			<input type="hidden" name="accion" value="subirPeso">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
			<input type="submit" class="btn btn-success" value="Guardar">	
		</div>
		<?php
		}
		?>
	</form>




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