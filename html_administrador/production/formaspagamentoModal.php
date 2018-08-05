<div class="modal fade" id="modalformaspagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="selFormasPagamento.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="nome" placeholder="Forma de pagamento" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea id="observacao" placeholder="Observação do(a) forma de pagamento" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup"></textarea>
                        <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>

                    </div>
                    <small>Nota: Formas de pagamentos que podem ser utilizadas no sistema.</small>
                </form>
            </div>

        </div>
    </div>
</div>