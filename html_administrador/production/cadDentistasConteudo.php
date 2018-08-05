
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

        <div class="x_content">
            <br />
            <form  method="POST" action="selDentistas.php" class="form-horizontal form-label-left input_mask">
                <div class="col-md-3 col-sm-3 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="nome" name="nome" placeholder="Nome" required="required" autocomplete="off">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required="required"  autocomplete="off">
                    <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <span class="checkgenero">
                        Masculino:
                        <input type="radio" class="flat" name="genero" id="generoM" value="M" checked="" required /> 
                        Feminino:
                        <input type="radio" class="flat" name="genero" id="generoF" value="F" />
                    </span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="dtnascimento" name="dtnascimento" placeholder="Data de Nascimento" required="required" autocomplete="off">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 form-group has-feedback">
                    <input type="email" class="form-control has-feedback-left" id="email" name="email" placeholder="E-mail" required="required" autocomplete="off">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="password" class="form-control has-feedback-left" id="senha" name="senha" placeholder="Senha para acesso do sistema" required="required" autocomplete="off">
                    <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="celular" name="celular" placeholder="Telefone Celular" required="required" autocomplete="off">
                    <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="fixo" name="fixo" placeholder="Telefone Fixo" autocomplete="off">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="logradouro" name="logradouro" placeholder="Logradouro" required="required" autocomplete="off">
                    <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="numlogradouro" name="numlogradouro" placeholder="Número do Logradouro" autocomplete="off">
                    <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="cep" name="cep" placeholder="CEP" autocomplete="off">
                    <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="cidade" name="cidade" placeholder="Cidade" required="required" autocomplete="off">
                    <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="cpf" name="cpf" placeholder="CPF" required="required" autocomplete="off">
                    <span class="fa fa-newspaper-o  form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="rg" name="rg" placeholder="RG" required="required" autocomplete="off">
                    <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="grauescolaridade" name="grauescolaridade" placeholder="Grau de escolaridade" autocomplete="off">
                    <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="salario" name="salario" placeholder="Salário" autocomplete="off">
                    <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="profissao" name="profissao" placeholder="Profissão">
                    <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="cargo" name="cargo" placeholder="Cargo">
                    <span class="fa fa-line-chart form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <textarea id="observacao" placeholder="Observação do(a) atendente" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup" autocomplete="off"></textarea>
                    <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <input type="hidden" name="btnSalvar" value="btnSalvar">
                        <button class="btn btn-primary" type="reset">Resetar</button>
                        <button type="submit" class="btn btn-success" name="btnSalvar" value="btnSalvar" >Salvar</button>
                    </div>
                </div>
                <small>Nota: O e-mail é usado para acessar o sistema</small>
            </form>
        </div>

    </div>

</div>