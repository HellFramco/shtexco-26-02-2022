<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
        $('#example thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#example thead');
            $('.dropdown-menu').on('click', function(e) {
            e.stopPropagation();
            
        });

        $('#example thead tr:eq(1) th').each( function (i) {
            var title = $(this).text(); //es el nombre de la columna
            $(this).html( '<input type="text" placeholder="'+title+'" />' );

            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } ); 

        $("#example").append(
        $('<tfoot/>').append( $("#example thead tr.filters").clone() )
      );

      
      $('#example tfoot tr:eq(0) th').each( function (i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html( '<input type="text" placeholder="'+title+'" />' );

          $( 'input', this ).on( 'keyup change', function () {
              if ( table.column(i).search() !== this.value ) {
                  table
                    .column(i)
                    .search( this.value )
                    .draw();
              }
          } );
        } );
    

        var table = $('#example').DataTable({
        serverSide: true,
        processing: true,
        sAjaxSource: "ServerSide/serversideVentas.php",
        scrollY: "500px",
        scrollX: true,
        scrollCollapse: true,
        fixedColumns: true,
        orderCellsTop: true,
        fixedHeader: {
            header: true,
            footer: true
        },
        columnDefs: [ {
            targets: 0,
            visible: false
            },{
            targets: 1,
            render: function (data, type, row) {

              if(row[1] == 1){

                return '<a data-toggle="modal" data-id="'+row[0]+'" href="#myModal"><img src="../imagenes/iconos/imagen.png" border="0" /></a>';

              }else{

                return '<p>No tiene imagen</p>'

              }
                //cosole.log(row);
            }

        }],
          language: {
            url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
          }
      });

        //filtros de busqueda de datatable



        var dato = document.getElementById("estado_venta").value;



        if (dato == "APROBO CLIENTE") {
            document.getElementById("bt_enviar").disabled = true;
            document.getElementById("texto_alerta").style.display = "block";

        } else if (dato == "CANCELADO") {

            document.getElementById("bt_enviar").disabled = true;
            document.getElementById("cancelar_pedido").disabled = true;
            document.getElementById("bt_aprobar_cartera").disabled = true;


            // document.getElementById("texto_alerta_cancelado").style.display = "block";
        }

    });
</script>

<!-- Custom fonts for this template -->
<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../librerias/css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="../librerias/css/loading.css">


<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../librerias/js/sb-admin-2.min.js"></script>


<!-- Page level plugins -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="../librerias/js/demo/datatables-demo.js"></script>
<script type="text/javascript">
        $(document).ready(function(e) {
            // Cuando le d??s click muestra #content
            $('th.text-center.sorting.sorting_asc').click(function() {
                $("#content").toggleClass("hide");
            });

            // Simular click
            $('th.text-center.sorting.sorting_asc').click();
            
            $('th.sorting.sorting_ascsc').click(function() {
                $("#content").toggleClass("hide");
            });

            // Simular click
            $('th.sorting.sorting_asc').click();
            
            
        });
    </script>