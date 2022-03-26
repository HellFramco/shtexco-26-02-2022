<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reintegro de Devoluciones</title>
	<link rel="stylesheet" type="text/css" href="../librerias/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<br><br>
				<legend>Reintegro de Devoluciones para <?php echo $_GET['descripcion']; ?></legend>
			</div>
		</div>
	</div>
	<div class="container">
		<form action="../modelo/reintegroDevoluciones.php" method="post">
			<div class="row">
			<div class="col-sm-3">
				<label>TALLA 6: </label><input type="number" class="form-control" name="talla6" value="0">
				<label>TALLA 8: </label><input type="number" class="form-control" name="talla8" value="0">
				<label>TALLA 10: </label><input type="number" class="form-control" name="talla10" value="0">
				<label>TALLA 12: </label><input type="number" class="form-control" name="talla12" value="0">
				<label>TALLA 14: </label><input type="number" class="form-control" name="talla14" value="0">
				<label>TALLA 16: </label><input type="number" class="form-control" name="talla16" value="0">
			</div>
			<div class="col-sm-3">
				<label>TALLA 18: </label><input type="number" class="form-control" name="talla18" value="0">
				<label>TALLA 20: </label><input type="number" class="form-control" name="talla20" value="0">
				<label>TALLA 26: </label><input type="number" class="form-control" name="talla26" value="0">
				<label>TALLA 28: </label><input type="number" class="form-control" name="talla28" value="0">
				<label>TALLA 30: </label><input type="number" class="form-control" name="talla30" value="0">
				<label>TALLA 32: </label><input type="number" class="form-control" name="talla32" value="0">
			</div>
			<div class="col-sm-3">
				<label>TALLA 34: </label><input type="number" class="form-control" name="talla34" value="0">
				<label>TALLA 36: </label><input type="number" class="form-control" name="talla36" value="0">
				<label>TALLA 38: </label><input type="number" class="form-control" name="talla38" value="0">
				<label>TALLA s: </label><input type="number" class="form-control" name="tallas" value="0">
				<label>TALLA m: </label><input type="number" class="form-control" name="tallam" value="0">
				<label>TALLA l: </label><input type="number" class="form-control" name="tallal" value="0">
			</div>
			<div class="col-sm-3">
				<label>TALLA xl: </label><input type="number" class="form-control" name="tallaxl" value="0">
				<label>TALLA u: </label><input type="number" class="form-control" name="tallau" value="0">
				<label>TALLA est: </label><input type="number" class="form-control" name="tallaest" value="0">
				<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
				<input type="hidden" name="accion" value="reintegroDevoluciones">
				<br>
				<label> </label><input type="submit" name="envio" value="Reintegrar" class="btn btn-primary">
			</div>
		</div>
		</form>
	</div>
</body>
</html>