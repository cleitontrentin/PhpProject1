<?php
//importanto a classe Model
include_once("../model/OrdemServico.php");
//importanto a classe DAO
include_once("../model/dao/daoOrdemServico.class.php");

/*Definição da Classe*/
class CtrlOrdemServico
{

	/*Construtor*/
	function CtrlOrdemServico(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objOrdemServico){
	
		//echo $this->Verifica('txtFoto');
	
		/*Pegando os campos do formulário e colocando no model*/
		$objOrdemServico->setIdOrdemServico($this->Verifica('txtIdOrdemServico'));
		$objOrdemServico->setIdFuncionario($this->Verifica('txtFuncionario'));
		$objOrdemServico->setIdCliente($this->Verifica('txtCliente'));
		$objOrdemServico->setDtAbertura($this->Verifica('txtDtAbertura'));
		$objOrdemServico->setDtFechamento($this->Verifica('txtDtFechamento'));
		$objOrdemServico->setValor($this->Verifica('txtValor'));
		
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objOrdemServico);
		
	}

	/*função para gravar o Ordem de Servico, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdemServico);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objdaoOrdemServico->Gravar($objOrdemServico);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro Ordem de servico", "Ordem de serviço salva com sucesso!", "ordemservico", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro Ordem de servico", "Erro ao salvar a Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objdaoOrdemServico->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOrdemServico, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de Ordem de serviço", "Erro ao localizar Ordem de serviço, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdemServico);
		
		/*Enviando para o banco de dados*/
		
		$retorno = $objdaoOrdemServico->Detalhe($objOrdemServico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOrdemServico, $retorno, $ListaObjetos);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de Oredem de Servico", "Erro ao localizar Ordem de serciço, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdemServico);

		/*Enviando para o banco de dados*/
		$retorno = $objdaoOrdemServico->Alterar($objOrdemServico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar Ordem de Servico", "Ordem de servico alterado com sucesso!", "ordemservico", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar Ordem de servico", "Erro ao alterar Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdemServico);
		
		/*Enviando para o banco de dados*/
		$retorno = $objdaoOrdemServico->Excluir($objOrdemServico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir Ordem de serviço", "Ordem de serviço excluido com sucesso!", "ordemservico", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir Ordem de serviço", "Erro ao excluido Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdemServico);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objdaoOrdemServico->Pesquisa($objOrdemServico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objOrdemServico, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de Odem de serviço", "Erro ao localizar Ordem de serviço, por favor, tente novamente!");
		}
		
    }


	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function SiteLista() 
	{
		/*Cria os objetos*/
        $objOrdemServico = new OrdemServico();
		$objdaoOrdemServico = new DaoOrdemServico();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objdaoOrdemServico->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTelaSite($objOrdemServico, $retorno);
		}else{
			$objSendForm->mostraMsg("INFO", "Lista de Ordem de Serviço", "Não foi possível localizar Ordem de Serviço, por favor, tente novamente!");
		}

    }
	
}
?>