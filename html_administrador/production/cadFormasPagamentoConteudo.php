<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

        <div class="x_content">
            <br />
            <form method="POST" action="selFormasPagamento.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="nome" name="nome" placeholder="Forma de pagamento" required="required">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <textarea id="observacao" placeholder="Observação do(a) forma de pagamento" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup"></textarea>
                    <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <input type="hidden" name="btnSalvar" value="btnSalvar"  />
                        <button class="btn btn-primary" type="reset">Resetar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
                <small>Nota: Formas de pagamentos que podem ser utilizadas no sistema.</small>
            </form>
        </div>

    </div>

</div>