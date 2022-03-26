
<script type="text/javascript">
    $(document).ready(function() {
        $('#example1 thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#example1 thead');

        var table = $('#example_tshirt').DataTable({
            //Header Filter
            orderCellsTop: true,
            fixedHeader: true,
            initComplete: function() {
                var api = this.api();

                // For each column
                api
                    .columns([])
                    .eq(0)
                    .each(function(colIdx) {
                        // Set the header cell to contain the input element
                        var cell = $('.filters th').eq(
                            $(api.column(colIdx).header()).index()
                        );
                        var title = $(cell).text();
                        $(cell).html('<input type="text" placeholder="' + title + '" />');

                        // On every keypress in this input
                        $(
                                'input',
                                $('.filters th').eq($(api.column(colIdx).header()).index())
                            )
                            .off('keyup change')
                            .on('keyup change', function(e) {
                                e.stopPropagation();

                                // Get the search value
                                $(this).attr('title', $(this).val());
                                var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                var cursorPosition = this.selectionStart;
                                // Search the column for that value
                                api
                                    .column(colIdx)
                                    .search(
                                        this.value != '' ?
                                        regexr.replace('{search}', '(((' + this.value + ')))') :
                                        '',
                                        this.value != '',
                                        this.value == ''
                                    )
                                    .draw();

                                $(this)
                                    .focus()[0]
                                    .setSelectionRange(cursorPosition, cursorPosition);
                            });
                    });
                //Footer Filter

                this.api().columns([0]).every(function() {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        var val = $('<div/>').html(d).text();
                        select.append('<option value="' + val + '">' + val + '</option>');
                    });
                });

            },

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

