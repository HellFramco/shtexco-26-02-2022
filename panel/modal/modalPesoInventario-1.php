<?php 
	require_once '../../modelo/redireccion.php'; 
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
		<div>
			<a href="../visualizar-inventario-subido.php" class="btn btn-danger">Volver</a>
		</div>
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Peso de unidad, inventario para <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend>Sistema a la espera <img src="../../imagenes/loader-peso.gif" width="100px" alt=""> <img src="https://http2.mlstatic.com/D_NQ_NP_999454-MCO43990604932_112020-O.webp" width="100px" alt=""></legend>

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


		<form action="../../modelo/accionesProductos-1.php" id="formulario" name="formulario" onsubmit="submitForm(event)" method="post">
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<!-- <?php echo $_GET['id_inventario']; ?> -->
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 / PESO TOTAL: <?php echo $key['peso_talla6']; ?>
				<input type="text"  value="0" name="talla6" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 / PESO TOTAL: <?php echo $key['peso_talla8']; ?>
				<input type="text"  value="0" name="talla8" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 / PESO TOTAL: <?php echo $key['peso_talla10']; ?>
				<input type="text"  value="0" name="talla10" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 / PESO TOTAL: <?php echo $key['peso_talla12']; ?>
				<input type="text"  value="0" name="talla12" id="" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 / PESO TOTAL: <?php echo $key['peso_talla14']; ?>
				<input type="text"  value="0" name="talla14" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 / PESO TOTAL: <?php echo $key['peso_talla16']; ?>
				<input type="text"  value="0" name="talla16" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 / PESO TOTAL: <?php echo $key['peso_talla18']; ?>
				<input type="text"  value="0" name="talla18" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 / PESO TOTAL: <?php echo $key['peso_talla20']; ?>
				<input type="text"  value="0" name="talla20" id="" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 / PESO TOTAL: <?php echo $key['peso_talla26']; ?>
				<input type="text"  value="0" name="talla26" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 / PESO TOTAL: <?php echo $key['peso_talla28']; ?>
				<input type="text"  value="0" name="talla28" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 / PESO TOTAL: <?php echo $key['peso_talla30']; ?>
				<input type="text"  value="0" name="talla30" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 / PESO TOTAL: <?php echo $key['peso_talla32']; ?>
				<input type="text"  value="0" name="talla32" id="" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 / PESO TOTAL: <?php echo $key['peso_talla34']; ?>
				<input type="text"  value="0" name="talla34" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 / PESO TOTAL: <?php echo $key['peso_talla36']; ?>
				<input type="text"  value="0" name="talla36" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 / PESO TOTAL: <?php echo $key['peso_talla38']; ?>
				<input type="text"  value="0" name="talla38" id="" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s / PESO TOTAL: <?php echo $key['peso_tallas']; ?>
				<input type="text"  value="0" name="tallas" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla m / PESO TOTAL: <?php echo $key['peso_tallam']; ?>
				<input type="text"  value="0" name="tallam" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l / PESO TOTAL: <?php echo $key['peso_tallal']; ?>
				<input type="text"  value="0" name="tallal" id="" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl / PESO TOTAL: <?php echo $key['peso_tallaxl']; ?>
				<input type="text"  value="0" name="tallaxl" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u / PESO TOTAL: <?php echo $key['peso_tallau']; ?>
				<input type="text"  value="0" name="tallau" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est / PESO TOTAL: <?php echo $key['peso_tallaest']; ?>
				<input type="text"  value="0" name="tallaest" id="" class="form-control">
			</label>
			<input type="hidden" name="accion" value="subirPeso">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
			<input type="hidden" name="descripcion" value="<?php echo $key['descripcion']; ?>">
			<input type="hidden" name="color" value="<?php echo $key['color']; ?>">
			<input type="submit" id="enviarF" class="btn btn-success" value="Guardar">	

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

	function submitForm(event){
    event.preventDefault();

	var opcion = confirm("Seguro que quiere actualizar EL PESO de la TALLA?");
	if(opcion == true){
		document.formulario.submit()
	}else{
	}
  }


</script>