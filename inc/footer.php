
<footer style="background-color: gray; color: white; position: fixed; bottom: 0; left: 0; right: 0;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">Version Desarrollo</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-sm-2">Empresa: HTEX S.A.S | Rol: 
				<?php 
				if ($_SESSION["typeUser"]==1) {
					echo "Administrador";
				}
				else if ($_SESSION["typeUser"]==2) {
					echo "Vendedor";
				}
				if ($_SESSION["typeUser"]==3) {
					echo "Cartera";
				}
				if ($_SESSION["typeUser"]==4) {
					echo "Bodega";
				}
				if ($_SESSION["typeUser"]==5) {
					echo "Insumos";
				}
				if ($_SESSION["typeUser"]==6) {
					echo "Despacho";
				}
				if ($_SESSION["typeUser"]==8) {
					echo "Administrador de Ventas";
				}
				?>
			</div>
		</div>
	</div>
</footer>