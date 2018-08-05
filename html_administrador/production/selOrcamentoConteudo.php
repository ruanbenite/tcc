<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Orçamento</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <!-- start accordion cadastro 
                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="panel-title fa fa-align-left"> Cadastrar orçamento</h4>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                    <?php include_once 'cadOrcamentoConteudo.php'; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                     end of accordion cadastro -->
                    <!-- star of accordion lista -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                        <div class="panel">
                            <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="panel-title fa fa-align-left"> Lista de todos orçamentos registrados no sistema.</h4>
                            </a>
                            <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">

                                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Celular</th>
                                                <th>Telefone</th>
                                                <th>Data e hora agendado</th>
                                                <th>Dentista</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Nixon</td>
                                                <td>Nixon@hotmail.com</td>
                                                <td>(43) 9 9933-3060</td>
                                                <td>(43)3551-2665</td>
                                                <td>29/05/2018 12:00:00</td>
                                                <td>RBsync</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>benite</td>
                                                <td>benite@hotmail.com</td>
                                                <td>(43) 9 9933-3060</td>
                                                <td>(43)3551-2665</td>
                                                <td>29/05/2018 12:00:00</td>
                                                <td>RBsync</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Ruan</td>
                                                <td>ruan@hotmail.com</td>
                                                <td>(43) 9 9933-3060</td>
                                                <td>(43)3551-2665</td>
                                                <td>29/05/2018 12:00:00</td>
                                                <td>RBsync</td>
                                            </tr>
                                        </tbody>
                                    </table>
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