<!DOCTYPE html>
<?php
require_once '../VO/DentistaVO.php';
include_once '../Controller/DentistaController.php';
print_r($_POST);
if (isset($_POST['btnSalvar'])) {
    $vo = new DentistaVO();
    $vo->setNomeDentista($_POST['nome']);
    $vo->setSobrenomeDentista($_POST['sobrenome']);
    $vo->setGeneroDentista($_POST['genero']);
    $vo->setEmailDentista($_POST['email']);
    $vo->setSenhaDentista($_POST['senha']);
    $vo->setTelcelularDentista($_POST['celular']);
    $vo->setTelfixoDentista($_POST['fixo']);
    $vo->setLogradouroDentista($_POST['logradouro']);
    $vo->setNumerologradouroDentista($_POST['numlogradouro']);
    $vo->setCepDentista($_POST['cep']);
    $vo->setCpfDentista($_POST['cpf']);
    $vo->setRgDentista($_POST['rg']);
    $vo->setGrauescolaridadeDentista($_POST['grauescolaridade']);
    $vo->setCargoDentista($_POST['cargo']);
    $vo->setProfissaoDentista($_POST['profissao']);
    $vo->setDtnascimentoDentista($_POST['dtnascimento']);
    $vo->setCidadeDentista($_POST['cidade']);
    $vo->setSalarioDentista($_POST['salario']);
    $vo->setObsDentista($_POST['observacao']);
    $ctr = new DentistaController();
    $ctr->CadastrarDentista($vo);
}

if (isset($_POST["btnEditar"])) {
    $vo = new DentistaVO();
    $vo->setIdDentista($_POST['recipientidDentista']);
    $vo->setNomeDentista($_POST['recipientnomeDentista']);
    $vo->setSobrenomeDentista($_POST['recipientsobrenomeDentista']);
    // $vo->setGeneroDentista($_POST['genero']);
    $vo->setEmailDentista($_POST['recipientemailDentista']);
    $vo->setSenhaDentista($_POST['recipientsenhaDentista']);
    $vo->setTelcelularDentista($_POST['recipienttel_celularDentista']);
    $vo->setTelfixoDentista($_POST['recipienttel_fixoDentista']);
    $vo->setLogradouroDentista($_POST['recipientlogradouroDentista']);
    $vo->setNumerologradouroDentista($_POST['recipientnumero_logradouroDentista']);
    $vo->setCepDentista($_POST['recipientcepDentista']);
    $vo->setCpfDentista($_POST['recipientcpfDentista']);
    $vo->setRgDentista($_POST['recipientrgDentista']);
    $vo->setGrauescolaridadeDentista($_POST['recipientgrau_escolarDentista']);
    $vo->setCargoDentista($_POST['recipientcargoDentista']);
    $vo->setProfissaoDentista($_POST['recipientprofissaoDentista']);
    $vo->setDtnascimentoDentista($_POST['recipientdt_nascimentoDentista']);
    $vo->setCidadeDentista($_POST['recipientcidadeDentista']);
    $vo->setSalarioDentista($_POST['recipientsalarioDentista']);
    $vo->setObsDentista($_POST['recipientobsDentista']);
    $vo->setStatusDentista($_POST['recipientstatusDentista']);

    $ctr = new DentistaController();
    $ctr->EditarDentista($vo);
}
if (isset($_POST['btnExcluir'])) {

    $id = $_POST['recipientidDentista'];
    $ctr = new DentistaController();
    $ctr->ExcluirDentista($id);
}

$crt = new DentistaController();
$dados = $crt->ConsultarDentista();
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
                <?php include_once 'selDentistasConteudo.php'; ?>
                <!-- /page content -->


                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselDentistas.php'; ?>

    </body>
</html>