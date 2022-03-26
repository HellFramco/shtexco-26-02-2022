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
		<div>
			<a href="../visualizar-inventario-subido.php" class="btn btn-danger">Volver</a>
		</div>
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Peso de unidad, inventario para <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend>Sistema a la espera <img src="../../imagenes/loader-peso.gif" width="100px" alt=""> <img src="https://http2.mlstatic.com/D_NQ_NP_999454-MCO43990604932_112020-O.webp" width="100px" alt=""></legend>

		</div>
		


		<form action="#" id="formulario" onkeypress="submitOnEnter(event)" method="post">
		
		<div class="col-sm-2">
			<!-- <?php echo $_GET['id_inventario']; ?> -->
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 / PESO TOTAL: 
				<input type="text"  value="0" name="talla6" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 / PESO TOTAL: 
				<input type="text"  value="0" name="talla8" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 / PESO TOTAL: 
				<input type="text"  value="0" name="talla10" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 / PESO TOTAL: 
				<input type="text"  value="0" name="talla12" id="" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 / PESO TOTAL: 
				<input type="text"  value="0" name="talla14" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 / PESO TOTAL: 
				<input type="text"  value="0" name="talla16" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 / PESO TOTAL: 
				<input type="text"  value="0" name="talla18" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 / PESO TOTAL: 
				<input type="text"  value="0" name="talla20" id="" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 / PESO TOTAL: 
				<input type="text"  value="0" name="talla26" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 / PESO TOTAL: 
				<input type="text"  value="0" name="talla28" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 / PESO TOTAL: 
				<input type="text"  value="0" name="talla30" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 / PESO TOTAL: 
				<input type="text"  value="0" name="talla32" id="" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 / PESO TOTAL: 
				<input type="text"  value="0" name="talla34" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 / PESO TOTAL: 
				<input type="text"  value="0" name="talla36" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 / PESO TOTAL: 
				<input type="text"  value="0" name="talla38" id="" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s / PESO TOTAL: 
				<input type="text"  value="0" name="tallas" id="" class= "form-control">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla m / PESO TOTAL: 
				<input type="text"  value="0" name="tallam" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l / PESO TOTAL: 
				<input type="text"  value="0" name="tallal" id="" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl / PESO TOTAL: 
				<input type="text"  value="0" name="tallaxl" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u / PESO TOTAL: 
				<input type="text"  value="0" name="tallau" id="" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est / PESO TOTAL: 
				<input type="text"  value="0" name="tallaest" id="" class="form-control">
			</label>
			<input type="hidden" name="accion" value="reinventario">
			<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="">
			<input type="hidden" name="descripcion" value="">
			<input type="hidden" name="color" value="">
			<input type="submit" class="btn btn-success" value="Guardar">	

		</div>
		
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