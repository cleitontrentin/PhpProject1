<?php

/*incluindo o arquivo com as configurações do BD*/
include_once("conexao.php");

/*Classe de acesso a dados do Opcional*/
class DaoOrdemServico {

	/*construtor da classe*/
	public function DaoOrdemServico(){
		
	}
	
	/* função para gravar os dados */
	public function Gravar($model) {
		/*Monta o Sql*/
		$sql = "insert into ordemservico (idCliente, idFuncionario, DTABERTURA, DTFECHAMENTO, VALOR) values ('"
                      . $model->getIdCliente() . "', '"
                      . $model->getIdFuncionario() . "')"
                      . $model->getDtAbertura() . "')"
                      . $model->getDtFechamento() . "')"
                      . $model->getServico() . "')";
					  
		/*Executando a consulta SQL*/
		$this->executaSQL($sql);
		
		/*Obtém o ID gerado pela operação INSERT anterior*/
		return mysql_affected_rows();
	}

	public function Excluir($model) {
		/*Monta o Sql*/
		$sql = "delete from ordemservico where idORDEMSERVICO = '" . $model->getIdOrdemServico() . "' and IdCliente = '". $model->getIdCliente() . "'";
		$this->executaSQL($sql);
		
		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Alterar($model) {
		/*Monta o Sql*/
		$sql = "update idORDEMSERVICO set idORDEMSERVICO = '" . $model->getIdOrdemServico() . "', IdCliente = '" . $model->getIdCliente() ."'IdFuncionario = '".$model->getIdFuncionario(). 
                        "' where idORDEMSERVICO= '" . $model->getIdOpcional() . "' and idORDEMSERVICO = '". $model->getIdOrdemServico() . "'";
											  
		$this->executaSQL($sql);

		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Detalhe($model) {
		/*Monta o Sql*/
		$sql = "select * from ORDEMSERVICO where idORDEMSERVICO = '" . $model->getIdOrdemServico() . "' and idCliente = '". $model->getIdCliente() . "'and idFuncionario = '". $model->getIdFuncionario()."'";
		$result = $this->executaSQL($sql);

		/*Verifica se a consulta anterior retornou algum resultado*/
		if (mysql_fetch_assoc($result) == 0)
		{
			return 0;
		}
		else
		{
			/*Move o ponteiro do dataset para o inicio do resultado*/
			mysql_data_seek($result, 0);

			/*Retorna os dados do primeiro registro retornado pela consulta*/
			return mysql_fetch_assoc($result);
		}
	}

	public function Listar() {

		/*Monta o Sql*/
		$sql = "select * from ORDEMSERVICO order by idORDEMSERVICO "; 
		
		/*Executando a consulta SQL*/
		$result = $this->executaSQL($sql);

		/*Obtém um linha do resultado como uma matriz associativa*/
		if (mysql_fetch_assoc($result) == 0){
			
			return -1;
			
		}else{
			
			/*Move o ponteiro interno do resultado*/
			mysql_data_seek($result, 0);
			return $result;
			
		}

	}

	private function executaSQL($sql) {
		/*Executa o Sql*/
		//echo $sql;
		return mysql_query($sql);
		
	}
	 
}
?>
