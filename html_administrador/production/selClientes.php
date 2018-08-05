<!DOCTYPE html>
<?php
require_once '../VO/ClienteVO.php';
include_once '../Controller/ClienteController.php';

if (isset($_POST['btnSalvar'])) {
    $vo = new ClienteVO();
    $vo->setNomeCliente($_POST['nome']);
    $vo->setSobrenomeCliente($_POST['sobrenome']);
    $vo->setGeneroCliente($_POST['genero']);
    $vo->setEmailCliente($_POST['email']);
    $vo->setSenhaCliente($_POST['senha']);
    $vo->setTelcelularCliente($_POST['celular']);
    $vo->setTelfixoCliente($_POST['fixo']);
    $vo->setLogradouroCliente($_POST['logradouro']);
    $vo->setNumerologradouroCliente($_POST['numerologradouro']);
    $vo->setCepCliente($_POST['cep']);
    $vo->setCpfCliente($_POST['cpf']);
    $vo->setRgCliente($_POST['rg']);
    $vo->setGrauescolaridadeCliente($_POST['grauescolaridade']);
    $vo->setDtnascimentoCliente($_POST['dtnascimento']);
    $vo->setCidadeCliente($_POST['cidade']);
    $vo->setIndicacaoCliente($_POST['indicacao']);
    $vo->setObsCliente($_POST['observacao']);
    $vo->setProfissaoCliente($_POST['profissao']);
    $ctr = new ClienteController();
    $ctr->CadastrarCliente($vo);
}


if (isset($_POST['btnEditar'])) {
    $vo = new ClienteVO();
    $vo->setIdCliente($_POST['recipientidCliente']);
    $vo->setNomeCliente($_POST['recipientnomeCliente']);
    $vo->setSobrenomeCliente($_POST['recipientsobrenomeCliente']);
    $vo->setGeneroCliente($_POST['genero']);
    $vo->setEmailCliente($_POST['recipientemailCliente']);
    $vo->setSenhaCliente($_POST['recipientsenhaCliente']);
    $vo->setTelcelularCliente($_POST['recipienttel_celularCliente']);
    $vo->setTelfixoCliente($_POST['recipienttel_fixoCliente']);
    $vo->setLogradouroCliente($_POST['recipientlogradouroCliente']);
    $vo->setNumerologradouroCliente($_POST['recipientnumero_logradouroCliente']);
    $vo->setCepCliente($_POST['recipientcepCliente']);
    $vo->setCpfCliente($_POST['recipientcpfCliente']);
    $vo->setRgCliente($_POST['recipientrgCliente']);
    $vo->setGrauescolaridadeCliente($_POST['recipientgrau_escolarCliente']);
    $vo->setDtnascimentoCliente($_POST['recipientdt_nascimentoCliente']);
    $vo->setCidadeCliente($_POST['recipientcidadeCliente']);
    $vo->setIndicacaoCliente($_POST['recipientindicacaoCliente']);
    $vo->setObsCliente($_POST['recipientobsCliente']);
    $vo->setProfissaoCliente($_POST['recipientprofissaoCliente']);
    $ctr = new ClienteController();
    $ctr->EditarCliente($vo);
}
if (isset($_POST['btnExcluir'])) {
    $id = $_POST['recipientidCliente'];
    $ctr = new ClienteController();
    $ctr->ExcluirCliente($id);
}

$crt = new ClienteController();
$dados = $crt->ConsultarCliente();
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
                <?php include_once 'selclientesConteudo.php'; ?>


                <?php include_once 'footer.php'; ?>
            </div>
        </div>
        <?php include_once 'scriptselClientes.php'; ?>
    </body>
</html>