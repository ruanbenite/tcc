<?php

include_once 'Conexao.class.php';
include_once '../VO/formaPagamentoVO.php';

class formaPagamentoDAO extends Conexao {
    /*     * @var PDO */

    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function CadastrarFormaPagamento(formaPagamentoVO $vo) {
        $vo->setStatusFormaPagamento(1);
        $this->conexao = parent::getConexao();
        $comando = 'insert into formaPagamento '
                . '(nomeFormaPagamento, '
                . 'statusFormaPagamento, '
                . 'obsFormaPagamento)'
                . 'VALUES (?, ?, ?);';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeFormaPagamento());
        $this->sql->bindValue(2, $vo->getStatusFormaPagamento());
        $this->sql->bindValue(3, $vo->getObsFormaPagamento());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function EditarFormaPagamento(formaPagamentoVO $vo) {
        $this->conexao = parent::getConexao();
        $comando = 'Update formaPagamento set '
                . 'nomeFormaPagamento = ?, '
                . 'statusFormaPagamento = ?, '
                . 'obsFormaPagamento = ? '
                . 'where idFormaPagamento = ?;';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeFormaPagamento());
        $this->sql->bindValue(2, $vo->getStatusFormaPagamento());
        $this->sql->bindValue(3, $vo->getObsFormaPagamento());
        $this->sql->bindValue(4, $vo->getIdFormaPagamento());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function ConsultarFormaPagamento() {
        $this->conexao = parent::getConexao();
        $comando = "select * from formaPagamento";
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

    public function ExcluirFormaPagamento($id) {

        $this->conexao = parent::getConexao();
        $comando = "DELETE FROM formaPagamento WHERE idFormaPagamento = ?;";
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
