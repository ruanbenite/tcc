<?php

include_once 'Conexao.class.php';
include_once '../VO/formaPagamentoVO.php';

class tipoAtendimentoDAO extends Conexao {
    /*     * @var PDO */

    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function CadastrarTipoAtendimento(tipoAtendimentoVO $vo) {

        $this->conexao = parent::getConexao();
        $comando = 'insert into tipoAtendimento '
                . '(nometipoAtendimento, '
                . 'statustipoAtendimento, '
                . 'obstipoAtendimento)'
                . 'VALUES (?, ?, ?);';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeTipoAtendimento());
        $this->sql->bindValue(2, $vo->getStatusTipoAtendimento());
        $this->sql->bindValue(3, $vo->getObsTipoAtendimento());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function EditarTipoAtendimento(tipoAtendimentoVO $vo) {

        $this->conexao = parent::getConexao();
        $comando = 'Update tipoAtendimento set '
                . 'nometipoAtendimento = ?, '
                . 'statustipoAtendimento = ?, '
                . 'obstipoAtendimento = ? '
                . 'where idTipoAtendimento = ?;';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeTipoAtendimento());
        $this->sql->bindValue(2, $vo->getStatusTipoAtendimento());
        $this->sql->bindValue(3, $vo->getObsTipoAtendimento());
        $this->sql->bindValue(4, $vo->getIdTipoAtendimento());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function ConsultarTipoAtendimento() {
        $this->conexao = parent::getConexao();
        $comando = "select * from tipoAtendimento;";
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

    public function ExcluirTipoAtendimento($id) {
        $this->conexao = parent::getConexao();
        $comando = "DELETE FROM tipoAtendimento WHERE idTipoAtendimento = ?;";
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
