<?php

require_once '../VO/tipoAtendimentoVO.php';
require_once '../DAO/tipoAtendimentoDAO.php';

class tipoAtendimentoController {

    public function CadastrarTipoAtendimento(tipoAtendimentoVO $vo) {

        if ($vo->getNomeTipoAtendimento() == '') {

            return -1;
        }
        $DAO = new tipoAtendimentoDAO();

        $DAO->CadastrarTipoAtendimento($vo);
        header('Location: selTiposAtendimento.php');
    }

    public function ConsultarTipoAtendimento() {
        $DAO = new tipoAtendimentoDAO();
        return $DAO->ConsultarTipoAtendimento();
    }

    public function EditarTipoAtendimento(tipoAtendimentoVO $vo) {
 
        if ($vo->getIdTipoAtendimento() == '' ||
                $vo->getNomeTipoAtendimento() == '') {
         
            return -1;
        }
        $DAO = new tipoAtendimentoDAO();
          
        $DAO->EditarTipoAtendimento($vo);
        header('Location: selTiposAtendimento.php');
    }

    public function ExcluirTipoAtendimento($id) {
        if ($id == '') {
            return -1;
        }
        $DAO = new tipoAtendimentoDAO();
        $DAO->ExcluirTipoAtendimento($id);
        header('Location: selTiposAtendimento.php');
    }

}
