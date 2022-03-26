<?php
include '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
$inventarios = new Inventarios();

?>

<div id="preloader">
    Se esta validando...  <img src="https://www.balanzasybasculas.com/images/loader.gif" width="30%" alt="">   
</div>
<script>
    setTimeout(function(){
        document.getElementById('preloader').innerHTML = '';
    }, 2000);
</script>

<?php
    echo $_POST['talla6'];
?>