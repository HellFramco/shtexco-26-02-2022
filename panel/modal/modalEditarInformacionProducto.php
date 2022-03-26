<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	$productos = new Productos();
	$inventarios = new Inventarios();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">
<?php 
foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
?>

<form action="../../modelo/editarProducto.php" method="post">
	<div class="container">
	<div class="row" ><br>
	<br>
	<br>
		<div class="col-sm-12">
			<legend>Editar Producto</legend>
		</div>
		<div class="col-sm-4">
			<label for="">Referencia
				<input type="text" required="" value="<?php echo $key['referencia']; ?>" placeholder="Referencia" name="referencia" id="referencia" class="form-control">
			</label>
			<label for="">Tipo
				<select type="text" required="" placeholder="tipo" name="tipo" id="tipo" class="form-control">
					<option value="<?php echo $key['tipo']; ?>"><?php echo $key['tipo']; ?></option>
					<?php $productos->select_tipos_inventarios(); ?>
				</select>
			</label>
			<label for="">coleccion
				<select type="text" required="" placeholder="coleccion" name="coleccion" id="coleccion" class="form-control">
					<option value="<?php echo $key['coleccion']; ?>"><?php echo $key['coleccion']; ?></option>
					<?php $productos->select_colecciones(); ?>
				</select>
			</label>
			
			<label for="">precio Detal
				<input type="number" required="" value="<?php echo $key['precio']; ?>" placeholder="precio Detal" name="precio_detal" id="precio_detal" class="form-control">
			</label>
			<label for="">precio Mayor
				<input type="number" required="" value="<?php echo $key['precio_mayor']; ?>" placeholder="precio mayor" name="precio_mayor" id="precio_mayor" class="form-control">
			</label>
		</div>
		<div class="col-sm-4">
			
			<label for="">Silueta
				<select type="text" placeholder="silueta" name="silueta" id="silueta" class="form-control">
					<option value="<?php echo $key['silueta']; ?>"><?php echo $key['silueta']; ?></option>
					<?php $productos->select_siluetas(); ?>
				</select>
			</label>
			<label for="">categoria
				<select type="text" required="" placeholder="categoria" name="categoria" id="categoria" class="form-control">
					<option value="<?php echo $key['categoria']; ?>"><?php echo $key['categoria']; ?></option>
					<?php $productos->select_categorias(); ?>
				</select>
			</label>
			<label for="">color
				<select type="text" required="" placeholder="color" name="color" id="color" class="form-control">
					<option value="<?php echo $key['color']; ?>"><?php echo $key['color']; ?></option>
					<?php $productos->select_color(); ?>
				</select>
			</label>
			<label for="">genero
				<select type="text" required="" placeholder="genero" name="genero" id="genero" class="form-control">
					<option value="<?php echo $key['genero']; ?>"><?php echo $key['genero']; ?></option>
					<?php $productos->select_generos(); ?>
				</select>
			</label>
			
			
		</div>
		<div class="col-sm-4">
			<label for="">Marca
				<select type="text" required="" placeholder="" name="marca" id="marca" class="form-control">
					<option value="<?php echo $key['marca']; ?>"><?php echo $key['marca']; ?></option>
					<?php $productos->select_marcas(); ?>
				</select>
			</label>
			<label for="">Tela
				<select type="text" required="" placeholder="" name="tela" id="telas" class="form-control">
					<option value="<?php echo $key['tela']; ?>"><?php echo $key['tela']; ?></option>
					<?php $productos->select_telas(); ?>
				</select>
			</label>
			<label for="">Proveedor
				<select type="text" required="" placeholder="" name="proveedor" id="proveedor" class="form-control">
					<option value="<?php echo $key['proveedor']; ?>"><?php echo $key['proveedor']; ?></option>
					<?php $productos->select_proveedores(); ?>
				</select>
			</label>
			<label for="">bodega
				<select type="text" required="" placeholder="bodega" name="bodega" id="bodega" class="form-control">
					<option value="<?php echo $key['bodega']; ?>"><?php echo $key['bodega']; ?></option>
					<?php $productos->select_bodegas(); ?>
				</select>
			</label>
			<label for="">ruta
				<select type="text" required="" placeholder="ruta" name="ruta" id="ruta" class="form-control">
					<option value="<?php echo $key['ruta']; ?>"><?php echo $key['ruta']; ?></option>
					<?php $productos->select_rutas(); ?>
				</select>
			</label>
		</div>
		<div class="col-sm-12">
			<input type="hidden" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
			<input type="hidden" name="accion" value="editarProducto">
			<input type="submit" class="btn btn-primary" value="Actualizar Producto">
		</div>
		
			</div>

		</div>

	</div>
	</div>
</div>
</form>
<?php 
}
?>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- <script>
	$('#espacioTallas').slideUp();
	$('#tallas').click(function(){
		$('#espacioTallas').slideToggle();
	});
</script> -->