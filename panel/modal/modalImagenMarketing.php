<?php

require_once '../../modelo/redireccion.php';
require_once '../../modelo/datos-productos.php';
require_once '../../modelo/datosInventarios.php';
require_once '../../modelo/funcionesClientes.php';
$inventarios = new Inventarios();
$productos = new Productos();
$clientes = new Clientes();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">

	<div class="container">
		<div class="row"><br>
			<br>
			<br>
			<div class="col-sm-12">
				<img src="../../imagenes/pngwing.com.png" alt="" width="200px" style="float: right;">
				<p style="float: right; color: crimson;"> Actualizar Imagenes Referencia </p>
			<?php
			foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $keyV) {
			?>		
				<h4>Fotos Marketing 1.0 </h4>				<br>
			<?php 
			}
			?>
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			<?php
				//print_r($_POST);
				if(@$_POST['accion'] == 'cambiarColor'){
					$newColor = @$_POST['color'];
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET color = '$newColor' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
				}elseif(@$_POST['accion'] == 'subirImagen'){
					
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						if (isset($_FILES['imagen'])){

							if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg'){
								
								//print_r($_FILES);

								move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenesReferencias/".$_GET['id_inventario'].".jpg");
								$consulta = "UPDATE inventarios_productos SET confirma_imagen_subida = '1' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}else{
								echo 'no se envio';
							}

						}
				}

			?>
			</div>
			<div class="col-sm-12">
			<form action="" method="post" onkeyup="onKeyDownHandler(event);" enctype="multipart/form-data">
				<div id="espacioTallas">
					<div class="col-sm-12">

						<legend>SELECCIONE UNA FOTO DE SU GALERIA</legend>
						<legend>Referencia: <?php echo $keyV['referencia']; ?><br>Silueta: <?php echo $keyV['silueta']; ?><br>Color: <?php echo $keyV['color']; ?></legend>
						
					</div>
					<?php
					foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
					?>

						<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;justify-content: space-between;" class="col-sm-12">
							
							<div class="col-sm-5">

								<?php
								//print_r($key);
								if($key[114] == 0){

									echo "<img src='../../panel/modal/imagenesReferencias/x.png' alt='' width='400px' style=''>";

								}else{

								?>
									<img src="../../panel/modal/imagenesReferencias/<?php echo $_GET['id_inventario']; ?>.jpg" alt="" width="400px" style="">
								<?php
								}

								?>
							</div>
						
							<div class="col-sm-4">

								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>Color actual</strong><br>";
											echo $productos->color_hexa($key['color']);

										?>
									</label>
									<div style="width: 100%;">
										<select id="color" name="color">
											<option value="">- Cambiar color -</option>
											<?php
											foreach ($inventarios->coloresOpciones() as $ckey){
											?>
											<option value="<?php echo $ckey[1] ?>"><?php echo $ckey[1] ?></option>"

											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>Subir imagen . . .</strong><br>";

										?>
									</label>
									<div style="width: 100%;">
										<input name="imagen" id="imagen" type="file"/>
									</div>
								</div>

							</div>
						</div>

						<div class="col-sm-2">
							<input type="hidden" name="accion" value="" id="botonEnviarF">
							<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
							<input type="submit" class="btn btn-success" value="" id="enviarF" style="width:0px;heigth:0px;background-color: white; color: white;border-color:white;">
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

	var referencia = document.getElementById("color");

	referencia.addEventListener('change', (event) => {
	var i=document.getElementById("botonEnviarF").value = "cambiarColor";
	document.getElementById("enviarF").click();
	});

	var referencia = document.getElementById("imagen");

	referencia.addEventListener('change', (event) => {
	var i=document.getElementById("botonEnviarF").value = "subirImagen";
	document.getElementById("enviarF").click();
	});

</script>