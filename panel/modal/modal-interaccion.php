<!-- Modal registro de interacción con el cliente -->
<div class="modal fade" id="modalInteraccion" role="dialog" style="z-index: 5000; margin-top: 100px;">
    <div class="modal-dialog modal-lg" style="width: 60%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title">
                    <h4>Registro interacción con el cliente
                        <small></small>
                    </h4>
                </div>
            </div>
            <div class="modal-body">
                <!--<form method="post" action="script/insertar-rubro-recurso.php">-->
                    <div class="row form-group center-block">                           
                        <div class="col-md-6">
                            <label>Cliente:</label> 
                            <input type="text" id="cliente" name="cliente" readonly class=" form-control" required="">
                            <input type="text" id="cod_cliente" name="cod_cliente" readonly class=" form-control" required="">
                        </div> 
                        <div class="col-md-6"> 
                            <label>Asesor:</label> 
                            <input type="text" id="usuario" name="usuario" readonly class=" form-control" required="">
                            <input type="text" id="cod_usuario" name="cod_usuario" readonly class=" form-control" required="">
                        </div>
                    </div>
                    <br/>
                    <div class="row form-group center-block"> 
                        <div class="col-md-6"> 
                            <label>Fecha registro:</label>
                            <input  type="text" id="registro" name="registro" readonly class=" form-control" required="">
                        </div>
                        <div class="col-md-6"> 
                            <label>Próxima fecha contacto:</label> 
                            <input  type="date" id="contacto" name="contacto" class=" form-control" required="">
                        </div>
                    </div>
                    <div class="row form-group center-block"> 
                        <div class="col-md-12"> 
                            <label>Observaciones:</label> 
                            <input  type="text" id="observacion" name="observacion" class=" form-control" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" id="guardarnuevo" name="guardarnuevo">
                            Guardar <i class=" fa fa-check-circle fa-sm" style=" margin-left: 4px;"></i>
                        </button>
                        <button class="btn btn-danger" data-dismiss="modal" >
                            Cancelar<i class=" fa fa-times-circle fa-sm" style=" margin-left: 4px;"></i>
                        </button>
                    </div> 
                <!--</form>-->   
            </div> 
        </div>
    </div>
</div>