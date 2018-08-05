<?php

include_once 'Conexao.class.php';
include_once '../VO/atendenteVO.php';

class atendenteDAO extends Conexao {
    /*     * @var PDO */

    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function CadastrarAtendente(atendenteVO $vo) {
        $this->conexao = parent::getConexao();
        $comando = 'insert into atendente '
                . '(nomeAtendente, '
                . 'sobrenomeAtendente, '
                . 'generoAtendente, '
                . 'emailAtendente, '
                . 'senhaAtendente, '
                . 'tel_celularAtendente, '
                . 'tel_fixoAtendente, '
                . 'logradouroAtendente, '
                . 'numero_logradouroAtendente,'
                . 'cepAtendente, '
                . 'cpfAtendente, '
                . 'rgAtendente, '
                . 'grau_escolarAtendente, '
                . 'dt_contratacaoAtendente, '
                . 'statusAtendente, '
                . 'dt_nascimentoAtendente, '
                . 'cidadeAtendente,'
                . 'salarioAtendente,'
                . 'obsAtendente)'
                . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeAtendente());
        $this->sql->bindValue(2, $vo->getSobrenomeAtendente());
        $this->sql->bindValue(3, $vo->getGeneroAtendente());
        $this->sql->bindValue(4, $vo->getEmailAtendente());
        $this->sql->bindValue(5, $vo->getSenhaAtendente());
        $this->sql->bindValue(6, $vo->getTelcelularAtendente());
        $this->sql->bindValue(7, $vo->getTelfixoAtendente());
        $this->sql->bindValue(8, $vo->getLogradouroAtendente());
        $this->sql->bindValue(9, $vo->getNumerologradouroAtendente());
        $this->sql->bindValue(10, $vo->getCepAtendente());
        $this->sql->bindValue(11, $vo->getCpfAtendente());
        $this->sql->bindValue(12, $vo->getRgAtendente());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeAtendente());
        $this->sql->bindValue(14, $vo->getDtcontratacaoAtendente());
        $this->sql->bindValue(15, $vo->getStatusAtendente());
        $this->sql->bindValue(16, $vo->getDtnascimentoAtendente());
        $this->sql->bindValue(17, $vo->getCidadeAtendente());
        $this->sql->bindValue(18, $vo->getSalarioAtendente());
        $this->sql->bindValue(19, $vo->getObsAtendente());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function EditarAtendente(atendenteVO $vo) {
        $this->conexao = parent::getConexao();

        $comando = 'Update atendente set '
                . 'nomeAtendente = ?, '
                . 'sobrenomeAtendente = ?, '
                . 'generoAtendente = ?, '
                . 'emailAtendente = ?, '
                . 'senhaAtendente = ?, '
                . 'tel_celularAtendente = ?, '
                . 'tel_fixoAtendente = ?, '
                . 'logradouroAtendente = ?, '
                . 'numero_logradouroAtendente = ?,'
                . 'cepAtendente = ?, '
                . 'cpfAtendente = ?, '
                . 'rgAtendente = ?, '
                . 'grau_escolarAtendente = ?, '
                . 'dt_contratacaoAtendente = ?, '
                . 'statusAtendente = ?, '
                . 'dt_nascimentoAtendente = ?, '
                . 'cidadeAtendente = ?,'
                . 'salarioAtendente = ?,'
                . 'obsAtendente = ? '
                . 'where idAtendente = ?;';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeAtendente());
        $this->sql->bindValue(2, $vo->getSobrenomeAtendente());
        $this->sql->bindValue(3, $vo->getGeneroAtendente());
        $this->sql->bindValue(4, $vo->getEmailAtendente());
        $this->sql->bindValue(5, $vo->getSenhaAtendente());
        $this->sql->bindValue(6, $vo->getTelcelularAtendente());
        $this->sql->bindValue(7, $vo->getTelfixoAtendente());
        $this->sql->bindValue(8, $vo->getLogradouroAtendente());
        $this->sql->bindValue(9, $vo->getNumerologradouroAtendente());
        $this->sql->bindValue(10, $vo->getCepAtendente());
        $this->sql->bindValue(11, $vo->getCpfAtendente());
        $this->sql->bindValue(12, $vo->getRgAtendente());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeAtendente());
        $this->sql->bindValue(14, $vo->getDtcontratacaoAtendente());
        $this->sql->bindValue(15, $vo->getStatusAtendente());
        $this->sql->bindValue(16, $vo->getDtnascimentoAtendente());
        $this->sql->bindValue(17, $vo->getCidadeAtendente());
        $this->sql->bindValue(18, $vo->getSalarioAtendente());
        $this->sql->bindValue(19, $vo->getObsAtendente());
        $this->sql->bindValue(20, $vo->getIdAtendente());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function ConsultarAtendente() {
        $this->conexao = parent::getConexao();
        $comando = "select * from atendente";
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

    public function ExcluirAtendente($id) {

        $this->conexao = parent::getConexao();
        $comando = "DELETE FROM atendente WHERE idAtendente = ?;";
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
