<?php

/* incluindo o arquivo com as configurações do BD */
include "conexao.php";

/* Classe de acesso a dados do Funcionario */

class DaoOrdemServico {
    /* construtor da classe */

    public function DaoOrdemServico() {
        
    }

    /* função para gravar os dados */

    public function Gravar($model) {
        /* Monta o Sql */
        $sql = "insert into CLIENTE (idCliente, idFuncionario, dt_Abertura, dt_Fechamento, vl_Servico, desativado ) values ('"
                . $model->getidCliente()
                . $model->getidFuncionario()
                . $model->getDtAbertura()
                . $model->getDtFechamento()
                . $model->getServico()
                . $model->getStatus()
                . $model->getDesativado() . "')";


        /* Executando a consulta SQL */
        $this->executaSQL($sql);

        /* Obtém o ID gerado pela operação INSERT anterior */
        return mysql_insert_id();
    }

    public function Excluir($model) {
        /* Monta o Sql */
        $sql = "delete from ordem_servico where IDidordem_servico = " . $model->getIdOrdemServico();
        $this->executaSQL($sql);

        /* Retorna quantos registros foram afetados com a instrução anterior */
        return mysql_affected_rows();
    }

    public function Alterar($model) {
        /* Monta o Sql */
        $sql = "update ordem_servico set dtAbertura= '" . $model->getDtAbertura() . "', dtFechamento = '"
                . $model->getDtFechamento() . "',vl_Servico  = '"
                . $model->getValor() . "', desativado = '"
                . $model->getDesativado() . "'Cliente_idCliente = "
                . $model->getIdCliente(). "'Funcionario_idfuncionario = "
                . $model->getIdOrdemServico()."' where idordem_servico'"; 

        $this->executaSQL($sql);

        /* Retorna quantos registros foram afetados com a instrução anterior */
        return mysql_affected_rows();
    }

    public function Detalhe($model) {
        /* Monta o Sql */
        $sql = "select * from ordem_servico where idordem_servico = " . $model->getIdidordem_servico();
        $result = $this->executaSQL($sql);

        /* Verifica se a consulta anterior retornou algum resultado */
        if (mysql_fetch_assoc($result) == 0) {
            return -1;
        } else {
            /* Move o ponteiro do dataset para o inicio do resultado */
            mysql_data_seek($result, 0);

            /* Retorna os dados do primeiro registro retornado pela consulta */
            return mysql_fetch_assoc($result);
        }
    }

    public function Listar() {

        /* Monta o Sql */
        $sql = "select * from CLIENTE order by idordem_servico ";

        /* Executando a consulta SQL */
        $result = $this->executaSQL($sql);

        /* Obtém um linha do resultado como uma matriz associativa */
        if (mysql_fetch_assoc($result) == 0) {

            return -1;
        } else {

            /* Move o ponteiro interno do resultado */
            mysql_data_seek($result, 0);
            return $result;
        }
    }

    private function executaSQL($sql) {
        /* Executa o Sql */
        //echo $sql;
        return mysql_query($sql);
    }

}
?>



