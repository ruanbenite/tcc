<?php

require_once '../VO/atendenteVO.php';
require_once '../DAO/atendenteDAO.php';
include_once '../Controller/util.php';

class atendenteController {

    public function CadastrarAtendente(atendenteVO $vo) {

        if ($vo->getNomeAtendente() == '' ||
                $vo->getSobrenomeAtendente() == '' ||
                $vo->getEmailAtendente() == '' ||
                $vo->getSenhaAtendente() == '' ||
                $vo->getDtnascimentoAtendente() == '') {

            return -1;
        }

        $DAO = new atendenteDAO();
        if ($vo->getGeneroAtendente($_POST['genero']) == 'M') {
            $vo->setGeneroAtendente(0);
        } else if ($vo->getGeneroAtendente($_POST['genero']) == 'F') {
            $vo->setGeneroAtendente(1);
        } else {
            return -1;
        }
        $vo->setStatusAtendente(1);
        $vo->setDtnascimentoAtendente(util::converteDataBanco($vo->getDtnascimentoAtendente()));
        $vo->setDtcontratacaoAtendente(util::converteDataBanco($vo->getDtcontratacaoAtendente()));
        $DAO->CadastrarAtendente($vo);
        header('Location: selAtendentes.php');
    }

    public function ConsultarAtendente() {
        $DAO = new atendenteDAO();
        $dados = $DAO->ConsultarAtendente();
        for ($i = 0; $i < count($dados); $i++) {
            $dados[$i]['dt_nascimentoAtendente'] = util::converteDataTela($dados[$i]['dt_nascimentoAtendente']);
            $dados[$i]['dt_contratacaoAtendente'] = util::converteDataTela($dados[$i]['dt_contratacaoAtendente']);
        }
        return $dados;
    }

    public function EditarAtendente(atendenteVO $vo) {

        if ($vo->getIdAtendente() == '' ||
                $vo->getSobrenomeAtendente() == '' ||
                $vo->getEmailAtendente() == '' ||
                $vo->getSenhaAtendente() == '' ||
                $vo->getDtnascimentoAtendente() == '') {
            return -1;
        }
        if ($vo->getGeneroAtendente() == 'M') {
            $vo->setGeneroAtendente(0);
        } else if ($vo->getGeneroAtendente() == 'F') {
            $vo->setGeneroAtendente(1);
        } else {
            return -1;
        }
    
        $DAO = new atendenteDAO();
        $vo->setDtnascimentoAtendente(util::converteDataBanco($vo->getDtnascimentoAtendente()));
        $vo->setDtcontratacaoAtendente(util::converteDataBanco($vo->getDtcontratacaoAtendente()));
        $DAO->EditarAtendente($vo);
        header('Location: selAtendentes.php');
    }

    public function ExcluirAtendente($id) {
        if ($id == '') {
            return -1;
        }
        $DAO = new atendenteDAO();
        $DAO->ExcluirAtendente($id);
        header('Location: selAtendentes.php');
    }

}
