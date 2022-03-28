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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/> 

  <title></title>
  <style>
    #flexSwitchCheckDefault {

      margin-left: 2.75rem !important;
    }

    .dropdown-menu.show {
      overflow: auto;
      overflow-x: hidden;
      height: 200px;
      width: 178px;


    }
    input#flexSwitchCheckDefault{
      width: auto;
      margin-left: 6.74rem !important;
    }
    button#dropdownMenuButton{
      margin-bottom: 20px;
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
            <ul class="pagination shadow-lg">

            </ul>

          </div>

          <!-- Modal IMAGEN -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                  <img name="img" src="" width="450pxpx" height="600px" style="text-align: center;"> 
                </div>
              </div>
            </div>
          </div>

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
                      <tbody>
                        <tr>
                          <td>Minimo :</td>
                          <td><input type="text" id="min" name="min"></td>
                        </tr>
                        <tr>
                          <td>Maximo :</td>
                          <td><input type="text" id="max" name="max"></td>
                        </tr>

                      </tbody>
                    </table>
                </div>

                <div class="modal-footer">

                  <button type="reset" class="btn btn-secondary" data-dismiss="">CANCELAR</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="option('1')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('2')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('3')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('4')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('5')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('6')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('7')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('8')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('9')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('10')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('11')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('12')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('13')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('14')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('15')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('16')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('17')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('18')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('19')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('20')">ACEPTAR</button>
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

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="option('21')">ACEPTAR</button>
                </div>
              </div>
            </div>
          </div>
















          <input type="hidden" value="1" id="op">






          <div class="col-sm-12">
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 180px !important;">
                      Ocultar Columnas
                    </button>
                    <!-- <div style="background-color: #EEA65F; font-size: 24px; float: right; padding: 10px;">SE ESTA INVENTARIANDO</div>
                    <div style="background-color: #64E585; font-size: 24px; float: right; padding: 10px;">SE HA INVENTARIADO</div> -->
                    <div class="dropdown-menu mb-1" aria-labelledby="dropdownMenuButton">
                      <a id="confirmarImagen" class="page-link" data-column="0" style="cursor: pointer" onclick="ejecutar1()"> <input name="c1" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Confirmar Imagen</a>
                      <a id="imagen" class="page-link" data-column="1" style="cursor: pointer" onclick="ejecutar2()"> <input name="c2"  class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Imagen</a>
                      <a id="referencia" class="page-link" data-column="2" style="cursor: pointer" onclick="ejecutar3()"><input name="c3" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Referencia</a>
                      <a id="descripcion" class="page-link" data-column="3" style="cursor: pointer" onclick="ejecutar4()"><input name="c4" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Descripcion</a>
                      <a id="marca" class="page-link" data-column="4" style="cursor: pointer" onclick="ejecutar5()"><input name="c5" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Marca</a>
                      <a id="tipo" class="page-link" data-column="5" style="cursor: pointer" onclick="ejecutar6()"><input name="c6" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Tipo</a>
                      <a id="silueta" class="page-link" data-column="6" style="cursor: pointer" onclick="ejecutar7()"><input name="c7" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Silueta</a>
                      <a id="categoria" class="page-link" data-column="7" style="cursor: pointer" onclick="ejecutar9()"><input name="c9" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Categoria</a>
                      <a id="genero" class="page-link" data-column="8" style="cursor: pointer" onclick="ejecutar10()"><input name="c10" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Genero</a>
                      <a id="bodega" class="page-link" data-column="9" style="cursor: pointer" onclick="ejecutar12()"><input name="c12" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Bodega</a>
                      <a id="color" class="page-link" data-column="10" style="cursor: pointer" onclick="ejecutar13()"><input name="c13" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Color</a>
                      <a id="talla6" class="page-link" data-column="11" style="cursor: pointer" onclick="ejecutar14()"><input name="c14" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 6</a>
                      <a id="talla8" class="page-link" data-column="12" style="cursor: pointer" onclick="ejecutar15()"><input name="c15" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 8</a>
                      <a id="talla10" class="page-link" data-column="13" style="cursor: pointer" onclick="ejecutar16()"><input name="c16" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 10</a>
                      <a id="talla12" class="page-link" data-column="14" style="cursor: pointer" onclick="ejecutar17()"><input name="c17" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 12</a>
                      <a id="talla14" class="page-link" data-column="15" style="cursor: pointer" onclick="ejecutar18()"><input name="c18" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 14</a>
                      <a id="talla16" class="page-link" data-column="16" style="cursor: pointer" onclick="ejecutar19()"><input name="c19" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 16</a>
                      <a id="talla18" class="page-link" data-column="17" style="cursor: pointer" onclick="ejecutar20()"><input name="c20" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 18</a>
                      <a id="talla20" class="page-link" data-column="18" style="cursor: pointer" onclick="ejecutar21()"><input name="c21" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 20</a>
                      <a id="talla26" class="page-link" data-column="19" style="cursor: pointer" onclick="ejecutar22()"><input name="c22" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 26</a>
                      <a id="talla28" class="page-link" data-column="20" style="cursor: pointer" onclick="ejecutar23()"><input name="c23" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 28</a>
                      <a id="talla30" class="page-link" data-column="21" style="cursor: pointer" onclick="ejecutar24()"><input name="c24" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 30</a>
                      <a id="talla32" class="page-link" data-column="22" style="cursor: pointer" onclick="ejecutar25()"><input name="c25" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 32</a>
                      <a id="talla34" class="page-link" data-column="23" style="cursor: pointer" onclick="ejecutar26()"><input name="c26" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 34</a>
                      <a id="talla36" class="page-link" data-column="24" style="cursor: pointer" onclick="ejecutar27()"><input name="c27" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 36</a>
                      <a id="talla38" class="page-link" data-column="25" style="cursor: pointer" onclick="ejecutar28()"><input name="c28" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla 38</a>
                      <a id="tallaS" class="page-link" data-column="26" style="cursor: pointer" onclick="ejecutar29()"><input name="c29" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla S</a>
                      <a id="tallaM" class="page-link" data-column="27" style="cursor: pointer" onclick="ejecutar30()"><input name="c30" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla M</a>
                      <a id="tallaL" class="page-link" data-column="28" style="cursor: pointer" onclick="ejecutar31()"><input name="c31" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla L</a>
                      <a id="tallaXL" class="page-link" data-column="29" style="cursor: pointer" onclick="ejecutar32()"><input name="c32" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla XL</a>
                      <a id="tallaU" class="page-link" data-column="30" style="cursor: pointer" onclick="ejecutar33()"><input name="c33" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla U</a>
                      <a id="tallaEST" class="page-link" data-column="31" style="cursor: pointer" onclick="ejecutar34()"><input name="c34" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Talla Est</a>
                      <a id="total" class="page-link" data-column="32" style="cursor: pointer" onclick="ejecutar35()"><input name="c35" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Total</a>
                      <a id="precio" class="page-link" data-column="33" style="cursor: pointer" onclick="ejecutar37()"><input name="c37" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">Precio</a>

                    </div>
                  </div>
                  <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Silueta</th>
                        <th>Referencia</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Color</th>
                        <th>Talla U/6/26 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal1" onclick="option('1')" alt=""></th>
                        <th>Talla S/8/28 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal2" onclick="option('2')" alt=""></th>
                        <th>Talla M/10/30 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal3" onclick="option('3')" alt=""></th>
                        <th>Talla L/12/32 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal4" onclick="option('4')" alt=""></th>
                        <th>Talla XL/14/34 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal5" onclick="option('5')" alt=""></th>
                        <th>Talla 16/26 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal6" onclick="option('6')" alt=""></th>
                        <th>Talla 18/38 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal7" onclick="option('7')" alt=""></th>
                        <th>Talla 20 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal8" onclick="option('8')" alt=""></th>
                        <th>Talla EST <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal9" onclick="option('9')" alt=""></th>
                        <th>Total</th>
                        <th>Precio</th>
                        <th>Precio Mayor</th>
                      </tr>
                    </thead>
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

  <!-- modal necesario para el funcionamiento del logout -->

  <!-- libreria necesaria para el funcionamiento de data table -->
  <?php include './librerias_js/librerias_js-inventarioSS.php' ?>

  <script>
    function option(op) {
      document.getElementById("op").value = op;

    }

    $.fn.dataTable.ext.search.push(
      function(settings, data, dataIndex) {
        var min = parseInt($('#min').val(), 10);
        var max = parseInt($('#max').val(), 10);
        var min1 = parseInt($('#min1').val(), 10);
        var max1 = parseInt($('#max1').val(), 10);

        var min2 = parseInt($('#min2').val(), 10);
        var max2 = parseInt($('#max2').val(), 10);

        var min3 = parseInt($('#min3').val(), 10);
        var max3 = parseInt($('#max3').val(), 10);

        var min4 = parseInt($('#min4').val(), 10);
        var max4 = parseInt($('#max4').val(), 10);

        var min5 = parseInt($('#min5').val(), 10);
        var max5 = parseInt($('#max5').val(), 10);

        var min6 = parseInt($('#min6').val(), 10);
        var max6 = parseInt($('#max6').val(), 10);

        var min7 = parseInt($('#min7').val(), 10);
        var max7 = parseInt($('#max7').val(), 10);

        var min8 = parseInt($('#min8').val(), 10);
        var max8 = parseInt($('#max8').val(), 10);

        var min9 = parseInt($('#min9').val(), 10);
        var max9 = parseInt($('#max9').val(), 10);

        var min10 = parseInt($('#min10').val(), 10);
        var max10 = parseInt($('#max10').val(), 10);

        var min11 = parseInt($('#min11').val(), 10);
        var max11 = parseInt($('#max11').val(), 10);

        var min12 = parseInt($('#min12').val(), 10);
        var max12 = parseInt($('#max12').val(), 10);

        var min13 = parseInt($('#min13').val(), 10);
        var max13 = parseInt($('#max13').val(), 10);

        var min14 = parseInt($('#min14').val(), 10);
        var max14 = parseInt($('#max14').val(), 10);

        var min15 = parseInt($('#min15').val(), 10);
        var max15 = parseInt($('#max15').val(), 10);

        var min16 = parseInt($('#min16').val(), 10);
        var max16 = parseInt($('#max16').val(), 10);

        var min17 = parseInt($('#min17').val(), 10);
        var max17 = parseInt($('#max17').val(), 10);

        var min18 = parseInt($('#min18').val(), 10);
        var max18 = parseInt($('#max18').val(), 10);

        var min19 = parseInt($('#min19').val(), 10);
        var max19 = parseInt($('#max19').val(), 10);

        var min20 = parseInt($('#min20').val(), 10);
        var max20 = parseInt($('#max20').val(), 10);


        var t6 = parseFloat(data[11]) || 0; // use data for the age column
        var t8 = parseFloat(data[12]) || 0; // use data for the age column
        var t10 = parseFloat(data[13]) || 0; // use data for the age column
        var t12 = parseFloat(data[14]) || 0; // use data for the age column
        var t14 = parseFloat(data[15]) || 0; // use data for the age column
        var t16 = parseFloat(data[16]) || 0; // use data for the age column
        var t18 = parseFloat(data[17]) || 0; // use data for the age column
        var t20 = parseFloat(data[18]) || 0; // use data for the age column
        var t26 = parseFloat(data[19]) || 0; // use data for the age column
        var t28 = parseFloat(data[20]) || 0; // use data for the age column
        var t30 = parseFloat(data[21]) || 0; // use data for the age column
        var t32 = parseFloat(data[22]) || 0; // use data for the age column
        var t34 = parseFloat(data[23]) || 0; // use data for the age column
        var t36 = parseFloat(data[24]) || 0; // use data for the age column
        var t38 = parseFloat(data[25]) || 0; // use data for the age column
        var ts = parseFloat(data[26]) || 0; // use data for the age column
        var tm = parseFloat(data[27]) || 0; // use data for the age column
        var tl = parseFloat(data[28]) || 0; // use data for the age column
        var txl = parseFloat(data[29]) || 0; // use data for the age column
        var tu = parseFloat(data[30]) || 0; // use data for the age column
        var test = parseFloat(data[31]) || 0; // use data for the age column


        var op = document.getElementById("op").value;




        if (op == "1") {
          if ((isNaN(min) && isNaN(max)) ||
            (isNaN(min) && t6 <= max) ||
            (min <= t6 && isNaN(max)) ||
            (min <= t6 && t6 <= max)) {
            return true;
          }





        } else if (op == "2") {


          if ((isNaN(min1) && isNaN(max1)) ||
            (isNaN(min1) && t8 <= max1) ||
            (min1 <= t8 && isNaN(max1)) ||
            (min1 <= t8 && t8 <= max1)) {
            return true;
          }


        } else if (op == "3") {
          if ((isNaN(min2) && isNaN(max2)) ||
            (isNaN(min2) && t10 <= max2) ||
            (min2 <= t10 && isNaN(max2)) ||
            (min2 <= t10 && t10 <= max2)) {
            return true;
          }


        } else if (op == "4") {
          if ((isNaN(min3) && isNaN(max3)) ||
            (isNaN(min3) && t12 <= max3) ||
            (min3 <= t12 && isNaN(max3)) ||
            (min3 <= t12 && t12 <= max3)) {
            return true;
          }


        } else if (op == "5") {
          if ((isNaN(min4) && isNaN(max4)) ||
            (isNaN(min4) && t14 <= max4) ||
            (min4 <= t14 && isNaN(max4)) ||
            (min4 <= t14 && t14 <= max4)) {
            return true;
          }


        } else if (op == "6") {
          if ((isNaN(min5) && isNaN(max5)) ||
            (isNaN(min5) && t16 <= max5) ||
            (min5 <= t16 && isNaN(max5)) ||
            (min5 <= t16 && t16 <= max5)) {
            return true;
          }


        } else if (op == "7") {
          if ((isNaN(min6) && isNaN(max6)) ||
            (isNaN(min6) && t18 <= max6) ||
            (min6 <= t18 && isNaN(max6)) ||
            (min6 <= t18 && t18 <= max6)) {
            return true;
          }


        } else if (op == "8") {
          if ((isNaN(min7) && isNaN(max7)) ||
            (isNaN(min7) && t20 <= max7) ||
            (min7 <= t20 && isNaN(max7)) ||
            (min7 <= t20 && t20 <= max7)) {
            return true;
          }


        } else if (op == "9") {
          if ((isNaN(min8) && isNaN(max8)) ||
            (isNaN(min8) && t26 <= max8) ||
            (min8 <= t26 && isNaN(max8)) ||
            (min8 <= t26 && t26 <= max8)) {
            return true;
          }


        } else if (op == "10") {
          if ((isNaN(min9) && isNaN(max9)) ||
            (isNaN(min9) && t28 <= max9) ||
            (min9 <= t28 && isNaN(max9)) ||
            (min9 <= t28 && t28 <= max9)) {
            return true;
          }


        } else if (op == "11") {
          if ((isNaN(min10) && isNaN(max10)) ||
            (isNaN(min10) && t30 <= max10) ||
            (min10 <= t30 && isNaN(max10)) ||
            (min10 <= t30 && t30 <= max10)) {
            return true;
          }


        } else if (op == "12") {
          if ((isNaN(min11) && isNaN(max11)) ||
            (isNaN(min11) && t32 <= max11) ||
            (min11 <= t32 && isNaN(max11)) ||
            (min11 <= t32 && t32 <= max11)) {
            return true;
          }


        } else if (op == "13") {
          if ((isNaN(min12) && isNaN(max12)) ||
            (isNaN(min12) && t34 <= max12) ||
            (min12 <= t34 && isNaN(max12)) ||
            (min12 <= t34 && t34 <= max12)) {
            return true;
          }


        } else if (op == "14") {
          if ((isNaN(min13) && isNaN(max13)) ||
            (isNaN(min13) && t36 <= max13) ||
            (min13 <= t36 && isNaN(max13)) ||
            (min13 <= t36 && t36 <= max13)) {
            return true;
          }


        } else if (op == "15") {
          if ((isNaN(min14) && isNaN(max14)) ||
            (isNaN(min14) && t38 <= max14) ||
            (min14 <= t38 && isNaN(max14)) ||
            (min14 <= t38 && t38 <= max14)) {
            return true;
          }


        } else if (op == "16") {
          if ((isNaN(min15) && isNaN(max15)) ||
            (isNaN(min15) && ts <= max15) ||
            (min15 <= ts && isNaN(max15)) ||
            (min15 <= ts && ts <= max15)) {
            return true;
          }


        } else if (op == "17") {
          if ((isNaN(min16) && isNaN(max16)) ||
            (isNaN(min16) && tm <= max16) ||
            (min16 <= tm && isNaN(max16)) ||
            (min16 <= tm && tm <= max16)) {
            return true;
          }


        } else if (op == "18") {
          if ((isNaN(min17) && isNaN(max17)) ||
            (isNaN(min17) && tl <= max17) ||
            (min17 <= tl && isNaN(max17)) ||
            (min17 <= tl && tl <= max17)) {
            return true;
          }


        } else if (op == "19") {
          if ((isNaN(min18) && isNaN(max18)) ||
            (isNaN(min18) && txl <= max18) ||
            (min18 <= txl && isNaN(max18)) ||
            (min18 <= txl && txl <= max18)) {
            return true;
          }


        } else if (op == "20") {
          if ((isNaN(min19) && isNaN(max19)) ||
            (isNaN(min19) && tu <= max19) ||
            (min19 <= tu && isNaN(max19)) ||
            (min19 <= tu && tu <= max19)) {
            return true;
          }


        } else if (op == "21") {
          if ((isNaN(min20) && isNaN(max20)) ||
            (isNaN(min20) && test <= max20) ||
            (min20 <= test && isNaN(max20)) ||
            (min20 <= test && test <= max20)) {
            return true;
          }


        }









        return false;
      }
    );

  </script>
  <script>
    var contador1 = 0;
    var contador2 = 0;
    var contador3 = 0;
    var contador4 = 0;
    var contador5 = 0;
    var contador6 = 0;
    var contador7 = 0;
    var contador8 = 0;
    var contador9 = 0;
    var contador10 = 0;
    var contador11 = 0;
    var contador12 = 0;
    var contador13 = 0;
    var contador14 = 0;
    var contador15 = 0;
    var contador16 = 0;
    var contador17 = 0;
    var contador18 = 0;
    var contador19 = 0;
    var contador20 = 0;
    var contador21 = 0;
    var contador22 = 0;
    var contador23 = 0;
    var contador24 = 0;
    var contador25 = 0;
    var contador26 = 0;
    var contador27 = 0;
    var contador28 = 0;
    var contador29 = 0;
    var contador30 = 0;
    var contador31 = 0;
    var contador32 = 0;
    var contador33 = 0;
    var contador34 = 0;
    var contador35 = 0;
    var contador36 = 0;
    var contador37 = 0;

    function ejecutar1() {

      // Desmarcar todas las checkboxes

      if (contador1 == 0) {
        $("#confirmarImagen").css('color', 'red');
        $(document.getElementsByName("c1")).prop("checked",true);
        contador1++;
       
      
      } else {
        $("#confirmarImagen").css('color', 'blue');
        $(document.getElementsByName("c1")).prop("checked",false);
        contador1--;
        
      }
    }

    function ejecutar2() {

      // Desmarcar todas las checkboxes

      if (contador2 == 0) {
        $("#imagen").css('color', 'red');
        $(document.getElementsByName("c2")).prop("checked",true);
        contador2++;
      } else {
        $("#imagen").css('color', 'blue');
        $(document.getElementsByName("c2")).prop("checked",false);
        contador2--;
      }
    }

    function ejecutar3() {

      // Desmarcar todas las checkboxes

      if (contador3 == 0) {
        $("#referencia").css('color', 'red');
        $(document.getElementsByName("c3")).prop("checked",true);
        contador3++;
      } else {
        $("#referencia").css('color', 'blue');
        $(document.getElementsByName("c3")).prop("checked",false);
        contador3--;
      }
    }

    function ejecutar4() {

      // Desmarcar todas las checkboxes

      if (contador4 == 0) {
        $("#descripcion").css('color', 'red');
        $(document.getElementsByName("c4")).prop("checked",true);
        contador4++;
      } else {
        $("#descripcion").css('color', 'blue');
        $(document.getElementsByName("c4")).prop("checked",false);
        contador4--;
      }
    }

    function ejecutar5() {

      // Desmarcar todas las checkboxes

      if (contador5 == 0) {
        $("#marca").css('color', 'red');
        $(document.getElementsByName("c5")).prop("checked",true);
        contador5++;
      } else {
        $("#marca").css('color', 'blue');
        $(document.getElementsByName("c5")).prop("checked",false);
        contador5--;
      }
    }

    function ejecutar6() {

      // Desmarcar todas las checkboxes

      if (contador6 == 0) {
        $("#tipo").css('color', 'red');
        $(document.getElementsByName("c6")).prop("checked",true);
        contador6++;
      } else {
        $("#tipo").css('color', 'blue');
        $(document.getElementsByName("c6")).prop("checked",false);
        contador6--;
      }
    }

    function ejecutar7() {

      // Desmarcar todas las checkboxes

      if (contador7 == 0) {
        $("#silueta").css('color', 'red');
        $(document.getElementsByName("c7")).prop("checked",true);
        contador7++;
      } else {
        $("#silueta").css('color', 'blue');
        $(document.getElementsByName("c7")).prop("checked",false);
        contador7--;
      }
    }

    function ejecutar8() {

      // Desmarcar todas las checkboxes

      if (contador8 == 0) {
        $("#tela").css('color', 'red');
        $(document.getElementsByName("c8")).prop("checked",true);
        contador8++;
      } else {
        $("#tela").css('color', 'blue');
        $(document.getElementsByName("c8")).prop("checked",false);
        contador8--;
      }
    }

    function ejecutar9() {

      // Desmarcar todas las checkboxes

      if (contador9 == 0) {
        $("#categoria").css('color', 'red');
        $(document.getElementsByName("c9")).prop("checked",true);
        contador9++;
      } else {
        $("#categoria").css('color', 'blue');
        $(document.getElementsByName("c9")).prop("checked",false);
        contador9--;
      }
    }

    function ejecutar10() {

      // Desmarcar todas las checkboxes

      if (contador10 == 0) {
        $("#genero").css('color', 'red');
        $(document.getElementsByName("c10")).prop("checked",true);
        contador10++;
      } else {
        $("#genero").css('color', 'blue');
        $(document.getElementsByName("c10")).prop("checked",false);
        contador10--;
      }
    }

    function ejecutar11() {

      // Desmarcar todas las checkboxes

      if (contador11 == 0) {
        $("#coleccion").css('color', 'red');
        $(document.getElementsByName("c11")).prop("checked",true);
        contador11++;
      } else {
        $("#coleccion").css('color', 'blue');
        $(document.getElementsByName("c11")).prop("checked",false);
        contador11--;
      }
    }

    function ejecutar12() {

      // Desmarcar todas las checkboxes

      if (contador12 == 0) {
        $("#bodega").css('color', 'red');
        $(document.getElementsByName("c12")).prop("checked",true);
        contador12++;
      } else {
        $("#bodega").css('color', 'blue');
        $(document.getElementsByName("c12")).prop("checked",false);
        contador12--;
      }
    }

    function ejecutar13() {
      if (contador13 == 0) {
        $("#color").css('color', 'red');
        $(document.getElementsByName("c13")).prop("checked",true);
        contador13++;
      } else {
        $("#color").css('color', 'blue');
        $(document.getElementsByName("c13")).prop("checked",false);
        contador13--;
      }
    }

    function ejecutar14() {
      if (contador14 == 0) {
        $("#talla6").css('color', 'red');
        $(document.getElementsByName("c14")).prop("checked",true);
        contador14++;
      } else {
        $("#talla6").css('color', 'blue');
        $(document.getElementsByName("c14")).prop("checked",false);
        contador14--;
      }
    }

    function ejecutar15() {
      if (contador15 == 0) {
        $("#talla8").css('color', 'red');
        $(document.getElementsByName("c15")).prop("checked",true);
        contador15++;
      } else {
        $("#talla8").css('color', 'blue');
        $(document.getElementsByName("c15")).prop("checked",false);
        contador15--;
      }
    }

    function ejecutar16() {
      if (contador16 == 0) {
        $("#talla10").css('color', 'red');
        $(document.getElementsByName("c16")).prop("checked",true);
        contador16++;
      } else {
        $("#talla10").css('color', 'blue');
        $(document.getElementsByName("c16")).prop("checked",false);
        contador16--;
      }
    }

    function ejecutar17() {
      if (contador17 == 0) {
        $("#talla12").css('color', 'red');
        $(document.getElementsByName("c17")).prop("checked",true);
        contador17++;
      } else {
        $("#talla12").css('color', 'blue');
        $(document.getElementsByName("c17")).prop("checked",false);
        contador17--;
      }
    }

    function ejecutar18() {
      if (contador18 == 0) {
        $("#talla14").css('color', 'red');
        $(document.getElementsByName("c18")).prop("checked",true);
        contador18++;
      } else {
        $("#talla14").css('color', 'blue');
        $(document.getElementsByName("c18")).prop("checked",false);
        contador18--;
      }
    }

    function ejecutar19() {
      if (contador19 == 0) {
        $("#talla16").css('color', 'red');
        $(document.getElementsByName("c19")).prop("checked",true);
        contador19++;
      } else {
        $("#talla16").css('color', 'blue');
        $(document.getElementsByName("c19")).prop("checked",false);
        contador19--;
      }
    }

    function ejecutar20() {
      if (contador20 == 0) {
        $("#talla18").css('color', 'red');
        $(document.getElementsByName("c20")).prop("checked",true);
        contador20++;
      } else {
        $("#talla18").css('color', 'blue');
        $(document.getElementsByName("c20")).prop("checked",false);
        contador20--;
      }
    }

    function ejecutar21() {
      if (contador21 == 0) {
        $("#talla20").css('color', 'red');
        $(document.getElementsByName("c21")).prop("checked",true);
        contador21++;
      } else {
        $("#talla20").css('color', 'blue');
        $(document.getElementsByName("c21")).prop("checked",false);
        contador21--;
      }
    }

    function ejecutar22() {
      if (contador22 == 0) {
        $("#talla26").css('color', 'red');
         $(document.getElementsByName("c22")).prop("checked",true);
        contador22++;
      } else {
        $("#talla26").css('color', 'blue');
         $(document.getElementsByName("c22")).prop("checked",false);
        contador22--;
      }
    }

    function ejecutar23() {
      if (contador23 == 0) {
        $("#talla28").css('color', 'red');
         $(document.getElementsByName("c23")).prop("checked",true);
        contador23++;
      } else {
        $("#talla28").css('color', 'blue');
         $(document.getElementsByName("c23")).prop("checked",false);
        contador23--;
      }
    }

    function ejecutar24() {
      if (contador24 == 0) {
        $("#talla30").css('color', 'red');
         $(document.getElementsByName("c24")).prop("checked",true);
        contador24++;
      } else {
        $("#talla30").css('color', 'blue');
         $(document.getElementsByName("c24")).prop("checked",false);
        contador24--;
      }
    }

    function ejecutar25() {
      if (contador25 == 0) {
        $("#talla32").css('color', 'red');
        $(document.getElementsByName("c25")).prop("checked",true);
        contador25++;
      } else {
        $("#talla32").css('color', 'blue');
        $(document.getElementsByName("c25")).prop("checked",false);
        contador25--;
      }
    }

    function ejecutar26() {
      if (contador26 == 0) {
        $("#talla34").css('color', 'red');
         $(document.getElementsByName("c26")).prop("checked",true);
        contador26++;
      } else {
        $("#talla34").css('color', 'blue');
         $(document.getElementsByName("c26")).prop("checked",false);
        contador12--;
      }
    }

    function ejecutar27() {
      if (contador27 == 0) {
        $("#talla36").css('color', 'red');
         $(document.getElementsByName("c27")).prop("checked",true);
        contador27++;
      } else {
        $("#talla36").css('color', 'blue');
         $(document.getElementsByName("c27")).prop("checked",false);
        contador27--;
      }
    }

    function ejecutar28() {
      if (contador28 == 0) {
        $("#talla38").css('color', 'red');
         $(document.getElementsByName("c28")).prop("checked",true);
        contador28++;
      } else {
        $("#talla38").css('color', 'blue');
         $(document.getElementsByName("c28")).prop("checked",false);
        contador28--;
      }
    }

    function ejecutar29() {
      if (contador29 == 0) {
        $("#tallaS").css('color', 'red');
        $(document.getElementsByName("c29")).prop("checked",true);
        contador29++;
      } else {
        $("#tallaS").css('color', 'blue');
        $(document.getElementsByName("c29")).prop("checked",false);
        contador29--;
      }
    }

    function ejecutar30() {
      if (contador30 == 0) {
        $("#tallaM").css('color', 'red');
         $(document.getElementsByName("c30")).prop("checked",true);
        contador30++;
      } else {
        $("#tallaM").css('color', 'blue');
         $(document.getElementsByName("c30")).prop("checked",false);
        contador30--;
      }
    }

    function ejecutar31() {
      if (contador31 == 0) {
        $("#tallaL").css('color', 'red');
         $(document.getElementsByName("c31")).prop("checked",true);
        contador31++;
      } else {
        $("#tallaL").css('color', 'blue');
         $(document.getElementsByName("c31")).prop("checked",false);
        contador31--;
      }
    }

    function ejecutar32() {
      if (contador32 == 0) {
        $("#tallaXL").css('color', 'red');
         $(document.getElementsByName("c32")).prop("checked",true);
        contador32++;
      } else {
        $("#tallaXL").css('color', 'blue');
         $(document.getElementsByName("c32")).prop("checked",false);
        contador32--;
      }
    }

    function ejecutar33() {
      if (contador33 == 0) {
        $("#tallaU").css('color', 'red');
        $(document.getElementsByName("c33")).prop("checked",true);
        contador33++;
      } else {
        $("#tallaU").css('color', 'blue');
        $(document.getElementsByName("c33")).prop("checked",false);
        contador33--;
      }
    }

    function ejecutar34() {
      if (contador34 == 0) {
        $("#tallaEST").css('color', 'red');
         $(document.getElementsByName("c34")).prop("checked",true);
        contador34++;
      } else {
        $("#tallaEST").css('color', 'blue');
         $(document.getElementsByName("c34")).prop("checked",false);
        contador34--;
      }
    }

    function ejecutar35() {
      if (contador35 == 0) {
        $("#total").css('color', 'red');
         $(document.getElementsByName("c35")).prop("checked",true);
        contador35++;
      } else {
        $("#total").css('color', 'blue');
         $(document.getElementsByName("c35")).prop("checked",false);
        contador35--;
      }
    }

    function ejecutar36() {
      if (contador36 == 0) {
        $("#estado").css('color', 'red');
         $(document.getElementsByName("c36")).prop("checked",true);
        contador36++;
      } else {
        $("#estado").css('color', 'blue');
         $(document.getElementsByName("c36")).prop("checked",false);
        contador36--;
      }
    }
    function ejecutar37() {
      if (contador37 == 0) {
        $("#precio").css('color', 'red');
        $(document.getElementsByName("c37")).prop("checked",true);
        contador37++;
      } else {
        $("#precio").css('color', 'blue');
        $(document.getElementsByName("c37")).prop("checked",false);
        contador37--;
      }
    }

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