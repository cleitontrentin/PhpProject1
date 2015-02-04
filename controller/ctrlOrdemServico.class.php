<?php

//importanto a classe Model
include_once("../model/ordemServico.class.php");
//importanto a classe DAO
include_once("../model/dao/daoOrdemServico.class.php");

/* Definição da Classe */

class CtrlOrdemServico {
    /* Construtor */

    function CtrlOrdemServico() {
        
    }

    private function Verifica($pVariavel) {

        if ((isset($_REQUEST[$pVariavel])) && (!empty($_REQUEST[$pVariavel]))) {
            return htmlspecialchars($_REQUEST[$pVariavel]);
        } else {
            return "";
        }
    }

    private function RequestForm($objOrdemServico) {



        /* Pegando os campos do formulário e colocando no model */
        $objOrdemServico->setIdOrdemServico($this->Verifica('txtIdOrdemServico'));
        $objOrdemServico->setDtAbertura($this->Verifica('txtDtAbertura'));
        $objOrdemServico->setDtFechamento($this->Verifica('txtDtFechamento'));
        $objOrdemServico->setValor($this->Verifica('txtValor'));
//        $objOrdemServico->setStatus($this->Verifica('txtStatus'));
//        $objOrdemServico->setDesativado($this->Verifica('txtDesativado'));
//        $objOrdemServico->setIdCliente($this->Verifica('txtIdCliente'));
//        $objOrdemServico->setIdFucnionario($this->Verifica('txtIdfuncionario'));
    }

    /* função para abrir a tela principal e carregar as informações necessárias */

    public function Principal() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        $objSendForm = new CtrlSendForm();
        $objSendForm->MostraTela($objOrdemServico);
    }

    /* função para gravar a Ordem servico, obtem os dados do formulário */

    public function Gravar() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Pegando os campos do formulário e colocando no model */
        $this->RequestForm($objOrdemServico);

        /* Enviando os dados para o banco de dados */
        $retorno = $objDaoOrdeservico->Gravar($objOrdemServico);
        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraAlertMsg("OK", "Cadastro de Ordem de Servico", "Ordem de Serviço  salvo com sucesso!", "ordemservico", "principal");
        } else {
            $objSendForm->mostraAlertMsg("ERRO", "Cadastro de Ordem de Servico", "Erro ao salvar a Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
        }
    }

    /* Função para listar os dados, obtem os dados do banco de dados e envia para a tela */

    public function Listar() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Solicitando dados para o banco de dados */
        $retorno = $objDaoOrdeservico->Listar();

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->MostraTela($objOrdemServico, $retorno);
        } else {
            $objSendForm->mostraMsg("ERRO", "Lista de Ordem de Serviço", "Erro ao localizar Ordem de Serviço, por favor, tente novamente!");
        }
    }

    public function Detalhe() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Pegando os campos do formulário e colocando no model */
        $this->RequestForm($objOrdemServico);

        /* Enviando para o banco de dados */
//        $ListaObjetos[0] = $objDaoOrdeservico->ListarCliente($objOrdemServico);
//        $ListaObjetos[1] = $objDaoOrdeservico->ListarVeiculo($objOrdemServico);
        $retorno = $objDaoOrdeservico->Detalhe($objOrdemServico);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->MostraTela($objOrdemServico, $retorno);
        } else {
            $objSendForm->mostraMsg("ERRO", "Detalhe Ordem de Serviço", "Erro ao localizar Ordem de Serviço, por favor, tente novamente!");
        }
    }

    public function Alterar() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Pegando os campos do formulário e colocando no model */
        $this->RequestForm($objOrdemServico);

        /* Enviando para o banco de dados */
        $retorno = $objDaoOrdeservico->Alterar($objOrdemServico);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraAlertMsg("OK", "Alterar Ordem de Serviço", "Ordem de Serviço alterado com sucesso!", "ordemservico", "principal");
        } else {
            $objSendForm->mostraAlertMsg("ERRO", "Alterar Ordem de Serviço", "Erro ao alterar a Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
        }
    }

    public function Excluir() {
        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Pegando os campos do formulário e colocando no model */
        $this->RequestForm($objOrdemServico);

        /* Enviando para o banco de dados */
        $retorno = $objDaoOrdeservico->Excluir($objOrdemServico);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();
        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraAlertMsg("OK", "Excluir Ordem de Serviço", "Ordem de Serviço excluido com sucesso!", "ordemservico", "principal");
        } else {
            $objSendForm->mostraAlertMsg("ERRO", "Excluir Ordem de Serviço", "Erro ao excluido a Ordem de Serviço, por favor, tente novamente!", "ordemservico", "principal");
        }
    }

    /* Função para listar os dados, obtem os dados do banco de dados e envia para a tela */

    public function Pesquisa() {

        /* Cria os objetos */
        $objOrdemServico = new OrdemServico();
        $objDaoOrdeservico = new DaoOrdemServico();

        /* Pegando os campos do formulário e colocando no model */
        $this->RequestForm($objOrdemServico);

        /* Solicitando dados para o banco de dados */
        $retorno = $objDaoOrdeservico->Pesquisa($objOrdemServico);

        /* Criando objeto para mostrar o resultado */
        $objSendForm = new CtrlSendForm();

        /* Verificado o resultado do processamento */
        if ($retorno > 0) {
            $objSendForm->mostraTela($objOrdemServico, $retorno);
        } else {
            $objSendForm->mostraMsg("ERRO", "Lista de Ordem de Serviço", "Erro ao localizar a Ordem de Serviço, por favor, tente novamente!");
        }
    }

}

?>