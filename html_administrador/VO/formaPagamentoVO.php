<?php

class formaPagamentoVO {

    private $idFormaPagamento;
    private $nomeFormaPagamento;
    private $statusFormaPagamento;
    private $obsFormaPagamento;

    function getIdFormaPagamento() {
        return $this->idFormaPagamento;
    }

    function getNomeFormaPagamento() {
        return $this->nomeFormaPagamento;
    }

    function getStatusFormaPagamento() {
        return $this->statusFormaPagamento;
    }

    function getObsFormaPagamento() {
        return $this->obsFormaPagamento;
    }

    function setIdFormaPagamento($idFormaPagamento) {
        $this->idFormaPagamento = trim($idFormaPagamento);
    }

    function setNomeFormaPagamento($nomeFormaPagamento) {
        $this->nomeFormaPagamento = trim($nomeFormaPagamento);
    }

    function setStatusFormaPagamento($statusFormaPagamento) {
        $this->statusFormaPagamento = trim($statusFormaPagamento);
    }

    function setObsFormaPagamento($obsFormaPagamento) {
        $this->obsFormaPagamento = trim($obsFormaPagamento);
    }

}
