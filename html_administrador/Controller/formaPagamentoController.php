<?php

require_once '../VO/formaPagamentoVO.php';
require_once '../DAO/formaPagamentoDAO.php';

class formaPagamentoController {

    public function CadastrarFormaPagamento(formaPagamentoVO $vo) {

        if ($vo->getNomeFormaPagamento() == '') {

            return -1;
        }

        $DAO = new formaPagamentoDAO();
       
        $DAO->CadastrarFormaPagamento($vo);
        header('Location: selFormasPagamento.php');
    }

    public function ConsultarFormaPagamento() {
        $DAO = new formaPagamentoDAO();
        return $DAO->ConsultarFormaPagamento();
    }

    public function EditarFormaPagamento(formaPagamentoVO $vo) {
        if ($vo->getIdFormaPagamento() == '' ||
                $vo->getNomeFormaPagamento() == '') {
            return -1;
        }
        $DAO = new formaPagamentoDAO();
        $DAO->EditarFormaPagamento($vo);
        header('Location: selFormasPagamento.php');
    }

    public function ExcluirFormaPagamento($id) {
        if ($id == '') {
            return -1;
        }
        $DAO = new formaPagamentoDAO();
        $DAO->ExcluirFormaPagamento($id);
        header('Location: selFormasPagamento.php');
    }

}
