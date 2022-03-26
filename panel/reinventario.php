<?php
require_once '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
require '../modelo/datos-productos.php';
$productos = new Productos();
$inventarios = new Inventarios();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>


<style type="text/css">

.thumbnail{
position: relative;
z-index: 0;
}

.thumbnail:hover{
background-color: transparent;
z-index: 50;
}

.thumbnail span{ /*CSS for enlarged image*/
position: absolute;


left: -1000px;
visibility: hidden;
color: black;
text-decoration: none;
}

.thumbnail span img{ /*CSS for enlarged image*/
border-width: 0;
}

.thumbnail:hover span{ /*CSS for enlarged image on hover*/
visibility: visible;
top: 0;
left: 60px; /*position where enlarged image should offset horizontally */

}

</style>

</head>

<body id="page-top">
    <div id="contenedor_loading">
        <div id="loading"></div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'top-bar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventarios </h1>
                        

                    </div>

                    
                    <div>
                      <div class="card">
                      <div class="card-body">

                      </div>
                    </div>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    
                    
















<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 6</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Minimo :</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximo :</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
     
    </tbody></table>
      </div>

      <div class="modal-footer">
          
        <button type="reset" class="btn btn-secondary" data-dismiss="" >CANCELAR</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" onclick="option('1')">ACEPTAR</button>
        </form>
      </div>
    </div>
  </div>
</div>









<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 8</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min1" name="min1"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max1" name="max1"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('2')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 10</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min2" name="min2"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max2" name="max2"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('3')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 12</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min3" name="min3"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max3" name="max3"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('4')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 14</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min4" name="min4"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max4" name="max4"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('5')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>















<!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 16</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min5" name="min5"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max5" name="max5"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('6')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>














<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 18</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min6" name="min6"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max6" name="max6"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('7')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>













<!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 20</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min7" name="min7"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max7" name="max7"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('8')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 26</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min8" name="min8"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max8" name="max8"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('9')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>











<!-- Modal -->
<div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 28</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min9" name="min9"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max9" name="max9"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('10')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>









<!-- Modal -->
<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 30</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min10" name="min10"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max10" name="max10"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('11')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 32</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min11" name="min11"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max11" name="max11"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('12')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>













<!-- Modal -->
<div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 34</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min12" name="min12"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max12" name="max12"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('13')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 36</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min13" name="min13"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max13" name="max13"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('14')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA 38</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min14" name="min14"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max14" name="max14"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('15')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>










<!-- Modal -->
<div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA S</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min15" name="min15"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max15" name="max15"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('16')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>








<!-- Modal -->
<div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA M</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min16" name="min16"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max16" name="max16"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('17')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA L</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min17" name="min17"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max17" name="max17"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('18')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA XL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min18" name="min18"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max18" name="max18"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('19')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA U</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min19" name="min19"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max19" name="max19"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('20')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TALLA EST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
        <tr>
            <td>Minimo:</td>
            <td><input type="text" id="min20" name="min20"></td>
        </tr>
        <tr>
            <td>Maximo:</td>
            <td><input type="text" id="max20" name="max20"></td>
        </tr>

    </tbody></table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary "  data-dismiss="modal" onclick="option('21')">ACEPTAR</button>
      </div>
    </div>
  </div>
</div>
















<input type="hidden" value="1" id="op">






                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th style="display: none;"></th>
                                                <th style="display: none;"></th>
                                                <th style="display: none;"></th>
                                                <th></th>
                                                <th>IMAGEN</th>
                                                <th style="display: none;">item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th style="display: none;">coleccion</th>
                                                <th>bodega</th>
                                                <th style="display: none;">ruta</th>
                                                <th>color</th>
                                                <th style="display: none;">proveedor</th>
                                                <th style="display: none;">talla 6 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal1" onclick="option('1')" alt=""></th>
                                                <th style="display: none;">talla 8 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal2" onclick="option('2')" alt=""></th>
                                                <th style="display: none;">talla 10 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal3" onclick="option('3')" alt=""></th>
                                                <th style="display: none;">talla 12 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal4" onclick="option('4')" alt=""></th>
                                                <th style="display: none;">talla 14 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal5" onclick="option('5')" alt=""></th>
                                                <th style="display: none;">talla 16 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal6" onclick="option('6')" alt=""></th>
                                                <th style="display: none;">talla 18 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal7" onclick="option('7')" alt=""></th>
                                                <th style="display: none;">talla 20 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal8" onclick="option('8')" alt=""></th>
                                                <th style="display: none;">talla 26 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal9" onclick="option('9')" alt=""></th>
                                                <th style="display: none;">talla 28 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal10" onclick="option('10')" alt=""></th>
                                                <th style="display: none;">talla 30 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal11" onclick="option('11')" alt=""></th>
                                                <th style="display: none;">talla 32 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal12" onclick="option('12')" alt=""></th>
                                                <th style="display: none;">talla 34 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal13" onclick="option('13')" alt=""></th>
                                                <th style="display: none;">talla 36 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal14" onclick="option('14')" alt=""></th>
                                                <th style="display: none;">talla 38 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal15" onclick="option('15')" alt=""></th>
                                                <th style="display: none;">talla S <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal16" onclick="option('16')" alt=""></th>
                                                <th style="display: none;">talla m <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal17" onclick="option('17')" alt=""></th>
                                                <th style="display: none;">talla l <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal18" onclick="option('18')" alt=""></th>
                                                <th style="display: none;">talla xl <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal19" onclick="option('19')" alt=""></th>
                                                <th style="display: none;">talla u <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal20" onclick="option('20')" alt=""></th>
                                                <th style="display: none;">talla est <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal21" onclick="option('21')" alt=""></th>
                                                <th>Total</th>
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th style="display: none;">fecha ingreso producto</th>
                                                <th>verificado</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verTodoInventarioSoporte() as $key) {
                                              $cantidad = $key['talla6'] + $key['talla8'] + $key['talla10'] + $key['talla12'] +  $key['talla14'] + $key['talla16'] + $key['talla18'] + $key['talla20'] + $key['talla26'] + $key['talla28'] + $key['talla30'] + $key['talla32'] + $key['talla34'] + $key['talla36'];
                                              $cantidad = $cantidad + $key['talla38'] +  $key['tallas'] + $key['tallam'] + $key['tallal'] + $key['tallaxl'] + $key['tallau'] + $key['tallaest'];
                                            ?>
                                                <tr>
                                                    <td style="display: none;">
                                                       
                                                    </td>
                                                    <td style="display: none;">
                                                        
                                                    </td>
                                                    <td style="display: none;">

                                                      
                                                    </td>
                                                    <td>
                                                        <a href="modal/modalReinventario.php?id_inventario=<?php echo $key['id_inventario']; ?>" target="_blank"><img style="width: 40px;height: 40px;" src="../imagenes/f.gif"></a>
                                                    </td>
                                                    <td>
                                                      <?php if ($key['confirma_imagen_subida'] == 1) {
                                                        ?>
                                                        <a class="thumbnail" href="#thumb"><img src="../panel/modal/imagenesReferencias/<?php echo $key['id_inventario']; ?>.jpg" width="100px" height="66px" border="0" /><span><img src="../panel/modal/imagenesReferencias/<?php echo $key['id_inventario']; ?>.jpg"width="600px" height="600px" /><br />Simply beautiful.</span></a>
                                                        
                                                        <?php
                                                       }
                                                       else{
                                                        echo "No tiene imagen";
                                                       } ?>
                                                    
                                                       
                                                    </td>
                                                    <td style="display: none;"><?php echo $key['id_inventario']; ?></td>
                                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion']; ?></td>
                                                    <td><?php echo $key['descripcion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['tela']; ?></td>
                                                    <td><?php echo $key['categoria']; ?></td>
                                                    <td><?php echo $key['genero']; ?></td>
                                                    <td><?php echo $key['bodega']; ?></td>
                                                    <td style="display: none;"><?php echo $key['ruta'];?>dsadas</td>
                                                    <td><?php echo $productos->color_hexa($key['color']);; ?></td>
                                                    <td style="display: none;"><?php echo $key['proveedor']; ?></td>
                                                    <td><?php echo $cantidad; ?></td>
                                                    <td><?php echo $key['estado']; ?></td>
                                                    <td><?php echo $key['precio']; ?></td>
                                                    <td><?php echo $key['fecha_ingreso_inventario']; ?></td>
                                                    <td><?php echo $key['verificado']; ?></td>

                                                </tr>
                                            <?php
                                                $item++;
                                            }
                                            ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                
                                                <th style="display: none;"></th>
                                                <th style="display: none;"></th>
                                                <th style="display: none;"></th>
                                                <th></th>
                                                <th></th>
                                                <th style="display: none;">item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th>bodega</th>
                                                <th style="display: none;">ruta</th>
                                                <th>color</th>
                                                <th style="display: none;">proveedor</th>
                                                <th>Total</th>
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th>fecha ingreso producto</th>
                                                <th>verificado</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <a href="ventas-detalles.php?>">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                                </a>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/librerias_js-inventario.php' ?>



  


<script >

function option(op){
    document.getElementById("op").value = op;

}





$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var min1 = parseInt( $('#min1').val(), 10 );
        var max1 = parseInt( $('#max1').val(), 10 );

        var min2 = parseInt( $('#min2').val(), 10 );
        var max2 = parseInt( $('#max2').val(), 10 );

        var min3 = parseInt( $('#min3').val(), 10 );
        var max3 = parseInt( $('#max3').val(), 10 );

        var min4 = parseInt( $('#min4').val(), 10 );
        var max4 = parseInt( $('#max4').val(), 10 );

        var min5 = parseInt( $('#min5').val(), 10 );
        var max5 = parseInt( $('#max5').val(), 10 );
        
        var min6 = parseInt( $('#min6').val(), 10 );
        var max6 = parseInt( $('#max6').val(), 10 );

        var min7 = parseInt( $('#min7').val(), 10 );
        var max7 = parseInt( $('#max7').val(), 10 );

        var min8 = parseInt( $('#min8').val(), 10 );
        var max8 = parseInt( $('#max8').val(), 10 );

        var min9 = parseInt( $('#min9').val(), 10 );
        var max9 = parseInt( $('#max9').val(), 10 );

        var min10 = parseInt( $('#min10').val(), 10 );
        var max10 = parseInt( $('#max10').val(), 10 );

        var min11 = parseInt( $('#min11').val(), 10 );
        var max11 = parseInt( $('#max11').val(), 10 );

        var min12 = parseInt( $('#min12').val(), 10 );
        var max12 = parseInt( $('#max12').val(), 10 );

        var min13 = parseInt( $('#min13').val(), 10 );
        var max13 = parseInt( $('#max13').val(), 10 );

        var min14 = parseInt( $('#min14').val(), 10 );
        var max14 = parseInt( $('#max14').val(), 10 );

        var min15 = parseInt( $('#min15').val(), 10 );
        var max15 = parseInt( $('#max15').val(), 10 );

        var min16 = parseInt( $('#min16').val(), 10 );
        var max16 = parseInt( $('#max16').val(), 10 );

        var min17 = parseInt( $('#min17').val(), 10 );
        var max17 = parseInt( $('#max17').val(), 10 );

        var min18 = parseInt( $('#min18').val(), 10 );
        var max18 = parseInt( $('#max18').val(), 10 );

        var min19 = parseInt( $('#min19').val(), 10 );
        var max19 = parseInt( $('#max19').val(), 10 );

        var min20 = parseInt( $('#min20').val(), 10 );
        var max20 = parseInt( $('#max20').val(), 10 );


        var t6 = parseFloat( data[19] ) || 0; // use data for the age column
        var t8 = parseFloat( data[20] ) || 0; // use data for the age column
        var t10 = parseFloat( data[21] ) || 0; // use data for the age column
        var t12 = parseFloat( data[22] ) || 0; // use data for the age column
        var t14 = parseFloat( data[23] ) || 0; // use data for the age column
        var t16 = parseFloat( data[24] ) || 0; // use data for the age column
        var t18 = parseFloat( data[25] ) || 0; // use data for the age column
        var t20 = parseFloat( data[26] ) || 0; // use data for the age column
        var t26 = parseFloat( data[27] ) || 0; // use data for the age column
        var t28 = parseFloat( data[28] ) || 0; // use data for the age column
        var t30 = parseFloat( data[29] ) || 0; // use data for the age column
        var t32 = parseFloat( data[30] ) || 0; // use data for the age column
        var t34 = parseFloat( data[31] ) || 0; // use data for the age column
        var t36 = parseFloat( data[32] ) || 0; // use data for the age column
        var t38 = parseFloat( data[33] ) || 0; // use data for the age column
        var ts = parseFloat( data[34] ) || 0; // use data for the age column
        var tm = parseFloat( data[35] ) || 0; // use data for the age column
        var tl = parseFloat( data[36] ) || 0; // use data for the age column
        var txl = parseFloat( data[37] ) || 0; // use data for the age column
        var tu = parseFloat( data[38] ) || 0; // use data for the age column
        var test = parseFloat( data[39] ) || 0; // use data for the age column


var op = document.getElementById("op").value;


          
    
        if(op=="1"){
            if ( ( isNaN( min ) && isNaN( max ) ) ||
                    ( isNaN( min ) && t6 <= max ) ||
                    ( min <= t6   && isNaN( max ) ) ||
                    ( min <= t6   && t6 <= max ) )
                {
                    return true;
                }


            


        }else if(op=="2"){
      

            if ( ( isNaN( min1 ) && isNaN( max1 ) ) ||
                    ( isNaN( min1 ) && t8 <= max1 ) ||
                    ( min1 <= t8   && isNaN( max1 ) ) ||
                    ( min1 <= t8   && t8 <= max1 ) )
                {
                    return true;
                }


        }else if(op=="3"){
            if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                    ( isNaN( min2 ) && t10 <= max2 ) ||
                    ( min2 <= t10   && isNaN( max2 ) ) ||
                    ( min2 <= t10   && t10 <= max2 ) )
                {
                    return true;
                }


        }else if(op=="4"){
            if ( ( isNaN( min3 ) && isNaN( max3 ) ) ||
                    ( isNaN( min3 ) && t12 <= max3 ) ||
                    ( min3 <= t12   && isNaN( max3 ) ) ||
                    ( min3 <= t12   && t12 <= max3 ) )
                {
                    return true;
                }


        }else if(op=="5"){
            if ( ( isNaN( min4 ) && isNaN( max4 ) ) ||
                    ( isNaN( min4 ) && t14 <= max4 ) ||
                    ( min4 <= t14   && isNaN( max4 ) ) ||
                    ( min4 <= t14   && t14 <= max4 ) )
                {
                    return true;
                }


        }else if(op=="6"){
            if ( ( isNaN( min5 ) && isNaN( max5 ) ) ||
                    ( isNaN( min5 ) && t16 <= max5 ) ||
                    ( min5 <= t16   && isNaN( max5 ) ) ||
                    ( min5 <= t16   && t16 <= max5 ) )
                {
                    return true;
                }


        }else if(op=="7"){
            if ( ( isNaN( min6 ) && isNaN( max6 ) ) ||
                    ( isNaN( min6 ) && t18 <= max6 ) ||
                    ( min6 <= t18   && isNaN( max6 ) ) ||
                    ( min6 <= t18   && t18 <= max6 ) )
                {
                    return true;
                }


        }else if(op=="8"){
            if ( ( isNaN( min7 ) && isNaN( max7 ) ) ||
                    ( isNaN( min7 ) && t20 <= max7 ) ||
                    ( min7 <= t20   && isNaN( max7 ) ) ||
                    ( min7 <= t20   && t20 <= max7 ) )
                {
                    return true;
                }


        }else if(op=="9"){
            if ( ( isNaN( min8 ) && isNaN( max8 ) ) ||
                    ( isNaN( min8 ) && t26 <= max8 ) ||
                    ( min8 <= t26   && isNaN( max8 ) ) ||
                    ( min8 <= t26   && t26 <= max8 ) )
                {
                    return true;
                }


        }else if(op=="10"){
            if ( ( isNaN( min9 ) && isNaN( max9 ) ) ||
                    ( isNaN( min9 ) && t28 <= max9 ) ||
                    ( min9 <= t28   && isNaN( max9 ) ) ||
                    ( min9 <= t28   && t28 <= max9 ) )
                {
                    return true;
                }


        }else if(op=="11"){
            if ( ( isNaN( min10 ) && isNaN( max10 ) ) ||
                    ( isNaN( min10 ) && t30 <= max10 ) ||
                    ( min10 <= t30   && isNaN( max10 ) ) ||
                    ( min10 <= t30   && t30 <= max10 ) )
                {
                    return true;
                }


        }else if(op=="12"){
            if ( ( isNaN( min11 ) && isNaN( max11 ) ) ||
                    ( isNaN( min11 ) && t32 <= max11 ) ||
                    ( min11 <= t32   && isNaN( max11 ) ) ||
                    ( min11 <= t32   && t32 <= max11 ) )
                {
                    return true;
                }


        }else if(op=="13"){
            if ( ( isNaN( min12 ) && isNaN( max12 ) ) ||
                    ( isNaN( min12 ) && t34 <= max12 ) ||
                    ( min12 <= t34   && isNaN( max12 ) ) ||
                    ( min12 <= t34   && t34 <= max12 ) )
                {
                    return true;
                }


        }else if(op=="14"){
            if ( ( isNaN( min13 ) && isNaN( max13 ) ) ||
                    ( isNaN( min13 ) && t36 <= max13 ) ||
                    ( min13 <= t36   && isNaN( max13 ) ) ||
                    ( min13 <= t36   && t36 <= max13 ) )
                {
                    return true;
                }


        }else if(op=="15"){
            if ( ( isNaN( min14 ) && isNaN( max14 ) ) ||
                    ( isNaN( min14 ) && t38 <= max14 ) ||
                    ( min14 <= t38   && isNaN( max14 ) ) ||
                    ( min14 <= t38   && t38 <= max14 ) )
                {
                    return true;
                }


        }else if(op=="16"){
            if ( ( isNaN( min15 ) && isNaN( max15 ) ) ||
                    ( isNaN( min15 ) && ts <= max15 ) ||
                    ( min15 <= ts   && isNaN( max15 ) ) ||
                    ( min15 <= ts   && ts <= max15 ) )
                {
                    return true;
                }


        }else if(op=="17"){
            if ( ( isNaN( min16 ) && isNaN( max16 ) ) ||
                    ( isNaN( min16 ) && tm <= max16 ) ||
                    ( min16 <= tm   && isNaN( max16 ) ) ||
                    ( min16 <= tm   && tm <= max16 ) )
                {
                    return true;
                }


        }else if(op=="18"){
            if ( ( isNaN( min17 ) && isNaN( max17 ) ) ||
                    ( isNaN( min17 ) && tl <= max17 ) ||
                    ( min17 <= tl   && isNaN( max17 ) ) ||
                    ( min17 <= tl   && tl <= max17 ) )
                {
                    return true;
                }


        }else if(op=="19"){
            if ( ( isNaN( min18 ) && isNaN( max18 ) ) ||
                    ( isNaN( min18 ) && txl <= max18 ) ||
                    ( min18 <= txl  && isNaN( max18 ) ) ||
                    ( min18 <= txl   && txl <= max18 ) )
                {
                    return true;
                }


        }else if(op=="20"){
            if ( ( isNaN( min19 ) && isNaN( max19 ) ) ||
                    ( isNaN( min19 ) && tu <= max19 ) ||
                    ( min19 <= tu   && isNaN( max19 ) ) ||
                    ( min19 <= tu   && tu <= max19 ) )
                {
                    return true;
                }


        }else if(op=="21"){
            if ( ( isNaN( min20 ) && isNaN( max20 ) ) ||
                    ( isNaN( min20 ) && test <= max20 ) ||
                    ( min20 <= test   && isNaN( max20 ) ) ||
                    ( min20 <= test   && test <= max20 ) )
                {
                    return true;
                }


        }


        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        

    

     
    
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#example').DataTable();
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max, #min1, #max1, #min2, #max2, #min3, #max3, #min4, #max4, #min5, #max5, #min6, #max6, #min7, #max7, #min8, #max8, #min9, #max9, #min10, #max10, #min11, #max11, #min12, #max12, #min13, #max13, #min14, #max14, #min15, #max15, #min16, #max16, #min17, #max17, #min18, #max18, #min19, #max19, #min20, #max20').keyup( function() {
        table.draw();
    } );

} );

    </script>

    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>