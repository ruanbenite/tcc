<div class="modal fade" id="modalatendentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Editar cadastro</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="POST" action="selAtendentes.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                    <div>
                        <input type="text" id="identificador" name="identificador">
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="nomeModal" name="nomeModal" placeholder="Nome" required="required">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="sobrenome" placeholder="Sobrenome">
                        <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <span class="checkgenero">
                            Masculino:
                            <input type="radio" class="flat" name="gender" id="generoM" value="M" checked="" required /> 
                            Feminino:
                            <input type="radio" class="flat" name="gender" id="generoF" value="F" />
                        </span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="datanascimento"  placeholder="Data de Nascimento" required="required">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="email" placeholder="E-mail" required="required">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="password" class="form-control has-feedback-left" id="senha" placeholder="Senha para acesso do sistema" required="required">
                        <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="telefonecelular" placeholder="Telefone Celular" required="required">
                        <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="telefonefixo" placeholder="Telefone Fixo">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="logradouro" placeholder="Logradouro" required="required">
                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="numerologradouro" placeholder="Número do Logradouro">
                        <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="cep" placeholder="CEP">
                        <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="cidade" placeholder="Cidade" required="required">
                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="cpf" placeholder="CPF" required="required">
                        <span class="fa fa-newspaper-o  form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="rg" placeholder="RG" required="required" >
                        <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="grauescolaridade" placeholder="Grau de escolaridade">
                        <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="salario" placeholder="Salário">
                        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="datacontratacao"  placeholder="Data de contratação" required="required">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <textarea id="message" placeholder="Observação do(a) atendente" class="fa-keyboard-o form-control has-feedback-left" name="observacao" data-parsley-trigger="keyup"></textarea>
                        <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>

                    <small>Nota: O e-mail é usado para acessar o sistema</small>
                </form>

            </div>

        </div>
    </div>
</div>