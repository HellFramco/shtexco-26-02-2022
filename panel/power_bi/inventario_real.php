
<?php 
if ($_GET['ejecucion']) {
	echo "<strong style='background-color:green; font-size:16px; color:white;'>Se ha Actualizado Exitosamente.</strong>";
}
?>
<center>
	<legend>Buscar Referencia</legend>
	<form action="datos-inventarios.php" method="post">
		<input type="text" name="ref" id="" style="padding: 10px;">
		<input type="submit" name="" id="buscar" value="Buscar" style="padding: 10px;">
	</form>
</center>
<!-- <div id="espacio_tick"></div> -->
   

<?php include '../librerias_js/pruebas-libreriasjs.php' ?>
<!-- <script>
          $(document).ready(function(){

                      $('#buscar').click(function(){
                        var ref = $('#ref').val();

                        $.post({
                          type: 'POST',
                          url: 'datos-inventarios.php',
                          data: {'ref':ref},
                          success: function(r){
                            $('#espacio_tick').html(r);
                          }
                        });

                        return false;
                      });

                  });
    </script> -->