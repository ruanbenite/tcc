<!DOCTYPE html>
<?php
require_once '../VO/formaPagamentoVO.php';
include_once '../Controller/formaPagamentoController.php';

if (isset($_POST['btnSalvar'])) {

    $vo = new formaPagamentoVO();
    $vo->setNomeFormaPagamento($_POST['nome']);
    $vo->setObsFormaPagamento($_POST['observacao']);
    $ctr = new formaPagamentoController();
    $ctr->CadastrarFormaPagamento($vo);
}
if (isset($_POST['btnEditar'])) {

    $vo = new formaPagamentoVO();
    $vo->setIdFormaPagamento($_POST['recipientidFormaPagamento']);
    $vo->setNomeFormaPagamento($_POST['recipientnomeFormaPagamento']);
    $vo->setObsFormaPagamento($_POST['recipientobsFormaPagamento']);
    $vo->setStatusFormaPagamento($_POST['recipientstatusFormaPagamento']);
    $ctr = new formaPagamentoController();
    $ctr->EditarFormaPagamento($vo);
}
if (isset($_POST['btnExcluir'])) {

    $id = $_POST['recipientidFormaPagamento'];
     $ctr = new formaPagamentoController();
    $ctr->ExcluirFormaPagamento($id);
}

$crt = new formaPagamentoController();
$dados = $crt->ConsultarFormaPagamento();
?>
<html lang="pt-br">
    <?php include_once 'headerselAtendentes.php'; ?>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include_once 'menuleft.php'; ?>

                <!-- top navigation -->
                <?php include_once 'menutop.php'; ?>
                <!-- /top navigation -->

                <!-- page content -->
                <?php include_once 'selFormasPagamentoConteudo.php'; ?>
                <!-- /page content -->

                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselFormasPagamento.php'; ?>
    </body>
</html>