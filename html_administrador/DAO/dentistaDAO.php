<?php

include_once 'Conexao.class.php';
include_once '../VO/dentistaVO.php';

class dentistaDAO extends Conexao {
    /*     * @var PDO */

    private $conexao;

    /** @var PDOStatement */
    private $sql;

    public function CadastrarDentista(dentistaVO $vo) {
        $vo->setStatusDentista(1);
        $vo->setDtnascimentoDentista('2018-04-04');
        $this->conexao = parent::getConexao();
        $comando = 'insert into dentista '
                . '(nomeDentista, '
                . 'sobrenomeDentista, '
                . 'generoDentista, '
                . 'emailDentista, '
                . 'senhaDentista, '
                . 'tel_celularDentista, '
                . 'tel_fixoDentista, '
                . 'logradouroDentista, '
                . 'numero_logradouroDentista,'
                . 'cepDentista, '
                . 'cpfDentista, '
                . 'rgDentista, '
                . 'grau_escolarDentista, '
                . 'dt_nascimentoDentista, '
                . 'cidadeDentista,'
                . 'salarioDentista,'
                . 'cargoDentista,'
                . 'profissaoDentista,'
                . 'statusDentista,'
                . 'obsDentista)'
                . 'VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeDentista());
        $this->sql->bindValue(2, $vo->getSobrenomeDentista());
        $this->sql->bindValue(3, $vo->getGeneroDentista());
        $this->sql->bindValue(4, $vo->getEmailDentista());
        $this->sql->bindValue(5, $vo->getSenhaDentista());
        $this->sql->bindValue(6, $vo->getTelcelularDentista());
        $this->sql->bindValue(7, $vo->getTelfixoDentista());
        $this->sql->bindValue(8, $vo->getLogradouroDentista());
        $this->sql->bindValue(9, $vo->getNumerologradouroDentista());
        $this->sql->bindValue(10, $vo->getCepDentista());
        $this->sql->bindValue(11, $vo->getCpfDentista());
        $this->sql->bindValue(12, $vo->getRgDentista());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeDentista());
        $this->sql->bindValue(14, $vo->getDtnascimentoDentista());
        $this->sql->bindValue(15, $vo->getCidadeDentista());
        $this->sql->bindValue(16, $vo->getSalarioDentista());
        $this->sql->bindValue(17, $vo->getCargoDentista());
        $this->sql->bindValue(18, $vo->getProfissaoDentista());
        $this->sql->bindValue(19, $vo->getStatusDentista());
        $this->sql->bindValue(20, $vo->getObsDentista());
        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function EditarDentista(dentistaVO $vo) {
        $this->conexao = parent::getConexao();

        $comando = 'Update dentista set '
                . 'nomeDentista = ?, '
                . 'sobrenomeDentista = ?, '
                . 'generoDentista = ?, '
                . 'emailDentista = ?, '
                . 'senhaDentista = ?, '
                . 'tel_celularDentista = ?, '
                . 'tel_fixoDentista = ?, '
                . 'logradouroDentista = ?, '
                . 'numero_logradouroDentista = ?,'
                . 'cepDentista = ?, '
                . 'cpfDentista = ?, '
                . 'rgDentista = ?, '
                . 'grau_escolarDentista = ?, '
                . 'statusDentista = ?, '
                . 'dt_nascimentoDentista = ?, '
                . 'cidadeDentista = ?,'
                . 'salarioDentista = ?,'
                . 'obsDentista = ?, '
                . 'profissaoDentista = ?, '
                . 'cargoDentista = ? '
                . 'where idDentista = ?;';
        $this->sql = $this->conexao->prepare($comando);
        $this->sql->bindValue(1, $vo->getNomeDentista());
        $this->sql->bindValue(2, $vo->getSobrenomeDentista());
        $this->sql->bindValue(3, $vo->getGeneroDentista());
        $this->sql->bindValue(4, $vo->getEmailDentista());
        $this->sql->bindValue(5, $vo->getSenhaDentista());
        $this->sql->bindValue(6, $vo->getTelcelularDentista());
        $this->sql->bindValue(7, $vo->getTelfixoDentista());
        $this->sql->bindValue(8, $vo->getLogradouroDentista());
        $this->sql->bindValue(9, $vo->getNumerologradouroDentista());
        $this->sql->bindValue(10, $vo->getCepDentista());
        $this->sql->bindValue(11, $vo->getCpfDentista());
        $this->sql->bindValue(12, $vo->getRgDentista());
        $this->sql->bindValue(13, $vo->getGrauescolaridadeDentista());
        $this->sql->bindValue(14, $vo->getStatusDentista());
        $this->sql->bindValue(15, $vo->getDtnascimentoDentista());
        $this->sql->bindValue(16, $vo->getCidadeDentista());
        $this->sql->bindValue(17, $vo->getSalarioDentista());
        $this->sql->bindValue(18, $vo->getObsDentista());
        $this->sql->bindValue(19, $vo->getProfissaoDentista());
        $this->sql->bindValue(20, $vo->getCargoDentista());
        $this->sql->bindValue(21, $vo->getIdDentista());

        try {
            $this->sql->execute();
            return 1;
        } catch (Exception $exc) {
            echo $exc->getMessage();
            return -1;
        }
    }

    public function ConsultarDentista() {
        $this->conexao = parent::getConexao();
        $comando = "select * from dentista";
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

    public function ExcluirDentista($id) {

        $this->conexao = parent::getConexao();
        $comando = "DELETE FROM dentista WHERE idDentista = ?;";
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
