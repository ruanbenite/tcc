<?php

include_once 'Conexao.class.php';
include_once '../VO/clienteVO.php';

class clienteDAO extends Conexao {
    /*     * @var PDO */

    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function CadastrarCliente(clienteVO $vo) {
        $this->conexao = parent::getConexao();
        $comando = 'insert into cliente '
                . '(nomeCliente, '
                . 'sobrenomeCliente, '
                . 'generoCliente, '
                . 'emailCliente, '
                . 'senhaCliente, '
                . 'tel_celularCliente, '
                . 'tel_fixoCliente, '
                . 'logradouroCliente, '
                . 'numero_logradouroCliente, '
                . 'cepCliente, '
                . 'cpfCliente, '
                . 'rgCliente, '
                . 'grau_escolarCliente, '
                . 'cidadeCliente, '
                . 'dt_nascimentoCliente, '
                . 'indicacaoCliente, '
                . 'profissaoCliente, '
                . 'obsCliente) '
                . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeCliente());
        $this->sql->bindValue(2, $vo->getSobrenomeCliente());
        $this->sql->bindValue(3, $vo->getGeneroCliente());
        $this->sql->bindValue(4, $vo->getEmailCliente());
        $this->sql->bindValue(5, $vo->getSenhaCliente());
        $this->sql->bindValue(6, $vo->getTelcelularCliente());
        $this->sql->bindValue(7, $vo->getTelfixoCliente());
        $this->sql->bindValue(8, $vo->getLogradouroCliente());
        $this->sql->bindValue(9, $vo->getNumerologradouroCliente());
        $this->sql->bindValue(10, $vo->getCepCliente());
        $this->sql->bindValue(11, $vo->getCpfCliente());
        $this->sql->bindValue(12, $vo->getRgCliente());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeCliente());
        $this->sql->bindValue(14, $vo->getCidadeCliente());
        $this->sql->bindValue(15, $vo->getDtnascimentoCliente());
        $this->sql->bindValue(16, $vo->getIndicacaoCliente());
        $this->sql->bindValue(17, $vo->getProfissaoCliente());
        $this->sql->bindValue(18, $vo->getObsCliente());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function EditarCliente(clienteVO $vo) {
        $this->conexao = parent::getConexao();
        $comando = 'Update cliente set '
                . 'nomeCliente = ?, '
                . 'sobrenomeCliente = ?, '
                . 'generoCliente = ?, '
                . 'emailCliente = ?, '
                . 'senhaCliente = ?, '
                . 'tel_celularCliente = ?, '
                . 'tel_fixoCliente = ?, '
                . 'logradouroCliente = ?, '
                . 'numero_logradouroCliente = ?, '
                . 'cepCliente = ?, '
                . 'cpfCliente = ?, '
                . 'rgCliente = ?, '
                . 'grau_escolarCliente = ?, '
                . 'dt_nascimentoCliente = ?, '
                . 'cidadeCliente = ?, '
                . 'indicacaoCliente = ?, '
                . 'profissaoCliente = ?, '
                . 'obsCliente = ? '
                . 'where idCliente = ?;';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeCliente());
        $this->sql->bindValue(2, $vo->getSobrenomeCliente());
        $this->sql->bindValue(3, $vo->getGeneroCliente());
        $this->sql->bindValue(4, $vo->getEmailCliente());
        $this->sql->bindValue(5, $vo->getSenhaCliente());
        $this->sql->bindValue(6, $vo->getTelcelularCliente());
        $this->sql->bindValue(7, $vo->getTelfixoCliente());
        $this->sql->bindValue(8, $vo->getLogradouroCliente());
        $this->sql->bindValue(9, $vo->getNumerologradouroCliente());
        $this->sql->bindValue(10, $vo->getCepCliente());
        $this->sql->bindValue(11, $vo->getCpfCliente());
        $this->sql->bindValue(12, $vo->getRgCliente());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeCliente());
        $this->sql->bindValue(14, $vo->getDtnascimentoCliente());
        $this->sql->bindValue(15, $vo->getCidadeCliente());
        $this->sql->bindValue(16, $vo->getIndicacaoCliente());
        $this->sql->bindValue(17, $vo->getProfissaoCliente());
        $this->sql->bindValue(18, $vo->getObsCliente());
        $this->sql->bindValue(19, $vo->getIdCliente());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function ConsultarCliente() {
        $this->conexao = parent::getConexao();
        $comando = "select * from cliente";
        $this->sql = $this->conexao->prepare($comando);

        try {
            $this->sql->setFetchMode(PDO::FETCH_ASSOC);
            $this->sql->execute();
            return $this->sql->fetchAll();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ExcluirCliente($id) {

        $this->conexao = parent::getConexao();
        $comando = "DELETE FROM cliente WHERE idCliente = ?;";
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $id);

        try {

            $this->sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

}
