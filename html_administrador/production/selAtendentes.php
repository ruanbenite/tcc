<!DOCTYPE html>
<?php
require_once '../VO/atendenteVO.php';
include_once '../Controller/atendenteController.php';
include_once '../Controller/util.php';

if (isset($_POST['btnSalvar'])) {
    $vo = new atendenteVO();
    $vo->setNomeAtendente($_POST['nome']);
    $vo->setSobrenomeAtendente($_POST['sobrenome']);
    $vo->setGeneroAtendente($_POST['genero']);
    $vo->setEmailAtendente($_POST['email']);
    $vo->setSenhaAtendente($_POST['senha']);
    $vo->setTelcelularAtendente($_POST['celular']);
    $vo->setTelfixoAtendente($_POST['fixo']);
    $vo->setLogradouroAtendente($_POST['logradouro']);
    $vo->setNumerologradouroAtendente($_POST['numlogradouro']);
    $vo->setCepAtendente($_POST['cep']);
    $vo->setCpfAtendente($_POST['cpf']);
    $vo->setRgAtendente($_POST['rg']);
    $vo->setGrauescolaridadeAtendente($_POST['grauescolaridade']);
    $vo->setDtcontratacaoAtendente($_POST['dtcontratacao']);
    $vo->setDtnascimentoAtendente($_POST['dtnascimento']);
    $vo->setCidadeAtendente($_POST['cidade']);
    $vo->setSalarioAtendente($_POST['salario']);
    $vo->setObsAtendente($_POST['observacao']);
    $ctr = new atendenteController();
    $ctr->CadastrarAtendente($vo);
}
if (isset($_POST['btnEditar'])) {

    $vo = new atendenteVO();
    $vo->setIdAtendente($_POST['recipientidAtendente']);
    $vo->setNomeAtendente($_POST['recipientnomeAtendente']);
    $vo->setSobrenomeAtendente($_POST['recipientsobrenomeAtendente']);
    $vo->setGeneroAtendente($_POST['genero']);
    $vo->setEmailAtendente($_POST['recipientemailAtendente']);
    $vo->setSenhaAtendente($_POST['recipientsenhaAtendente']);
    $vo->setTelcelularAtendente($_POST['recipienttel_celularAtendente']);
    $vo->setTelfixoAtendente($_POST['recipienttel_fixoAtendente']);
    $vo->setLogradouroAtendente($_POST['recipientlogradouroAtendente']);
    $vo->setNumerologradouroAtendente($_POST['recipientnumero_logradouroAtendente']);
    $vo->setCepAtendente($_POST['recipientcepAtendente']);
    $vo->setCpfAtendente($_POST['recipientcpfAtendente']);
    $vo->setRgAtendente($_POST['recipientrgAtendente']);
    $vo->setGrauescolaridadeAtendente($_POST['recipientgrau_escolarAtendente']);
    $vo->setDtcontratacaoAtendente($_POST['recipientdt_contratacaoAtendente']);
    $vo->setDtnascimentoAtendente($_POST['recipientdt_nascimentoAtendente']);
    $vo->setCidadeAtendente($_POST['recipientdt_nascimentoAtendente']);
    $vo->setSalarioAtendente($_POST['recipientsalarioAtendente']);
    $vo->setObsAtendente($_POST['recipientobsAtendente']);
    $vo->setStatusAtendente($_POST['recipientstatusAtendente']);
    $ctr = new atendenteController();
    $ctr->EditarAtendente($vo);
}
if (isset($_POST['btnExcluir'])) {
    $id = $_POST['recipientidAtendente'];
    $ctr = new atendenteController();
    $ctr->ExcluirAtendente($id);
}

$crt = new atendenteController();
$dados = $crt->ConsultarAtendente();
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
                <?php include_once 'selAtendentesConteudo.php'; ?>
                <!-- /page content -->


                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselAtendentes.php'; ?>
    </body>
</html>