<?php

class ClienteVO {

    private $idCliente;
    private $nomeCliente;
    private $sobrenomeCliente;
    private $generoCliente;
    private $emailCliente;
    private $senhaCliente;
    private $telcelularCliente;
    private $telfixoCliente;
    private $logradouroCliente;
    private $numerologradouroCliente;
    private $cepCliente;
    private $cpfCliente;
    private $rgCliente;
    private $grauescolaridadeCliente;
    private $dtnascimentoCliente;
    private $cidadeCliente;
    private $profissaoCliente;
    private $indicacaoCliente;
    private $obsCliente;

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getSobrenomeCliente() {
        return $this->sobrenomeCliente;
    }

    function getGeneroCliente() {
        return $this->generoCliente;
    }

    function getEmailCliente() {
        return $this->emailCliente;
    }

    function getSenhaCliente() {
        return $this->senhaCliente;
    }

    function getTelcelularCliente() {
        return $this->telcelularCliente;
    }

    function getTelfixoCliente() {
        return $this->telfixoCliente;
    }

    function getLogradouroCliente() {
        return $this->logradouroCliente;
    }

    function getNumerologradouroCliente() {
        return $this->numerologradouroCliente;
    }

    function getCepCliente() {
        return $this->cepCliente;
    }

    function getCpfCliente() {
        return $this->cpfCliente;
    }

    function getRgCliente() {
        return $this->rgCliente;
    }

    function getGrauescolaridadeCliente() {
        return $this->grauescolaridadeCliente;
    }

    function getDtnascimentoCliente() {
        return $this->dtnascimentoCliente;
    }

    function getCidadeCliente() {
        return $this->cidadeCliente;
    }

    function getObsCliente() {
        return $this->obsCliente;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = trim($idCliente);
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = trim($nomeCliente);
    }

    function setSobrenomeCliente($sobrenomeCliente) {
        $this->sobrenomeCliente = trim($sobrenomeCliente);
    }

    function setGeneroCliente($generoCliente) {
        $this->generoCliente = trim($generoCliente);
    }

    function setEmailCliente($emailCliente) {
        $this->emailCliente = trim($emailCliente);
    }

    function setSenhaCliente($senhaCliente) {
        $this->senhaCliente = trim($senhaCliente);
    }

    function setTelcelularCliente($telcelularCliente) {
        $this->telcelularCliente = trim($telcelularCliente);
    }

    function setTelfixoCliente($telfixoCliente) {
        $this->telfixoCliente = trim($telfixoCliente);
    }

    function setLogradouroCliente($logradouroCliente) {
        $this->logradouroCliente = trim($logradouroCliente);
    }

    function setNumerologradouroCliente($numerologradouroCliente) {
        $this->numerologradouroCliente = trim($numerologradouroCliente);
    }

    function setCepCliente($cepCliente) {
        $this->cepCliente = trim($cepCliente);
    }

    function setCpfCliente($cpfCliente) {
        $this->cpfCliente = trim($cpfCliente);
    }

    function setRgCliente($rgCliente) {
        $this->rgCliente = trim($rgCliente);
    }

    function setGrauescolaridadeCliente($grauescolaridadeCliente) {
        $this->grauescolaridadeCliente = trim($grauescolaridadeCliente);
    }

    function setDtnascimentoCliente($dtnascimentoCliente) {
        $this->dtnascimentoCliente = trim($dtnascimentoCliente);
    }

    function setCidadeCliente($cidadeCliente) {
        $this->cidadeCliente = trim($cidadeCliente);
    }

    function setObsCliente($obsCliente) {
        $this->obsCliente = trim($obsCliente);
    }

    function getProfissaoCliente() {
        return $this->profissaoCliente;
    }

    function getIndicacaoCliente() {
        return $this->indicacaoCliente;
    }

    function setProfissaoCliente($profissaoCliente) {
        $this->profissaoCliente = trim($profissaoCliente);
    }

    function setIndicacaoCliente($indicacaoCliente) {
        $this->indicacaoCliente = trim($indicacaoCliente);
    }

}
