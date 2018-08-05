<!DOCTYPE html>
<?php
include_once '../Controller/tipoAtendimentoController.php';
include_once '../VO/tipoAtendimentoVO.php';

if (isset($_POST['btnSalvar']) && $_POST['tipoatendimento'] == !'') {
    $vo = new tipoAtendimentoVO();
    $vo->setNomeTipoAtendimento($_POST['tipoatendimento']);
    $vo->setStatusTipoAtendimento(1);
    $vo->setObsTipoAtendimento($_POST['observacao']);
    $ctrl = new tipoAtendimentoController();
    $ctrl->CadastrarTipoAtendimento($vo);
}
if (isset($_POST['btnEditar']) && $_POST['nometipo'] == !'') {
    $vo = new tipoAtendimentoVo();
    $vo->setIdTipoAtendimento($_POST['recipientidTipoatendimento']);
    $vo->setNomeTipoAtendimento($_POST['nometipo']);
    $vo->setStatusTipoAtendimento($_POST['recipientstatusTipoatendimento']);
    $vo->setObsTipoAtendimento($_POST['recipientobsTipoatendimento']);
    $ctr = new tipoAtendimentoController();
    $ctr->EditarTipoAtendimento($vo);
}

if (isset($_POST['btnExcluir']) && $_POST['id'] == !'') {
    $id = $_POST['id'];
     $crt = new tipoAtendimentoController();
    $crt->ExcluirTipoAtendimento($id);
}

$tipocrt = new tipoAtendimentoController();
$dados = $tipocrt->ConsultarTipoAtendimento();
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
                <?php include_once 'selTiposAtendimentoConteudo.php'; ?>
                <!-- /page content -->
                <?php include_once 'tiposatendimentoModal.php'; ?>

                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselTiposAtendimento.php'; ?>
    </body>
</html>