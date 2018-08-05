<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

        <div class="x_content">
            <br />
            <form method="POST" action="selTiposAtendimento.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="tipoatendimento" name="tipoatendimento" placeholder="Tipo de atendimento" required="required">
                    <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <textarea id="observacao" placeholder="Observação do tipo de atendimento" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup"></textarea>
                    <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <button class="btn btn-primary" type="reset">Resetar</button>
                        <button type="submit" class="btn btn-success" name="btnSalvar">Salvar</button>
                    </div>
                </div>
                <small>Nota: Tipo de atendimento são disponibilizado para o dentista classificar qual o procedimento ele esta realizando.</small>
            </form>
        </div>

    </div>

</div>