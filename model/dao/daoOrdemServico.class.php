<?php

/*incluindo o arquivo com as configurações do BD*/
include_once("conexao.php");

/*Classe de acesso a dados do Ordem Servico*/
class DaoOrdemServico{

	/*construtor da classe*/
	public function DaoOrdemServico(){
		
	}
	
	/* função para gravar os dados */
	public function Gravar($model) {
		/*Monta o Sql*/
		$sql = "insert into ORDEMSERVICO (DTABERTURA, VALOR, DTFECHAMENTO) values ('"
                      . $model->geTDtAbertura()
					  . "', '"
						. $model->getValor()
                      . "', '"
						. $model->getDtFechamento()
                      . "', '"
			
                      . "')";
					  
		/*Executando a consulta SQL*/
		$this->executaSQL($sql);
		
		/*Obtém o ID gerado pela operação INSERT anterior*/
		return mysql_insert_id();
	}

	public function Excluir($model) {
		/*Monta o Sql*/
		$sql = "delete from ORDEMSERVICO where iDORDEMSERVICO = " . $model->getIdOrdemServico();
		$this->executaSQL($sql);
		
		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Alterar($model) {
		/*Monta o Sql*/
		$sql = "update ORDEMSERVICO set DTABERTURA = '" . $model->getDtAbertura() . "', DTFECHAMENTO = '" 
 											  . $model->getDtFechamento() . "', VALOR = '" 
 											  . $model->getValor() . "', ANO_FABRICACAO = '" 
 											  . $model->getFoto() . " ' where idORDEMSERVICO = " 
 											  . $model->getIdOrdemServico();
											  
		$this->executaSQL($sql);

		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Detalhe($model) {
		/*Monta o Sql*/
		$sql = "select * from ORDEMSERVICO where idORDEMSERVICO = " . $model->getIdOrdemServico();
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
