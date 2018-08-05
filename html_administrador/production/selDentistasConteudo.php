<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Dentista<small> usuário</small></h2>
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
                                <h4 class="panel-title fa fa-align-left"> Cadastrar dentista</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php include_once 'cadDentistasConteudo.php'; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of accordion cadastro -->
                    <!-- star of accordion lista -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title fa fa-align-left">   Lista de todos dentistas registrados no sistema.</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <table id="datatable-responsive" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th style="width:87px" >Ações</th>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Número Celular</th>
                                                <th>Data de Nasc</th>
                                                <th>Cargo</th>
                                                <th>Salário</th>
                                                <th>Cidade</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($dados); $i++) { ?>
                                                <tr>
                                                    <td> 
                                                        <button type="button" class="fa fa-search-plus" data-toggle="modal" data-target="#myModal<?= $dados[$i]['idDentista'] ?>"></button>
                                                        <button type="button" class="fa fa-magic" data-toggle="modal" data-target="#exampleModal" data-whateveriddentista="<?= $dados[$i]['idDentista'] ?>"
                                                                data-whatevernomedentista="<?= $dados[$i]['nomeDentista'] ?>"
                                                                data-whateversobrenomedentista="<?= $dados[$i]['sobrenomeDentista'] ?>"
                                                                data-whatevergenerodentista="<?= $dados[$i]['generoDentista'] ?>"
                                                                data-whateveremaildentista="<?= $dados[$i]['emailDentista'] ?>"
                                                                data-whateversenhadentista="<?= $dados[$i]['senhaDentista'] ?>"
                                                                data-whatevertel_celulardentista="<?= $dados[$i]['tel_celularDentista'] ?>"
                                                                data-whatevertel_fixodentista="<?= $dados[$i]['tel_fixoDentista'] ?>"
                                                                data-whateverlogradourodentista="<?= $dados[$i]['logradouroDentista'] ?>"
                                                                data-whatevernumero_logradourodentista="<?= $dados[$i]['numero_logradouroDentista'] ?>"
                                                                data-whatevercepdentista="<?= $dados[$i]['cepDentista'] ?>"
                                                                data-whatevercpfdentista="<?= $dados[$i]['cpfDentista'] ?>"
                                                                data-whateverrgdentista="<?= $dados[$i]['rgDentista'] ?>"
                                                                data-whatevergrau_escolardentista="<?= $dados[$i]['grau_escolarDentista'] ?>"
                                                                data-whatevercargodentista="<?= $dados[$i]['cargoDentista'] ?>"
                                                                data-whateverdt_nascimentodentista="<?= $dados[$i]['dt_nascimentoDentista'] ?>"
                                                                data-whateverprofissaodentista="<?= $dados[$i]['profissaoDentista'] ?>"
                                                                data-whatevercidadedentista="<?= $dados[$i]['cidadeDentista'] ?>"
                                                                data-whateverobsdentista="<?= $dados[$i]['obsDentista'] ?>"
                                                                data-whateversalariodentista="<?= $dados[$i]['salarioDentista'] ?>"
                                                                data-whateverstatusdentista="<?= $dados[$i]['statusDentista'] ?>"></button>

                                                        <button type="button" class="fa fa-times-circle" data-toggle="modal" data-target="#excluirModal" data-whateveriddentista="<?= $dados[$i]['idDentista'] ?>"></button>
                                                    </td>
                                                    <td><?= $dados[$i]['nomeDentista'] . ' ' . $dados[$i]['sobrenomeDentista'] ?></td>
                                                    <td><?= $dados[$i]['cpfDentista'] ?></td>
                                                    <td><?= $dados[$i]['tel_celularDentista'] ?></td>
                                                    <td><?= $dados[$i]['dt_nascimentoDentista'] ?></td>
                                                    <td><?= $dados[$i]['cargoDentista'] ?></td>
                                                    <td><?= $dados[$i]['salarioDentista'] ?></td>
                                                    <td><?= $dados[$i]['cidadeDentista'] ?></td>
                                                    <td><?= $dados[$i]['emailDentista'] ?></td>
                                                </tr>
                                                <!-- Modal INICIO  DETALHE-->
                                            <div class="modal fade" id="myModal<?= $dados[$i]['idDentista'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title text-center" id="myModalLabel"><label>Detalhes do cadastro</label></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><label>Nome: </label> <?= $dados[$i]['nomeDentista'] ?></p>
                                                            <p><label>Sobrenome: </label> <?= $dados[$i]['sobrenomeDentista'] ?></p>
                                                            <p><label>E-mail: </label> <?= $dados[$i]['emailDentista'] ?></p>
                                                            <p><label>Gênero: </label> <?= $dados[$i]['generoDentista'] == 0 ? 'Masculino' : 'Feminino' ?></p>
                                                            <p><label>Tel. celular:</label> <?= $dados[$i]['tel_celularDentista'] ?></p>
                                                            <p><label>Tel. fixo: </label> <?= $dados[$i]['tel_fixoDentista'] ?></p>
                                                            <p><label>Logradouro: </label> <?= $dados[$i]['logradouroDentista'] ?></p>
                                                            <p><label>Número do logradouro: </label> <?= $dados[$i]['numero_logradouroDentista'] ?></p>
                                                            <p><label>CEP: </label> <?= $dados[$i]['cepDentista'] ?></p>
                                                            <p><label>CPF: </label> <?= $dados[$i]['cpfDentista'] ?></p>
                                                            <p><label>RG: </label> <?= $dados[$i]['rgDentista'] ?></p>
                                                            <p><label>Grau escolar: </label> <?= $dados[$i]['grau_escolarDentista'] ?></p>
                                                            <p><label>Cargo: </label> <?= $dados[$i]['cargoDentista'] ?></p>
                                                            <p><label>Profissao: </label> <?= $dados[$i]['profissaoDentista'] ?></p>
                                                            <p><label>Data de nascimento: </label> <?= $dados[$i]['dt_nascimentoDentista'] ?></p>
                                                            <p><label>Cidade: </label> <?= $dados[$i]['cidadeDentista'] ?></p>
                                                            <p><label>Salário: </label> <?= $dados[$i]['salarioDentista'] ?></p>
                                                            <p><label>Observação: </label> <?= $dados[$i]['obsDentista'] ?></p>
                                                            <p><label>Status: </label> <?= $dados[$i]['statusDentista'] == 0 ? 'Ativo' : 'Inativo' ?></p>
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
                                        <form  method="post" action="selDentistas.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                                            <div>

                                                <input type="hidden" id="recipientidDentista" name="recipientidDentista">
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnomeDentista" name="recipientnomeDentista" placeholder="Nome" required="required">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientsobrenomeDentista" name="recipientsobrenomeDentista" placeholder="Sobrenome">
                                                <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">

                                                Masculino:
                                                <input type="radio" class="flat" name="genero" id="recipientgeneroMDentista" value="0" checked="" /> 
                                                Feminino:
                                                <input type="radio" class="flat" name="genero" id="recipientgeneroFDentista" value="1" checked="" />

                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientdt_nascimentoDentista" name="recipientdt_nascimentoDentista" placeholder="Data de Nascimento" required="required">
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="email" class="form-control has-feedback-left" id="recipientemailDentista" name="recipientemailDentista" placeholder="E-mail" required="required">
                                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="password" class="form-control has-feedback-left" id="recipientsenhaDentista" name="recipientsenhaDentista" placeholder="Senha para acesso do sistema" required="required">
                                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_celularDentista" name="recipienttel_celularDentista" placeholder="Telefone Celular" required="required">
                                                <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_fixoDentista" name="recipienttel_fixoDentista" placeholder="Telefone Fixo">
                                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientlogradouroDentista" name="recipientlogradouroDentista" placeholder="Logradouro" required="required">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnumero_logradouroDentista" name="recipientnumero_logradouroDentista" placeholder="Número do Logradouro">
                                                <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcepDentista" name="recipientcepDentista" placeholder="CEP">
                                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcidadeDentista" name="recipientcidadeDentista" placeholder="Cidade" required="required">
                                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcpfDentista" name="recipientcpfDentista" placeholder="CPF" required="required">
                                                <span class="fa fa-newspaper-o  form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientrgDentista" name="recipientrgDentista" placeholder="RG" required="required" >
                                                <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientgrau_escolarDentista" name="recipientgrau_escolarDentista" placeholder="Grau de escolaridade">
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientsalarioDentista" name="recipientsalarioDentista" placeholder="Salário">
                                                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientprofissaoDentista" name="recipientprofissaoDentista" placeholder="Profissão">
                                                <span class="fa fa-suitcase form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcargoDentista" name="recipientcargoDentista" placeholder="Cargo">
                                                <span class="fa fa-line-chart form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea placeholder="Observação do(a) dentista" class="fa-keyboard-o form-control has-feedback-left" id="recipientobsDentista" name="recipientobsDentista" data-parsley-trigger="keyup"></textarea>
                                                <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientstatusDentista" name="recipientstatusDentista"  placeholder="Status" required="required">
                                                <span class="fa fa-child form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" name="btnEditar" value="btnEditar">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success" id="btnEditar" name="btnEditar" >Editar</button>
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
                                        <form  method="POST" action="selDentistas.php" class="form-horizontal form-label-center input_mask" autocomplete="off">
                                            <div>
                                                <input type="hidden" id="recipientidDentista" name="recipientidDentista">
                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" name="btnExcluir" value="btnExcluir">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success" id="btnExcluir" name="btnExcluir" >Apagar</button>
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