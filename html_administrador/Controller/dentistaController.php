<?php

require_once '../VO/dentistaVO.php';
require_once '../DAO/dentistaDAO.php';


class dentistaController {

    public function CadastrarDentista(dentistaVO $vo) {

        if ($vo->getNomeDentista() == '' ||
                $vo->getSobrenomeDentista() == '' ||
                $vo->getEmailDentista() == '') {

            return -1;
        }

        $DAO = new dentistaDAO();
        $DAO->CadastrarDentista($vo);
        header('Location: selDentistas.php');
    }

    public function ConsultarDentista() {
        $DAO = new dentistaDAO();
        return $DAO->ConsultarDentista();
    }

    public function EditarDentista(dentistaVO $vo) {
     
        if ($vo->getIdDentista() == '' ||
                $vo->getSobrenomeDentista() == '' ||
                $vo->getEmailDentista() == '') {
            return -1;
        }
        $DAO = new dentistaDAO();
        $DAO->EditarDentista($vo);
        header('Location: selDentistas.php');
    }

    public function ExcluirDentista($id) {
        if ($id == '') {
            return -1;
        }
        $DAO = new dentistaDAO();
        $DAO->ExcluirDentista($id);
        header('Location: selDentistas.php');
    }

}
