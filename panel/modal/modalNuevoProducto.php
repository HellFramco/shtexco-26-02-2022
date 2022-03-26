<?php 
	require_once '../../modelo/datos-productos.php'; 
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
			<legend>Ingreso de Nuevo Productos</legend>
				 <input type="hidden" name="id_usuario" value='<?php echo $_SESSION['id'] ?>'>
		</div>
		<div class="col-sm-4">
			<label for="">Referencia
				<input type="text" required="" placeholder="Referencia" name="referencia" id="referencia" class="form-control">
			</label>
			<label for="">Tipo
				<select type="text" required="" placeholder="tipo" name="tipo" id="tipo" class="form-control">
					<?php $productos->select_tipos_inventarios(); ?>
				</select>
			</label>
			<label for="">coleccion
				<select type="text" required="" placeholder="coleccion" name="coleccion" id="coleccion" class="form-control">
					<?php $productos->select_colecciones(); ?>
				</select>
			</label>
			<label for="">Origen de Producto
				<select type="text" required="" placeholder="origen_producto" name="origen_producto" id="origen_producto" class="form-control">
					<option value="">SELECCIONE</option>
					<?php $productos->verOrigenesProductos(); ?>
				</select>
			</label>
			<label for="">Proveedor del producto
				<select type="text" required="" placeholder="proveedor_prenda" name="proveedor_prenda" id="proveedor_prenda" class="form-control">
					<option value="">SELECCIONE</option>
					<option value="">NINGUNO</option>
					<option value="LINEY TORRADO">LINEY TORRADO</option>
					<option value="DANIEL GIRALDO ARRUBLA">DANIEL GIRALDO ARRUBLA</option>
				</select>
			</label>
			<label for="">Referencia del Proveedor
				<input type="text" name="ref_proveedor" required="" class="form-control" placeholder="escriba la referencia del proveedor de la prenda">
			</label>
			
			<label for="">precio DETAL
				<input type="number" required="" placeholder="precio Detal" name="precio" id="precio" class="form-control">
			</label>
			<label for="">precio MAYOR
				<input type="number" required="" placeholder="precio Mayor" name="precio_mayor" id="precio_mayor" class="form-control">
			</label>
		</div>
		<div class="col-sm-4">
			
			<label for="">Silueta
				<select type="text" placeholder="silueta" name="silueta" id="silueta" class="form-control">
					<option value="">NINGUNA</option>
					<?php $productos->select_siluetas(); ?>
				</select>
			</label>
			<label for="">categoria
				<select type="text" required="" placeholder="categoria" name="categoria" id="categoria" class="form-control">
					<?php $productos->select_categorias(); ?>
				</select>
			</label>
			<label for="">color
				<select type="text" required="" placeholder="color" name="color" id="color" class="form-control">
					<?php $productos->select_color(); ?>
				</select>
			</label>
			<label for="">genero
				<select type="text" required="" placeholder="genero" name="genero" id="genero" class="form-control">
					<?php $productos->select_generos(); ?>
				</select>
			</label>
			
			
		</div>
		<div class="col-sm-4">
			<label for="">Marca
				<select type="text" required="" placeholder="" name="marca" id="marca" class="form-control">
					<?php $productos->select_marcas(); ?>
				</select>
			</label>
			<label for="">Tela
				<select type="text" required="" placeholder="" name="tela" id="telas" class="form-control">
					<?php $productos->select_telas(); ?>
				</select>
			</label>
			<label for="">Proveedor de la Tela
				<select type="text" required="" placeholder="" name="proveedor" id="proveedor" class="form-control">
					<?php $productos->select_proveedores(); ?>
				</select>
			</label>
			<label for="">bodega
				<select type="text" required="" placeholder="bodega" name="bodega" id="bodega" class="form-control">
					<?php $productos->select_bodegas(); ?>
				</select>
			</label>
			<label for="">ruta
				<select type="text" required="" placeholder="ruta" name="ruta" id="ruta" class="form-control">
					<option value="NINGUNA">NINGUNA</option>
					<!-- <?php $productos->select_rutas(); ?> -->
				</select>
			</label>
		</div>
		<div class="col-sm-12">
			<a id="tallas" class="btn btn-primary">Agregar inventario</a>
			<div id="espacioTallas">
					<div class="col-sm-12">
			<legend>Ingreso de inventario</legend>
			<legend><?php echo @$_SESSION['indicaciones_insumos']; ?></legend>
			<legend>Tallas
				<p style="color: crimson; text-transform: uppercase; float:right;">DEBES DE AGREGAR LA CANTIDAD DE PRENDAS POR TALLA.</p>

			</legend>
		</div>
		<div class="col-sm-2">
			<label for="">6 / 3
				<input type="number" required="" value="0" name="talla6" id="talla6" class="form-control">
			</label>
			<label for="">18
				<input type="number" required="" value="0" name="talla18" id="talla18" class="form-control">
			</label>
			<label for="">34
				<input type="number" required="" value="0" name="talla34" id="talla34" class="form-control">
			</label>
			<label for="">XL
				<input type="number" required="" value="0" name="tallaxl" id="tallaxl" class="form-control">
			</label>
			
			
		</div>
		<div class="col-sm-2">
			<label for="">8 / 5
				<input type="number" required="" value="0" name="talla8" id="talla8" class="form-control">
			</label>
			<label for="">20
				<input type="number" required="" value="0" name="talla20" id="talla20" class="form-control">
			</label>
			<label for="">36
				<input type="number" required="" value="0" name="talla36" id="talla36" class="form-control">
			</label>
			<label for="">U
				<input type="number" required="" value="0" name="tallau" id="tallau" class="form-control">
			</label>
			
		</div>
		<div class="col-sm-2">
			<label for="">10 / 7
				<input type="number" required="" value="0" name="talla10" id="talla10" class="form-control">
			</label>
			<label for="">26
				<input type="number" required="" value="0" name="talla26" id="talla26" class="form-control">
			</label>
			<label for="">38
				<input type="number" required="" value="0" name="talla38" id="talla38" class="form-control">
			</label>
			<label for="">EST
				<input type="number" required="" value="0" name="tallaest" id="tallaest" class="form-control">
			</label>
			
		</div>

		<div class="col-sm-2">
			<label for="">12 / 9
				<input type="number" required="" value="0" name="talla12" id="talla12" class="form-control">
			</label>
			<label for="">28
				<input type="number" required="" value="0" name="talla28" id="talla28" class="form-control">
			</label>
			<label for="">S
				<input type="number" required="" value="0" name="tallas" id="tallas" class="form-control">
			</label>
			
			
			
			
		</div>
		<div class="col-sm-2">
			<label for="">14 / 11
				<input type="number" required="" value="0" name="talla14" id="talla14" class="form-control">
			</label>
			<label for="">30
				<input type="number" required="" value="0" name="talla30" id="talla30" class="form-control">
			</label>
			<label for="">M
				<input type="number" required="" value="0" name="tallam" id="tallam" class="form-control">
			</label>
			
			
		</div>
		
		<div class="col-sm-2">
			<label for="">16 / 13
				<input type="number" required="" value="0" name="talla16" id="talla16" class="form-control">
			</label>
			<label for="">32
				<input type="number" required="" value="0" name="talla32" id="talla32" class="form-control">
			</label>
			<label for="">L
				<input type="number" required="" value="0" name="tallal" id="tallal" class="form-control">
			</label>
			<input type="hidden" name="accion" value="registrar">
			<input type="submit" class="btn btn-success" value="Guardar">	
		</div>


			</div>

		</div>

	</div>
	</div>
</div>
</form>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
	$('#espacioTallas').slideUp();
	$('#tallas').click(function(){
		$('#espacioTallas').slideToggle();
	});
</script>