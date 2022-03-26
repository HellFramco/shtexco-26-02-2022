<!DOCTYPE html>
<?php 
require_once '../modelo/funcionesComprobantes.php';
$Comprobantes = new Comprobantes();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h1 class="text-center">COMPROBANTES DE PAGO</h1>
<?php 
$cont=1;
foreach ($Comprobantes->ComprobantePorId($_GET['id_venta']) as $key) {
?>
  <div style="text-align: center;">

  <button class=" btn btn-info mt-3 w-50" onclick="ver_imagen('<?php echo $key['img']; ?>')">
                             <a class="" id="comprobante2_<?php echo $key['id_venta'].$cont; ?>" onclick="ver_imagen('<?php echo $key['img']; ?>')"> <?php echo $cont ?>)  Comprobante </i></a><br>
   </button>
        
  </div>
<?php
$cont=$cont+1; 
}

?>


<script>



function ver_imagen(imagen){
    window.open('comprobantes/'+imagen, 'Comprobante2', 'width=610,height=800, top=100, left=400, location=no');
}

</script>


<?php include './librerias_js/pruebas-libreriasjs.php' ?>



<script>
window.onload = function() {
  var contenedor = document.getElementById("contenedor_loading");
contenedor.style.visibility = "hidden";
contenedor.style.opacity = "0";
};
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
            var identificacion = document.getElementById('identificacion');




            // guardar.addEventListener('click', function(){
            //     if (nombre.value == '') { val_nombre.innerHTML = 'Este campo no puede estar vacio.'; }
            // }

            

        
          
      </script>
</body>
</html>