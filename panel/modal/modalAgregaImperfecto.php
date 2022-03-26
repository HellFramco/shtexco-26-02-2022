<!-- <?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
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
			<legend>Asignacion de inventario imperfecto a <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend>Tallas</legend>
		</div>
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 
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
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8
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
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10
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
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12
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
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14
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
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16
				<input type="number" required="" value="0" name="talla16" id="talla16" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32
				<input type="number" required="" value="0" name="talla32" id="talla32" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l
				<input type="number" required="" value="0" name="tallal" id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="nuevaAsignacionImperfecto">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
            	
		</div>
        <div class="col-sm-6">
            <label for="bodega">Seleccione A donde Pertenece:</label>
        <select name="bodega" id="bodega" class="form-control" required>
                <option value="">SELECCIONE</option>
                <option value="BODEGA MARRAS">BODEGA MARRAS</option>
                <option value="BODEGA IMPERFECTO">BODEGA IMPERFECTO</option>
            </select>
            <br>
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
</script> -->




<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
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
			<legend>Asignacion de inventario imperfecto a <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
			<legend>Tallas</legend>
		</div>
		<?php 
		foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
		?>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 Existe: <strong style='color: green;'><?php echo $key['talla6'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla6" min='0' max='<?php echo $key['talla6'] ?>' id="talla6" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 Existe: <strong style='color: green;'><?php echo $key['talla18'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla18" min='0' max='<?php echo $key['talla18'] ?>' id="talla18" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 Existe: <strong style='color: green;'><?php echo $key['talla34'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla34" min='0' max='<?php echo $key['talla34'] ?>' id="talla34" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla xl Existe: <strong style='color: green;'><?php echo $key['tallaxl'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallaxl" id="tallaxl" min='0' max='<?php echo $key['tallaxl'] ?>' class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 Existe: <strong style='color: green;'><?php echo $key['talla8'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla8" min='0' max='<?php echo $key['talla8'] ?>' id="talla8" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 Existe: <strong style='color: green;'><?php echo $key['talla20'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla20" min='0' max='<?php echo $key['talla20'] ?>' id="talla20" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 Existe: <strong style='color: green;'><?php echo $key['talla36'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla36" min='0' max='<?php echo $key['talla36'] ?>' id="talla36" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla u Existe: <strong style='color: green;'><?php echo $key['tallau'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallau" min='0' max='<?php echo $key['tallau'] ?>' id="tallau" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 Existe: <strong style='color: green;'><?php echo $key['talla10'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla10" min='0' max='<?php echo $key['talla10'] ?>' id="talla10" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 Existe: <strong style='color: green;'><?php echo $key['talla26'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla26" min='0' max='<?php echo $key['talla26'] ?>' id="talla26" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 Existe: <strong style='color: green;'><?php echo $key['talla38'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla38" min='0' max='<?php echo $key['talla38'] ?>' id="talla38" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla est Existe: <strong style='color: green;'><?php echo $key['tallaest'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallaest" min='0' max='<?php echo $key['tallaest'] ?>' id="tallaest" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 Existe: <strong style='color: green;'><?php echo $key['talla12'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla12" min='0' max='<?php echo $key['talla12'] ?>' id="talla12" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 Existe: <strong style='color: green;'><?php echo $key['talla28'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla28" min='0' max='<?php echo $key['talla28'] ?>' id="talla28" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla s Existe: <strong style='color: green;'><?php echo $key['tallas'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallas" min='0' max='<?php echo $key['tallas'] ?>' id="tallas" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 Existe: <strong style='color: green;'><?php echo $key['talla14'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla14" min='0' max='<?php echo $key['talla14'] ?>' id="talla14" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 Existe: <strong style='color: green;'><?php echo $key['talla30'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla30" min='0' max='<?php echo $key['talla30'] ?>' id="talla30" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla M Existe: <strong style='color: green;'><?php echo $key['tallam'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallam" min='0' max='<?php echo $key['tallam'] ?>' id="tallam" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 Existe: <strong style='color: green;'><?php echo $key['talla16'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla16" min='0' max='<?php echo $key['talla16'] ?>' id="talla16" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 Existe: <strong style='color: green;'><?php echo $key['talla32'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="talla32" min='0' max='<?php echo $key['talla32'] ?>' id="talla32" class="form-control">
			</label>
			<label style="color: gray; text-transform: uppercase;" for="">de la talla l Existe: <strong style='color: green;'><?php echo $key['tallal'] ?></strong> Prenda Registrada
				<input type="number" required="" value="0" name="tallal" min='0' max='<?php echo $key['tallal'] ?>' id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="nuevaReubicacionPrenda">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">
            	
		</div>
        <div class="col-sm-6">
            <label for="bodega">Seleccione A donde Pertenece:</label>
        <select name="bodega" id="bodega" class="form-control" required>
                <option value="">SELECCIONE</option>
                <option value="BODEGA MARRAS">BODEGA MARRAS</option>
            </select>
            <br>
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