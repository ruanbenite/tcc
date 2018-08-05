<?php

require_once '../VO/clienteVO.php';
require_once '../DAO/clienteDAO.php';
require_once 'util.php';

class clienteController {

    public function CadastrarCliente(clienteVO $vo) {

        if ($vo->getNomeCliente() == '' ||
                $vo->getSobrenomeCliente() == '' ||
                $vo->getEmailCliente() == '') {
            return -1;
        }

        $vo->setDtnascimentoCliente(util::converteDataBanco($vo->getDtnascimentoCliente()));
        $DAO = new clienteDAO();
        $DAO->CadastrarCliente($vo);

        header('Location: selClientes.php');
    }

    public function ConsultarCliente() {
        $DAO = new clienteDAO();
        $dados = $DAO->ConsultarCliente();
        for ($i = 0; $i < count($dados); $i++) {
            $dados[$i]['dt_nascimentoCliente'] = util::converteDataTela($dados[$i]['dt_nascimentoCliente']);
        }

        return $dados;
    }

    public function EditarCliente(clienteVO $vo) {
        if ($vo->getIdCliente() == '' ||
                $vo->getSobrenomeCliente() == '' ||
                $vo->getEmailCliente() == '' ||
                $vo->getSenhaCliente() == '') {
            return -1;
        }
        $vo->setDtnascimentoCliente(util::converteDataBanco($vo->getDtnascimentoCliente()));
        $DAO = new clienteDAO();
        $DAO->EditarCliente($vo);
        header('Location: selClientes.php');
    }

    public function ExcluirCliente($id) {
        if ($id == '') {
            return -1;
        }
        $DAO = new clienteDAO();
        $DAO->ExcluirCliente($id);
        header('Location: selClientes.php');
    }

}
