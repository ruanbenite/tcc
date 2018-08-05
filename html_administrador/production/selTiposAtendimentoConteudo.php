<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tipos de atendimento</h2>
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
                                <h4 class="panel-title fa fa-align-left"> Cadastrar tipos de atendimento</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <?php include_once 'cadTiposAtendimentoConteudo.php'; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of accordion cadastro -->
                    <!-- star of accordion lista -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title fa fa-align-left"> Lista de todos tipos de atendimento registrados no sistema.</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <table id="datatable-responsive" class="table table-striped table-bordered"> <thead>
                                            <tr>
                                                <th style="width:87px;">Ações</th>
                                                <th>Tipos de atendimento</th>
                                                <th style="width:50px;">Status</th>
                                                <th>Observação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < count($dados); $i++) { ?>

                                                <tr>
                                                    <td> 
                                                        <button type="button" class="fa fa-search-plus" data-toggle="modal" data-target="#myModal<?= $dados[$i]['idtipoAtendimento'] ?>"></button>
                                                        <button type="button" class="fa fa-magic" data-toggle="modal" data-target="#exampleModal" data-whateveridtipoatendimento="<?= $dados[$i]['idtipoAtendimento'] ?>"
                                                                data-whatevernometipoatendimento="<?= $dados[$i]['nometipoAtendimento'] ?>"
                                                                data-whateverstatustipoatendimento="<?= $dados[$i]['statustipoAtendimento'] ?>"
                                                                data-whateverobstipoatendimento="<?= $dados[$i]['obstipoAtendimento'] ?>"></button>
                                                        <button type="button" class="fa fa-times-circle" data-toggle="modal" data-target="#excluirModal" <button type="button" class="fa fa-times-circle" data-toggle="modal" data-target="#excluirModal" data-whateveridtipoatendimento="<?= $dados[$i]['idtipoAtendimento'] ?>"></button>
                                                    </td>
                                                    <td><?= $dados[$i]['nometipoAtendimento'] == '' ? '' : $dados[$i]['nometipoAtendimento'] ?></td>
                                                    <td><?= $dados[$i]['statustipoAtendimento'] == 0 ? 'Ativo' : 'Inativo' ?></td>
                                                    <td><?= $dados[$i]['obstipoAtendimento'] == '' ? '' : $dados[$i]['obstipoAtendimento'] ?></td>
                                                </tr>
                                                <!-- Modal INICIO  DETALHE-->
                                            <div class="modal fade" id="myModal<?= $dados[$i]['idtipoAtendimento'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title text-center" id="myModalLabel"><label>Detalhes do cadastro</label></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><label>Tipo atendimento: </label> <?= $dados[$i]['nometipoAtendimento'] ?></p>
                                                            <p><label>Status: </label> <?= $dados[$i]['statustipoAtendimento'] == 0 ? 'Ativo' : 'Inativo'   ?></p>
                                                            <p><label>Observação: </label> <?= $dados[$i]['obstipoAtendimento'] ?></p>
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
                                        <form  method="POST" action="selTiposAtendimento.php" class="form-horizontal form-label-left input_mask" autocomplete="off">
                                            <div>
                                                <input type="hidden" id="recipientidTipoatendimento" name="recipientidTipoatendimento">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="nometipo" name="nometipo" placeholder="Nome" required="required">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="recipientstatusTipoatendimento" name="recipientstatusTipoatendimento"  placeholder="Status" required="required">
                                                <span class="fa fa-child form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                                <textarea placeholder="Observação do(a) atendente" class="fa-keyboard-o form-control has-feedback-left" id="recipientobsTipoatendimento" name="recipientobsTipoatendimento" data-parsley-trigger="keyup"></textarea>
                                                <span class="fa fa-keyboard-o form-control-feedback left" aria-hidden="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="btnEditar" value="btnEditar">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success" id="btnEditar" name="btnEditar">Editar</button>
                                            </div>
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
                                        <form  method="POST" action="selTiposAtendimento.php" class="form-horizontal form-label-center input_mask" autocomplete="off">
                                            <div>
                                                <input type="hidden" id="id" name="id">
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success"  name="btnExcluir">Apagar</button>
                                            </div>

                                            <small>Nota: Dados apagados não podem ser recuperados</small>
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