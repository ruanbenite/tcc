<div class="modal fade" id="modaltiposatendimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="selTiposAtendimento.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="tipoatendimento" placeholder="Tipo de atendimento" required="required">
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea id="observacao" placeholder="Observação do tipo de atendimento" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup"></textarea>
                        <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success" name="btnEditar">Salvar</button>
                        </div>
                    </div>
                    <small>Nota: Tipo de atendimento são disponibilizado para o dentista classificar qual o procedimento ele esta realizando.</small>
                </form>
            </div>

        </div>
    </div>
</div>