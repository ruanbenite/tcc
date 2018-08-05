<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Atendente<small> usuário</small></h2>
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
                                <h4 class="panel-title fa fa-align-left"> Cadastrar atendente</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php include_once 'cadAtendentesConteudo.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of accordion cadastro -->
                    <!-- star of accordion lista -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title fa fa-align-left"> Lista de todos atentendes registrados no sistema.</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <table id="datatable-responsive" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 87px;">Ações</th>
                                                <th>Nome</th>
                                                <th>Gênero</th>
                                                <th>CPF</th>
                                                <th style="width: 80px;">Número Cel.</th>
                                                <th>Data Nascimento</th>
                                                <th>Salário</th>
                                                <th>E-mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($dados); $i++) { ?>
                                                <tr>
                                                    <td> 
                                                        <button type="button" class="fa fa-search-plus" data-toggle="modal" data-target="#myModal<?= $dados[$i]['idAtendente'] ?>"></button>
                                                        <button type="button" class="fa fa-magic" data-toggle="modal" data-target="#exampleModal" data-whateveridatendente="<?= $dados[$i]['idAtendente'] ?>"
                                                                data-whatevernomeatendente="<?= $dados[$i]['nomeAtendente'] ?>"
                                                                data-whateversobrenomeatendente="<?= $dados[$i]['sobrenomeAtendente'] ?>"
                                                                data-whatevergeneroatendente="<?= $dados[$i]['generoAtendente'] ?>"
                                                                data-whateveremailatendente="<?= $dados[$i]['emailAtendente'] ?>"
                                                                data-whateversenhaatendente="<?= $dados[$i]['senhaAtendente'] ?>"
                                                                data-whatevertel_celularatendente="<?= $dados[$i]['tel_celularAtendente'] ?>"
                                                                data-whatevertel_fixoatendente="<?= $dados[$i]['tel_fixoAtendente'] ?>"
                                                                data-whateverlogradouroatendente="<?= $dados[$i]['logradouroAtendente'] ?>"
                                                                data-whatevernumero_logradouroatendente="<?= $dados[$i]['numero_logradouroAtendente'] ?>"
                                                                data-whatevercepatendente="<?= $dados[$i]['cepAtendente'] ?>"
                                                                data-whatevercpfatendente="<?= $dados[$i]['cpfAtendente'] ?>"
                                                                data-whateverrgatendente="<?= $dados[$i]['rgAtendente'] ?>"
                                                                data-whatevergrau_escolaratendente="<?= $dados[$i]['grau_escolarAtendente'] ?>"
                                                                data-whateverdt_contratacaoatendente="<?= $dados[$i]['dt_contratacaoAtendente'] ?>"
                                                                data-whateverstatusatendente="<?= $dados[$i]['statusAtendente'] ?>"
                                                                data-whateverdt_nascimentoatendente="<?= $dados[$i]['dt_nascimentoAtendente'] ?>"
                                                                data-whatevercidadeatendente="<?= $dados[$i]['cidadeAtendente'] ?>"
                                                                data-whateverobsatendente="<?= $dados[$i]['obsAtendente'] ?>"
                                                                data-whateversalarioatendente="<?= $dados[$i]['salarioAtendente'] ?>"></button>

                                                        <button type="button" class="fa fa-times-circle" data-toggle="modal" data-target="#excluirModal" data-whateveridatendente="<?= $dados[$i]['idAtendente'] ?>"></button>
                                                    </td>
                                                    <td><?= $dados[$i]['nomeAtendente'] . ' ' . $dados[$i]['sobrenomeAtendente'] ?></td>
                                                    <td><?= $dados[$i]['generoAtendente'] == 0 ? 'Masculino' : 'Feminino' ?></td>
                                                    <td><?= $dados[$i]['cpfAtendente'] ?></td>
                                                    <td><?= $dados[$i]['tel_celularAtendente'] ?></td>
                                                    <td><?= $dados[$i]['dt_nascimentoAtendente'] ?></td>
                                                    <td><?= $dados[$i]['salarioAtendente'] ?></td>
                                                    <td><?= $dados[$i]['emailAtendente'] ?></td>
                                                </tr>
                                                <!-- Modal INICIO  DETALHE-->
                                            <div class="modal fade" id="myModal<?= $dados[$i]['idAtendente'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title text-center" id="myModalLabel"><label>Detalhes do cadastro</label></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><label>Nome: </label> <?= $dados[$i]['nomeAtendente'] ?></p>
                                                            <p><label>Sobrenome: </label> <?= $dados[$i]['sobrenomeAtendente'] ?></p>
                                                            <p><label>E-mail: </label> <?= $dados[$i]['emailAtendente'] ?></p>
                                                            <p><label>Gênero: </label> <?= $dados[$i]['generoAtendente'] == 0 ? 'Masculino' : 'Feminino' ?></p>
                                                            <p><label>Tel. celular:</label> <?= $dados[$i]['tel_celularAtendente'] ?></p>
                                                            <p><label>Tel. fixo: </label> <?= $dados[$i]['tel_fixoAtendente'] ?></p>
                                                            <p><label>Logradouro: </label> <?= $dados[$i]['logradouroAtendente'] ?></p>
                                                            <p><label>Número do logradouro: </label> <?= $dados[$i]['numero_logradouroAtendente'] ?></p>
                                                            <p><label>CEP: </label> <?= $dados[$i]['cepAtendente'] ?></p>
                                                            <p><label>CPF: </label> <?= $dados[$i]['cpfAtendente'] ?></p>
                                                            <p><label>RG: </label> <?= $dados[$i]['rgAtendente'] ?></p>
                                                            <p><label>Grau escolar: </label> <?= $dados[$i]['grau_escolarAtendente'] ?></p>
                                                            <p><label>Data de contratação: </label> <?= $dados[$i]['dt_contratacaoAtendente'] ?></p>
                                                            <p><label>Status: </label> <?= $dados[$i]['statusAtendente'] == 0 ? 'Ativo' : 'Inativo' ?></p>
                                                            <p><label>Data de nascimento: </label> <?= $dados[$i]['dt_nascimentoAtendente'] ?></p>
                                                            <p><label>Cidade: </label> <?= $dados[$i]['cidadeAtendente'] ?></p>
                                                            <p><label>Salário: </label> <?= $dados[$i]['salarioAtendente'] ?></p>
                                                            <p><label>Observação: </label> <?= $dados[$i]['obsAtendente'] ?></p>
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
                                        <form  method="POST" action="selAtendentes.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                                            <div>

                                                <input type="hidden" id="recipientidAtendente" name="recipientidAtendente">
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnomeAtendente" name="recipientnomeAtendente" placeholder="Nome" required="required">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientsobrenomeAtendente" name="recipientsobrenomeAtendente" placeholder="Sobrenome">
                                                <span class="fa fa-group form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                Masculino:
                                                <input type="radio" name="genero" id="recipientgeneroMAtendente" value="M" /> 
                                                Feminino:
                                                <input type="radio" name="genero" id="recipientgeneroFAtendente" value="F" />
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientdt_nascimentoAtendente" name="recipientdt_nascimentoAtendente" placeholder="Data de Nascimento" required="required" data-inputmask="'mask': '99/99/9999'" >
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="email" class="form-control has-feedback-left" id="recipientemailAtendente" name="recipientemailAtendente" placeholder="E-mail" required="required">
                                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="password" class="form-control has-feedback-left" id="recipientsenhaAtendente" name="recipientsenhaAtendente" placeholder="Senha para acesso do sistema" required="required">
                                                <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_celularAtendente" name="recipienttel_celularAtendente" placeholder="Telefone Celular" required="required" data-inputmask="'mask': '(99)99999-9999'">
                                                <span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipienttel_fixoAtendente" name="recipienttel_fixoAtendente" placeholder="Telefone Fixo" data-inputmask="'mask': '(99)9999-9999'">
                                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientlogradouroAtendente" name="recipientlogradouroAtendente" placeholder="Logradouro" required="required">
                                                <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientnumero_logradouroAtendente" name="recipientnumero_logradouroAtendente" placeholder="Número do Logradouro">
                                                <span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcepAtendente" name="recipientcepAtendente" placeholder="CEP" data-inputmask="'mask': '99.999-999'">
                                                <span class="fa fa-location-arrow form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcidadeAtendente" name="recipientcidadeAtendente" placeholder="Cidade" required="required">
                                                <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientcpfAtendente" name="recipientcpfAtendente" placeholder="CPF" required="required" data-inputmask="'mask': '999.999.999-99'">
                                                <span class="fa fa-newspaper-o  form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientrgAtendente" name="recipientrgAtendente" placeholder="RG" required="required" data-inputmask="'mask': '99.999.999-9'">
                                                <span class="fa fa-newspaper-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientgrau_escolarAtendente" name="recipientgrau_escolarAtendente" placeholder="Grau de escolaridade">
                                                <span class="fa fa-graduation-cap form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientsalarioAtendente" name="recipientsalarioAtendente" placeholder="Salário">
                                                <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientdt_contratacaoAtendente" name="recipientdt_contratacaoAtendente"  placeholder="Data de contratação" required="required" data-inputmask="'mask': '99/99/9999'" >
                                                <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea placeholder="Observação do(a) atendente" class="fa-keyboard-o form-control has-feedback-left" id="recipientobsAtendente" name="recipientobsAtendente" data-parsley-trigger="keyup"></textarea>
                                                <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientstatusAtendente" name="recipientstatusAtendente"  placeholder="Status" required="required">
                                                <span class="fa fa-child form-control-feedback left" aria-hidden="true"></span>
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
                                        <form  method="POST" action="selAtendentes.php" class="form-horizontal form-label-center input_mask" autocomplete="off">
                                            <div>
                                                <input type="hidden" id="recipientidAtendente" name="recipientidAtendente">
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