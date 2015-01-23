<?php
//importanto a classe Model
include_once("../model/OrdemServico.php");
//importanto a classe DAO
include_once("../model/dao/daoOrdemServico.php");

/*Definição da Classe*/
class CtrlFuncionario
{

	/*Construtor*/
	function CtrlFuncionario(){

	}
	
	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objOrdem_Servico){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objOrdem_Servico->setIdFuncionario($this->Verifica('txtIDORDEM_SERVICO'));
		$objOrdem_Servico->setDtAbertura($this->Verifica('txtDTABERTURA'));
		$objOrdem_Servico->setDtFechamento($this->Verifica('txtDTFECHAMENTO'));
		$objOrdem_Servico->setServico($this->Verifica('txtVLSERVICO'));
	        $objOrdem_Servico->setStatus($this->Verifica('txtSTATUS'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objOrdem_Servico);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdem_Servico);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Gravar($objOrdem_Servico);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de funcionário", "Funcionário salvo com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de funcionário", "Erro ao salvar o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOrdem_Servico, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de funcionário", "Erro ao localizar o funcionário, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdem_Servico);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Detalhe($objOrdem_Servico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOrdem_Servico, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de funcionário", "Erro ao localizar o funcionário, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdem_Servico);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Alterar($objOrdem_Servico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar funcionário", "Funcionário alterado com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar funcionário", "Erro ao alterar o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdem_Servico);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Excluir($objOrdem_Servico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir funcionário", "Funcionário excluido com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir funcionário", "Erro ao excluido o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	public function Login() 
	{
        /*Cria os objetos*/
        $objOrdem_Servico = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOrdem_Servico);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Login($objOrdem_Servico);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOrdem_Servico, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Login", "Usuário ou Senha inválidos, por favor, tente novamente!");
		}

    }
	
}
?>