<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cliente</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start accordion cadastro -->
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title fa fa-align-left"> Cadastrar cliente</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php include_once 'cadClientesConteudo.php'; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of accordion cadastro -->
                    <!-- star of accordion lista -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title fa fa-align-left">   Lista de todos clientes registrados no sistema.</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:87px;">Ações</th>
                                                <th>Nome</th>
                                                <th style="width:85px;">CPF</th>
                                                <th style="width:80px;">Número Cel.</th>
                                                <th style="width:110px;">Data Nascimento</th>
                                                <th>Cidade</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($dados); $i++) { ?>
                                                <tr>
                                                    <td> 
                                                        <button type="button" class="fa fa-search-plus" data-toggle="modal" data-target="#myModal<?= $dados[$i]['idCliente'] ?>"></button>
                                                        <button type="button" class="fa fa-magic" data-toggle="modal" data-target="#exampleModal" data-whateveridcliente="<?= $dados[$i]['idCliente'] ?>"
                                                                data-whatevernomecliente="<?= $dados[$i]['nomeCliente'] ?>"
                                                                data-whateversobrenomecliente="<?= $dados[$i]['sobrenomeCliente'] ?>"
                                                                data-whatevergenerocliente="<?= $dados[$i]['generoCliente'] ?>"
                                                                data-whateveremailcliente="<?= $dados[$i]['emailCliente'] ?>"
                                                                data-whateversenhacliente="<?= $dados[$i]['senhaCliente'] ?>"
                                                                data-whatevertel_celularcliente="<?= $dados[$i]['tel_celularCliente'] ?>"
                                                                data-whatevertel_fixocliente="<?= $dados[$i]['tel_fixoCliente'] ?>"
                                                                data-whateverlogradourocliente="<?= $dados[$i]['logradouroCliente'] ?>"
                                                                data-whatevernumero_logradourocliente="<?= $dados[$i]['numero_logradouroCliente'] ?>"
                                                                data-whatevercepcliente="<?= $dados[$i]['cepCliente'] ?>"
                                                                data-whatevercpfcliente="<?= $dados[$i]['cpfCliente'] ?>"
                                                                data-whateverrgcliente="<?= $dados[$i]['rgCliente'] ?>"
                                                                data-whatevergrau_escolarcliente="<?= $dados[$i]['grau_escolarCliente'] ?>"
                                                                data-whateverdt_nascimentocliente="<?= $dados[$i]['dt_nascimentoCliente'] ?>"
                                                                data-whateverprofissaocliente="<?= $dados[$i]['profissaoCliente'] ?>"
                                                                data-whateverindicacaocliente="<?= $dados[$i]['indicacaoCliente'] ?>"
                                                                data-whatevercidadecliente="<?= $dados[$i]['cidadeCliente'] ?>"
                                                                data-whateverobscliente="<?= $dados[$i]['obsCliente'] ?>"></button>
                                                        <button type="button" class="fa fa-times-circle" data-toggle="modal" data-target="#excluirModal" data-whateveridcliente="<?= $dados[$i]['idCliente'] ?>"></button>
                                                    </td>
                                                    <td><?= $dados[$i]['nomeCliente'] . ' ' . $dados[$i]['sobrenomeCliente'] ?></td>
                                                    <td><?= $dados[$i]['cpfCliente'] ?></td>
                                                    <td><?= $dados[$i]['tel_celularCliente'] ?></td>
                                                    <td><?= $dados[$i]['dt_nascimentoCliente'] ?></td>
                                                    <td><?= $dados[$i]['cidadeCliente'] ?></td>
                                                    <td><?= $dados[$i]['emailCliente'] ?></td>
                                                </tr>
                                                <!-- Modal INICIO  DETALHE-->
                                            <div class="modal fade" id="myModal<?= $dados[$i]['idCliente'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title text-center" id="myModalLabel"><label>Detalhes do cadastro</label></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><label>Nome: </label> <?= $dados[$i]['nomeCliente'] ?></p>
                                                            <p><label>Sobrenome: </label> <?= $dados[$i]['sobrenomeCliente'] ?></p>
                                                            <p><label>E-mail: </label> <?= $dados[$i]['emailCliente'] ?></p>
                                                            <p><label>Gênero: </label> <?= $dados[$i]['generoCliente'] == 0 ? 'Masculino' : 'Feminino' ?></p>
                                                            <p><label>Tel. celular:</label> <?= $dados[$i]['tel_celularCliente'] ?></p>
                                                            <p><label>Tel. fixo: </label> <?= $dados[$i]['tel_fixoCliente'] ?></p>
                                                            <p><label>Logradouro: </label> <?= $dados[$i]['logradouroCliente'] ?></p>
                                                            <p><label>Número do logradouro: </label> <?= $dados[$i]['numero_logradouroCliente'] ?></p>
                                                            <p><label>CEP: </label> <?= $dados[$i]['cepCliente'] ?></p>
                                                            <p><label>CPF: </label> <?= $dados[$i]['cpfCliente'] ?></p>
                                                            <p><label>RG: </label> <?= $dados[$i]['rgCliente'] ?></p>
                                                            <p><label>Grau escolar: </label> <?= $dados[$i]['grau_escolarCliente'] ?></p>
                                                            <p><label>Data de nascimento: </label> <?= $dados[$i]['dt_nascimentoCliente'] ?></p>
                                                            <p><label>Cidade: </label> <?= $dados[$i]['cidadeCliente'] ?></p>
                                                            <p><label>Profissão: </label> <?= $dados[$i]['profissaoCliente'] ?></p>
                                                            <p><label>Indicação: </label> <?= $dados[$i]['indicacaoCliente'] ?></p>
                                                            <p><label>Observação: </label> <?= $dados[$i]['obsCliente'] ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- modal para editar -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center" id="exampleModalLabel">Editar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="POST" action="selclientes.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                                            <div>

                                                <input type="hidden" id="recipientidCliente" name="recipientidCliente">
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnomeCliente" name="recipientnomeCliente" placeholder="Nome" required="required">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientsobrenomeCliente" name="recipientsobrenomeCliente" placeholder="Sobrenome">
                                                <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">

                                                Masculino:
                                                <input type="radio" name="genero" id="recipientgeneroMCliente" value="0"/> 
                                                Feminino:
                                                <input type="radio" name="genero" id="recipientgeneroFCliente" value="1"/>

                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientdt_nascimentoCliente" name="recipientdt_nascimentoCliente" placeholder="Data de Nascimento" required="required" data-inputmask="'mask': '99/99/9999'">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="email" class="form-control has-feedback-left" id="recipientemailCliente" name="recipientemailCliente" placeholder="E-mail" required="required">
                                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="password" class="form-control has-feedback-left" id="recipientsenhaCliente" name="recipientsenhaCliente" placeholder="Senha para acesso do sistema" required="required">
                                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_celularCliente" name="recipienttel_celularCliente" placeholder="Telefone Celular" required="required" data-inputmask="'mask': '(99)99999-9999'">
                                                <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_fixoCliente" name="recipienttel_fixoCliente" placeholder="Telefone Fixo" data-inputmask="'mask': '(99)9999-9999'">
                                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientlogradouroCliente" name="recipientlogradouroCliente" placeholder="Logradouro" required="required">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnumero_logradouroCliente" name="recipientnumero_logradouroCliente" placeholder="Número do Logradouro">
                                                <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcepCliente" name="recipientcepCliente" placeholder="CEP" data-inputmask="'mask': '99.999-999'">
                                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcidadeCliente" name="recipientcidadeCliente" placeholder="Cidade" required="required">
                                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcpfCliente" name="recipientcpfCliente" placeholder="CPF" required="required" data-inputmask="'mask': '999.999.999-99'">
                                                <span class="fa fa-newspaper-o  form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientrgCliente" name="recipientrgCliente" placeholder="RG" required="required" data-inputmask="'mask': '99.999.999-9'">
                                                <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientgrau_escolarCliente" name="recipientgrau_escolarCliente" placeholder="Grau de escolaridade">
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientprofissaoCliente" name="recipientprofissaoCliente" placeholder="Profissão">
                                                <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientindicacaoCliente" name="recipientindicacaoCliente" placeholder="Houve indicação">
                                                <span class="fa fa-thumbs-up form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea placeholder="Observação do(a) cliente" class="fa-keyboard-o form-control has-feedback-left" id="recipientobsCliente" name="recipientobsCliente" data-parsley-trigger="keyup"></textarea>
                                                <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success" id="btnEditar" name="btnEditar">Editar</button>
                                            </div>

                                            <small>Nota: O e-mail é usado para acessar o sistema</small>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- modal para Excluir -->
                        <div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center" id="exampleModalLabel">New message</h4>
                                    </div>
                                    <div class="modal-body text-center">
                                        <form  method="POST" action="selclientes.php" class="form-horizontal form-label-center input_mask" autocomplete="off">
                                            <div>
                                                <input type="hidden" id="recipientidCliente" name="recipientidCliente">
                                            </div>

                                            <div class="form-group">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success" id="btnExcluir" name="btnExcluir">Apagar</button>
                                            </div>

                                            <small>Nota: O e-mail é usado para acessar o sistema</small>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of accordion lista -->
                </div>
            </div>
        </div>

    </div>
</div>