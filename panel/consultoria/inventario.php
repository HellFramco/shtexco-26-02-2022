<h3>INVENTARIO</h3>


<div id="espacio_inventario_real">
	<strong style="font-size: 65px;">Este inventario se actualiza automaticamente</strong>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function Consulta(){
		var datos = $.ajax({
			url: 'inventario_real.php',
			dataType: "text",
			async: false
		}).responseText;

	var espacio_inventario_real = document.getElementById("espacio_inventario_real");
	espacio_inventario_real.innerHTML = datos;
	}

	setInterval(Consulta,5000);
</script>