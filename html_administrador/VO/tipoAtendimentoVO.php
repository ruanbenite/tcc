<?php

class tipoAtendimentoVO {

    private $idTipoAtendimento;
    private $nomeTipoAtendimento;
    private $statusTipoAtendimento;
    private $obsTipoAtendimento;

    function getIdTipoAtendimento() {
        return $this->idTipoAtendimento;
    }

    function getNomeTipoAtendimento() {
        return $this->nomeTipoAtendimento;
    }

    function getStatusTipoAtendimento() {
        return $this->statusTipoAtendimento;
    }

    function getObsTipoAtendimento() {
        return $this->obsTipoAtendimento;
    }

    function setIdTipoAtendimento($idTipoAtendimento) {
        $this->idTipoAtendimento = trim($idTipoAtendimento);
    }

    function setNomeTipoAtendimento($nomeTipoAtendimento) {
        $this->nomeTipoAtendimento = trim($nomeTipoAtendimento);
    }

    function setStatusTipoAtendimento($statusTipoAtendimento) {
        $this->statusTipoAtendimento = trim($statusTipoAtendimento);
    }

    function setObsTipoAtendimento($obsTipoAtendimento) {
        $this->obsTipoAtendimento = trim($obsTipoAtendimento);
    }

}
